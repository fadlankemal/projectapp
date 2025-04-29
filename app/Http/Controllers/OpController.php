<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOpRequest;
use App\Http\Requests\UpdateOpRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controllers\Middleware;

class OpController extends Controller
{

    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            new Middleware('permission:view operator', only: ['index']),
            new Middleware('permission:create operator', only: ['create', 'store']),
            new Middleware('permission:update operator', only: ['update', 'edit']),
            new Middleware('permission:delete operator', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view', new Operator());

        $operators = Operator::all();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $view_data = [
            'operators' => $operators,
        ];
        return view('operator.dataoperator', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Gate::authorize('create', Operator::class);

        return view('operator.tambahdataoperator');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOpRequest $request)
    {
        Gate::authorize('store', Operator::class);

        Operator::create($request->all());
        Alert::success('Data Operator Created Successfully');
        return redirect('operators');
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
        Gate::authorize('edit', $operator);

        return view('operator.editdataop', ['operator' => $operator]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOpRequest $request, Operator $operator)
    {
        Gate::authorize('update', $operator);

        $operator->update($request->all());

        return redirect('operators')
            ->with('success', 'Data Operator berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Operator::where('id', $id)->delete();
        alert()->success('Hore!', 'Data Operators Deleted Successfully');

        return redirect('operators')->with('status', 'Data operator berhasil dihapus');
    }
}
