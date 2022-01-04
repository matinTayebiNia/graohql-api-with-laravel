<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class UpdateUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            "id" => ["required"],
            "name" => ["string"],
            "email" =>
                ["email",
                    "required",
                    Rule::unique('users', 'email')
                        ->ignore($this->arg('id'), 'id'),
            ]
        ];
    }
}
