<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string',
            'role'=>'required|integer',
        ];
    }
    public function messages(): array {

        return [
            'name.required' => 'это поле необходимо заполнить',
            'name.string' => 'данные должны соответствовать строке',
            'email.required' => 'это поле необходимо заполнить',
            'email.string' => 'данные должны соответствовать строке',
            'email.email' => 'формат user@email.ru',
            'email.unique' => 'такой Email уже существует',
            'password.required' => 'это поле необходимо заполнить',
            'password.string' => 'данные должны соответствовать строке',

        ];
    }
}
