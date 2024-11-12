<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoodRequest extends FormRequest
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
            'nama_barang'           => 'required|max:100',
            'tipe_barang'           => 'required|max:100|unique:goods,tipe_barang',
            'merek_barang'          => 'required|string',
            'satuan'                => 'required|string',
            'stok'                  => '',
            'rak_barang'            => 'required',
            'nomor_rak'             => 'required',  
            'stok_alert'            => 'required|integer',
            'code'                  => '',
            'details'               => '',
            
        ];
    }
}
