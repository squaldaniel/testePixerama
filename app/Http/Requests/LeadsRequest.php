<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadsRequest extends FormRequest
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
            "name" => "required|string|max:100",
            "email" => "required|email",
            "subject" => "required|string",
            "plan" => "required",
            "message" => "required|min:20",
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O Nome é obrigatório',
            'name.string' => 'O Nome é do tipo texto',
            'name.max' => 'O Nome tem um maximo de 100 caracteres',
            "subject.required" => 'O Assunto é obrigatório',
            "subject.string" => 'A mensagem precisa ser do tipo texto',
            'plan.required' => 'A escolha do Plano é obrigatória',
            'message.required' => 'A mensagem é obrigatória',
            'message.required' => 'A mensagem é obrigatória',
            "message.min" => 'A mensagem precisa ter no minimo 20 caracteres',
        ];
    }
}

