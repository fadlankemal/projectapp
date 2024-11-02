<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOpRequest;
use App\Http\Requests\UpdateOpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Operator;


class OpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $operators = Operator::all();
        // ->where('id', '=', $id)
        // ->first();

        $view_data = [
            'operators' => $operators,
        ];
        return view('operator.dataoperator', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('operator.tambahdataoperator'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOpRequest $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Operator::create($request->all());

        return redirect('operators')
            ->with('success', 'Data Operator berhasil ditambahkan');
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
    public function edit(Operator $operator)
    {
        if (!Auth::check()) {
            return redirect('login');
        }


        // $datum = Operator::where('id', $id)
        // ->first();

        // $view_data = [
        //     'datum' => $datum
        // ];
        return view('operator.editdataop', ['operator' => $operator]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOpRequest $request, Operator $operator)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        // $nama_operator = $request->input('nama_operator');
        // $id_operator = $request->input('id_operator');
        // $factory = $request->input('factory');


        // Operator::where('id', $id)
        // ->update([
        //     'nama_operator' => $nama_operator,
        //     'id_operator' => $id_operator,
        //     'factory' => $factory,
        // ]);

        $operator->update($request->all());

        return redirect('operators')
            ->with('success', 'Data Operator berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        Operator::where('id', $id)->delete();

        return redirect('operators');
    }
}
