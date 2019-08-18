<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
        if (request()->route('id') && intval(request()->route('id')) > 0){
            unset($rules['password']);
        }
            return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'وارد کردن نام کامل الزامی است.',
            'email.required' => 'وارد کردن ایمیل الزامی است.',
            'email.email' => 'فرمت ایمیل وارد شده صحیح نمیباشد.',
            'password.required' => 'وارد کردن گذرواژه الزامیست.',
            'password.min' => 'حداقل کاراکتر ورودی برای کلمه عبور 6 عدد میباشد.'
        ];
    }
}
