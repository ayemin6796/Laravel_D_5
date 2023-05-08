<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:2|max:30|unique:categories,title',
            'description' => 'required|min:10|max:2000'
        ];
    }

    public function messages(): array
    {
       return [
        'name.required' => "နာမည်ထည့်ပေးပါ"
       ];
    }
}
