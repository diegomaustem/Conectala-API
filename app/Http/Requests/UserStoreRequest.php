<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'name.min' => 'The minimum number of characters is 3.',
            'name.max' => 'The maximum number of characters is 50.',
            'email.required' => 'The email is required.',
            'email.regex' => 'The email is invalid.'
        ];
    }
}
