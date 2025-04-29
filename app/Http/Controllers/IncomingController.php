<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Operator;
use App\Models\Movement;
use App\Enums\MovementStatus;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreIncomingRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\DB;
use App\Models\Arduino;

class IncomingController extends Controller
{
    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            new Middleware('permission:view incoming', only: ['index']),
            new Middleware('permission:create incoming', only: ['create', 'store']),
            new Middleware('permission:update incoming', only: ['update', 'edit']),
            new Middleware('permission:delete incoming', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = Movement::orderBy('created_at', 'desc')->where('status', MovementStatus::INCOMING)->get();

        $goods = Good::all(['id', 'tipe_barang']);

        $ops = Operator::all(['id', 'nama_operator']);

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

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
        $cek = Good::findOrFail($request->barang_id);
        if ($cek->stok >= $request->jumlah) {
            Movement::create($request->all());

            $good = Good::findOrFail($request->barang_id);
            $good->stok += $request->jumlah;
            $good->save();

            $arduino = Good::findOrFail($request->barang_id);

            DB::table('arduino_data')->insert([
                'rak' => $arduino->rak_barang,
                'nomor' => $arduino->nomor_rak,
            ]);

            Alert::success('Data Barang Masuk Berhasil Ditambahkan!');

            return redirect()
                ->back();
        } 
        else {
            Alert::error('Stok barang tdk cukup!');

            return redirect()
                ->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Movement::findOrFail($id);
        $good = Good::findOrFail($item->barang_id);
        $good->stok -= $item->jumlah;
        $good->save();
        Movement::where('id', $id)->delete();

        alert()->success('Hore!', 'Data Barang Masuk Deleted Successfully');

        return redirect()->back();
    }

    public function show(Request $request)
    {
        // $arduino = DB::table('arduino_data')->select("id","variabel","nilai")->first();

        $arduino = Arduino::select("id", "rak", "nomor")
            ->first()
            ->toJson();

        dd($arduino);
        // return $arduino->toJson();
        // return view('show', [
        //     'arduino' => $arduino
        // ]);
    }
}
