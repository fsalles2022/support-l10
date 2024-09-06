<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupportRequest extends FormRequest
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
        $rules = [
            'subject' => 'required|min:3|max:255',
            'body'    => 'required|min:3|max:100000',
        ];

        if ($this->isMethod('put')) {
            // Ajuste para PUT
            $rules['subject'] = [
                'required',
                'min:3',
                'max:255',
                Rule::unique('supports')->ignore($this->route('support')),
            ];
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'subject.required' => 'O campo assunto é obrigatório.',
            'body.required'    => 'O campo corpo é obrigatório.',
            'subject.min'      => 'O campo assunto deve ter no mínimo :min caracteres.',
            'subject.max'      => 'O campo assunto deve ter no máximo :max caracteres.',
            'body.min'         => 'O campo corpo deve ter no mínimo :min caracteres.',
            'body.max'         => 'O campo corpo deve ter no máximo :max caracteres.',
            'subject.unique'   => 'O campo assunto já está em uso.',
        ];
    }
}
