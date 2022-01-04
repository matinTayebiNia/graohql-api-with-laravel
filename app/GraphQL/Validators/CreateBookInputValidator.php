<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

class CreateBookInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'title' => ['required', 'min:5'],
            'image' => ['required', "max:2048", "mimes:jpeg,png,jpg"],
            'description' => ['required', 'min:20'],
            'link' => ['required', 'string'],
            'featured' => ['boolean'],
            'category_id' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'author.required' => 'نام نویسنده وارد نشده.',
            'author.min' => 'نام نویسنده نمیتواند کمتر از 5 کارکتر باشد.',
            'title.required' => 'عنوان وارد نشده.',
            'title.min' => 'عنوان نمیتواند کمتر از 5 کارکتر باشد.',
            'image.required' => 'عکس وارد نشده',
            'description.required' => 'توضیحات کتاب وارد نشده.',
            'description.min' => 'توضیحات کتاب نمیتواند کمتر از 20 کارکتر باشد.',
            'link.required' => 'لینک کتاب وارد نشده.',
            'category_id.required' => 'دسته کتاب انتخاب نشده.'
        ];
    }
}
