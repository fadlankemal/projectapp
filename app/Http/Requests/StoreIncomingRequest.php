<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncomingRequest extends FormRequest
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
            'jumlah'            => 'required|integer',
            'operator_id'       => 'required|integer',
            'barang_id'         => 'required|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'jumlah.required' => 'Jumlah harus diisi',
            'operator_id.required' => 'Nama PIC harus dipilih',
            'barang_id.required' => 'Tipe barang harus dipilih',
        ];
    }
}
