<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Operator;
use App\Models\Movement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreIncomingRequest;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // }
        if (!Auth::check()) {
            return redirect('login');
        }

        $items = Movement::orderBy('created_at', 'desc')->get();

        $goods = Good::all(['id', 'tipe_barang']);
        $ops = Operator::all(['id', 'nama_operator']);
        return view('barangmasuk.index', [
            'goods' => $goods,
            'ops' => $ops,
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Movement::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $tipe_barang = $request->input('tipe_barang');
        $jumlah = $request->input('jumlah');
        $nama_operator = $request->input('nama_operator');

        Good::where('id', $id)
            ->update([
                'tipe_barang' => $tipe_barang,
                'jumlah' => $jumlah,
                'nama_operator' => $nama_operator,
                'created_at' => date('Y-m-d H:i:s')
            ]);

        return redirect('barangmasuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
