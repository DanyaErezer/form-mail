<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:25',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Поле имя должно быть обязательно для заполнения',
            'email.required' => 'Поле email должно быть обязательно для заполнения',
            'phone.required' => 'Поле имя должно быть обязательно для заполнения',
            'email.email' => 'Поле email должно содержать корректный email адрес',
        ];
    }
}
