<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class PostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tytul' => 'required|max:200|min:3',
            'autor' => [
                'required', 
                'max:100', 
                'min:2'
                ],
            'email' => 'required|max:200|min:5|email:dns,rfc',
            'tresc' => 'required|min:6'
        ];
    }
    #[Override]
    public function messages(): array
    {
        return [
            'required' => 'Pole :attribute jest wymagane',
            'min' => "Minimalna liczba znaków to :min",
            'max' => "Maksymalna liczba znaków to :max",
            'email' => "Podaj prawidłowy email"
        ];
    }
}
