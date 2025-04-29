<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Good;
use App\Http\Controllers\Controller;
use \Milon\Barcode\DNS1D;
use App\Http\Requests\StoreGoodRequest;
use App\Http\Requests\UpdateGoodRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class GoodController extends Controller
{
    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            new Middleware('permission:view good', only: ['index', 'show']),
            new Middleware('permission:create good', only: ['create', 'store']),
            new Middleware('permission:update good', only: ['update', 'edit']),
            new Middleware('permission:delete good', only: ['destroy']),
        ];
    }

    public function index(Request $request)
    {
        Gate::authorize('view', new Good());

        $goods = Good::get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);


        $view_data = [
            'goods' => $goods,
        ];
        return view('barang.databarang', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Good::class);

        return view('barang.tambahdata');
    }

    public function store(StoreGoodRequest $request)
    {
        Gate::authorize('create', Good::class);

        Good::create($request->except('stok'));
        Alert::success('Data Barang Created Successfully');

        // $generator = new DNS1D();
        // $generator->setStorPath(__DIR__.'/barcode/');
        // $barcode = $generator->getBarcodeHTML($tipe_barang, 'C39');

        return redirect('goods');
    }

    /**
     * Display the specified resource.
     */
    public function show(Good $good)
    {
        Gate::authorize('show', new Good());

        $generator = new DNS1D();
        $generator->setStorPath(__DIR__ . '/cache/');
        $barcode = $generator->getBarcodeHTML($good->tipe_barang, 'C39');

        $view_data = [
            'good'    => $good,
            'barcode' => $barcode
        ];

        return view('barang.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Good $good)
    {
        Gate::authorize('update', $good);

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
        Gate::authorize('update', $good);

        $good->update($request->all());

        return redirect('goods')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Good::where('id', $id)->delete();
        alert()->success('Hore!', 'Data Barang Deleted Successfully');

        return redirect()->back();
    }
}
