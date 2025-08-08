<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',

        ];
    }

    public function messages(): array
    {

        return [
            'name.required' => 'это поле необходимо заполнить',
            'name.string' => 'данные должны соответствовать строке',
            'email.required' => 'это поле необходимо заполнить',
            'email.string' => 'данные должны соответствовать строке',
            'email.email' => 'формат user@email.ru',
            'email.unique' => 'пользователь с таким Email уже существует',
            'password.required' => 'это поле необходимо заполнить',
            'password.string' => 'данные должны соответствовать строке',

        ];
    }
}
