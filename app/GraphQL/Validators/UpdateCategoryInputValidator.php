<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class UpdateCategoryInputValidator extends Validator
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
            "name" =>
                [
                    "required",
                    Rule::unique('categories', 'name')
                        ->ignore($this->arg('id'), 'id'),
                ]
        ];
    }
}
