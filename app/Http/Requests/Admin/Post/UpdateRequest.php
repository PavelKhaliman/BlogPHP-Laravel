<?php

namespace App\Http\Requests\Admin\Post;

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
            'title'=>'required|string',
            'content'=>'required|string',
            'post_image'=>'nullable|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_id'=>'nullable|array',
            'tag_id.*'=>'nullable|integer|exists:tags,id',

        ];
    }
    public function messages(): array {

        return [
            'title.required' => 'это поле необходимо заполнить',
            'title.string' => 'данные должны соответствовать строке',
            'content.required' => 'это поле необходимо заполнить',
            'content.string' => 'данные должны соответствовать строке',
            'post_image.required' => 'это поле необходимо заполнить',
            'post_image.file' => 'выберете файл',
            'category_id.required' => 'это поле необходимо заполнить',
            'category_id.integer' => 'id категории должен быть числом',
            'category_id.exists' => 'id категории должен быть в БД',
            'tag_id.array' => 'необходим массив данных',


        ];
    }
}
