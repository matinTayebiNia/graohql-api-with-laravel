<?php

namespace App\GraphQL\Validators\Books;

use Nuwave\Lighthouse\Validation\Validator;

class updateBookInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer'],
            'author' => ['required', 'min:5'],
            'title' => ['required', 'min:5'],
            'image' => [ "max:2048", "mimes:jpeg,png,jpg"],
            'description' => ['required', 'min:20'],
            'link' => ['required', 'string'],
            'featured' => ['required', 'boolean'],
            'category_id' => ['required']
        ];
    }
}
