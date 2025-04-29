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

    public function messages(): array
{
    return [
        'nama_barang.required' => 'Nama barang harus diisi',
        'tipe_barang.required' => 'Tipe barang harus diisi',
        'tipe_barang.max' => 'Tipe barang maksimal 100 karakter',
        'tipe_barang.unique' => 'Tipe barang sudah ada',
        'merek_barang.required' => 'Merek barang harus diisi',
        'satuan.required' => 'Satuan barang harus diisi',
        'stok.required' => 'Stok barang harus diisi',
        'rak_barang.required' => 'Rak barang harus diisi',
        'nomor_rak.required' => 'Nomor rak barang harus diisi',  
        'stok_alert.required' => 'Stok alert barang harus diisi',

    ];
}
}
