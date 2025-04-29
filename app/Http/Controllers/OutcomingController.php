<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Operator;
use App\Models\Movement;
use App\Models\Arduino;
use App\Enums\MovementStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOutcomingRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OutcomingController extends Controller
{
    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            new Middleware('permission:view outcoming', only: ['index']),
            new Middleware('permission:create outcoming', only: ['create', 'store']),
            new Middleware('permission:update outcoming', only: ['update', 'edit']),
            new Middleware('permission:delete outcoming', only: ['destroy']),
        ];
    }

    public function index(Request $request)
    {
        $items = Movement::with("barang")->where('status', MovementStatus::OUTCOMING)->get();

        $goods = Good::all(['id', 'tipe_barang']);

        $ops = Operator::all(['id', 'nama_operator']);

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('barangkeluar.index', [
            'goods' => $goods,
            'ops' => $ops,
            'items' => $items
        ]);
    }

    public function store(StoreOutcomingRequest $request)
    {
        $cek = Good::findOrFail($request->barang_id);
        if ($cek->stok >= $request->jumlah) {
            Movement::create($request->all());

            $good = Good::findOrFail($request->barang_id);
            $good->stok -= $request->jumlah;
            $good->save();

            $arduino = Good::findOrFail($request->barang_id);

            DB::table('arduino_data')->insert([
                'rak' => $arduino->rak_barang,
                'nomor' => $arduino->nomor_rak,
            ]);

            Alert::success('Data Barang Keluar Berhasil Ditambahkan!');

            return redirect()
                ->back();
        } 
        else {
            Alert::error('Stok barang tdk cukup!');

            return redirect()
                ->back();
        }
    }

    public function destroy($id)
    {
        $item = Movement::findOrFail($id);
        $good = Good::findOrFail($item->barang_id);
        $good->stok += $item->jumlah;
        $good->save();
        Movement::where('id', $id)->delete();

        alert()->success('Hore!', 'Data Barang Keluar Deleted Successfully');

        return redirect()->back();
    }

    public function show(Request $request)
    {
        $arduino = Arduino::select("id", "rak", "nomor")
            ->first()
            ->toJson();

        dd($arduino);
    }
}
