<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOpRequest extends FormRequest
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
            'nama_operator' =>
            [
                'required',
                'max:50',
                Rule::unique('operators','nama_operator')->ignore($this->operator)
            ],
            'id_operator' =>
            [
                'required',
                'max:15',
                Rule::unique('operators','id_operator')->ignore($this->operator)
            ],
            'factory' => 'required',
        ];
    }
}
