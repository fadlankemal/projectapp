<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Milon\Barcode\DNS1D;
use Illuminate\View\View;

class GoodController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $data = Good::orderBy('nomor_rak', 'asc')->paginate(25);

        $search = Good::search($request->search ?? '')->get();        
        $view_data = [
            'data' => $data,
            // 'barcode' => $barcode,
            'search' => $search
        ];
        return view('barang.databarang', $view_data);
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('barang.tambahdata');
    }



    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $stok = $request->input('stok');
        $stok_alert = $request->input('stok_alert');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');
    
        $generator = new DNS1D();
        $generator->setStorPath(__DIR__.'/barcode/');
        $barcode = $generator->getBarcodeHTML($tipe_barang, 'C39');

        Good::insert([
            'nama_barang' => $nama_barang,
            'tipe_barang' => $tipe_barang,
            'merek_barang' => $merek_barang,
            'stok' => $stok,
            'rak_barang' => $rak_barang,
            'nomor_rak' => $nomor_rak,
            'stok_alert' => $stok_alert,
        ]);

        return redirect()->back()->with('Data barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datum = Good::where('id', $id)
            ->first();
        $generator = new DNS1D();
        $generator->setStorPath(__DIR__.'/cache/');
        $barcode = $generator->getBarcodeHTML($datum->tipe_barang, 'C39');

        $view_data = [
            'datum' => $datum,
            'barcode' => $barcode
        ];

        return view ('barang.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $datum = Good::where('id', $id)
            ->first();

        $view_data = [
            'datum' => $datum
        ];
        return view('barang.editdata', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        if (!Auth::check()) {
            return redirect('login');
        }
        
        $nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $stok = $request->input('stok');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');

        Good::where('id', $id)
            ->update([
                'nama_barang' => $nama_barang,
                'tipe_barang' => $tipe_barang,
                'merek_barang' => $merek_barang,
                'stok' => $stok,
                'rak_barang' => $rak_barang,
                'nomor_rak' => $nomor_rak,

            ]);

        return redirect('databarang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        Good::where('id', $id)->delete();

        return redirect('databarang');
    }
}
