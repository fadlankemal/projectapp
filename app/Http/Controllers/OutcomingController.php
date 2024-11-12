<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Operator;
use App\Models\Movement;
use App\Enums\MovementStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOutcomingRequest;

class OutcomingController extends Controller
{
    public function index(Request $request)
    {
        // }
        if (!Auth::check()) {
            return redirect('login');
        }

        $items = Movement::orderBy('created_at', 'desc')->where('status', MovementStatus::OUTCOMING)->get();

        $goods = Good::all(['id', 'tipe_barang']);

        $ops = Operator::all(['id', 'nama_operator']);
        return view('barangkeluar.index', [
            'goods' => $goods,
            'ops' => $ops,
            'items' => $items
        ]);
    }

    public function store(StoreOutcomingRequest $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Movement::create($request->all());

        $good = Good::findOrFail($request->barang_id);
        $good->stok -= $request->jumlah;
        $good->save();

        return redirect()
            ->back()
            ->with('success', 'Data barang masuk berhasil ditambahkan!');
    }
}
