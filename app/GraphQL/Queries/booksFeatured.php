<?php

namespace App\GraphQL\Queries;

use App\Models\Book;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class booksFeatured
{


    /**
     * @param null $_
     * @param array<string, mixed> $args
     * @param GraphQLContext|null $context
     * @param ResolveInfo $resolveInfo
     * @return
     */
    public function __invoke($_, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {

        return Book::where('featured', $args['featured'])->get();
    }
}
