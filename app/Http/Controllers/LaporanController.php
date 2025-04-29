<?php

namespace App\Http\Controllers;

use App\Exports\MovementExport;
use App\Models\Movement;
use App\Models\Good;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Enums\MovementStatus;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Movement::getRecord()->with('barang')->get();
        $items = Good::get();

        return view('laporan.index', ['items' => $items, 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $movement = Movement::find($id);
        $movement->delete();

        return redirect()->back();
    }

    public function export()
    {
        return Excel::download(new MovementExport, 'users.xlsx');
    }
}
