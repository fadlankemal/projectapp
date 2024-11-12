<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Milon\Barcode\DNS1D;
use Illuminate\View\View;
use App\Http\Requests\StoreGoodRequest;
use App\Http\Requests\UpdateGoodRequest;

class GoodController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $goods = Good::orderBy('nomor_rak', 'asc')->get();

        $search = Good::search($request->search ?? '')->get();        
        $view_data = [
            'goods' => $goods,
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

    public function store(StoreGoodRequest $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        Good::create($request->except('stok'));
    
        // $generator = new DNS1D();
        // $generator->setStorPath(__DIR__.'/barcode/');
        // $barcode = $generator->getBarcodeHTML($tipe_barang, 'C39');

        return redirect('goods')
        ->with('success', 'Data barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Good $good)
    {
        $generator = new DNS1D();
        $generator->setStorPath(__DIR__.'/cache/');
        $barcode = $generator->getBarcodeHTML($good->tipe_barang, 'C39');

        $view_data = [
            'good'    => $good,
            'barcode' => $barcode
        ];

        return view ('barang.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Good $good)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $view_data = [
            'good' => $good
        ];
        return view('barang.editdata', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoodRequest $request, Good $good)
    {
        
        if (!Auth::check()) {
            return redirect('login');
        }
        
        $good->update($request->all());
        
        return redirect('databarang')
            ->with('success', 'Data berhasil diupdate');
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

        return response()->json([
            'success' => true,
            'message' => 'Data Post Berhasil Dihapus!.',
        ]); 
    }
}
