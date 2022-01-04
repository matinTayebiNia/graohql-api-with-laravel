<?php

namespace App\GraphQL\Directives;


use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Nuwave\Lighthouse\Schema\Directives\BaseDirective;
use Nuwave\Lighthouse\Schema\Values\FieldValue;
use Nuwave\Lighthouse\Support\Contracts\FieldMiddleware;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class IsAdminDirective extends BaseDirective implements FieldMiddleware
{
    
    /**
     * @var AuthFactory
     */
    protected $authFactory;

    public function __construct(AuthFactory $authFactory)
    {
        $this->authFactory = $authFactory;
    }


    public static function definition(): string
    {
        return /** @lang GraphQL */ <<<'GRAPHQL'
            directive @isAdmin(
            guard:String
            ) on FIELD_DEFINITION
GRAPHQL;
    }

    public function handleField(FieldValue $fieldValue, Closure $next): FieldValue
    {
        $resolver = $fieldValue->getResolver();

        // If you have any work to do that does not require the resolver arguments, do it here.
        // This code is executed only once per field, whereas the resolver can be called often.

        $fieldValue->setResolver(function ($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo) use ($resolver) {
            // Do something before the resolver, e.g. validate $args, check authentication

            // Call the actual resolver
            $result = $resolver($root, $args, $context, $resolveInfo);
            $guard = $this->directiveArgValue('guard', config('lighthouse.guard'));
            if ($this->authFactory->guard($guard)->user()) {
                if ($this->authFactory->guard($guard)->user()->isSuperuser() ||
                    $this->authFactory->guard($guard)->user()->isStaff()) {
                    return $result;
                }
            }
            return null;

        });

        // Keep the chain of adding field middleware going by calling the next handler.
        // Calling this before or after ->setResolver() allows you to control the
        // order in which middleware is wrapped around the field.
        return $next($fieldValue);
    }
}
