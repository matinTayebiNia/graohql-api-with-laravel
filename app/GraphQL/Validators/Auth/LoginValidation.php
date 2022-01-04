<?php

namespace App\GraphQL\Validators\Auth;

use Nuwave\Lighthouse\Validation\Validator;

class LoginValidation extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'username' => ['email', 'required', 'min:5', 'max:200'],
            'password' => ['min:8', 'required', 'max:200']
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'ایمیل وارد نشده',
            'username.email' => 'ایمیل معتبر نیست',
            'username.min' => 'ایمیل نباید کمتر از 5 کارکتر باشد',
            'username.max' => 'کارکتر های وارد شده بیش از حد مجاز',
            'password.min' => 'رمز عبور نباید کمتر از 8 کارکتر باشد',
            'password.required' => 'رمز عبور وارد نشده',
            'password.max' => 'کارکتر های وارد شده بیش از حد مجاز',
        ];
    }
}
