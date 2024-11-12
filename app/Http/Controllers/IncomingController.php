<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Operator;
use App\Models\Movement;
use App\Enums\MovementStatus;
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

        $items = Movement::orderBy('created_at', 'desc')->where('status', MovementStatus::INCOMING)->get();
        
        $goods = Good::all(['id', 'tipe_barang']) ;
        
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
    public function store(StoreIncomingRequest $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Movement::create($request->all());

        $good = Good::findOrFail($request->barang_id);
        $good->stok += $request->jumlah;
        $good->save();

        return redirect()
            ->back()
            ->with('success', 'Data barang masuk berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
