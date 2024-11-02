<!-- Page content-->
@extends('layouts.app')

@section('title')
Data Operator
@endsection


@section('content')
<div class="container-fluid mx-3">
    <h1>Data Operator</h1>
    <a href="{{ url('operators/add')}}" class="btn btn-success mb-2">Tambah data</a>
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> {{ session('success') }} </strong>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
    </div>
    @endif
    <div class="table-responsive mt-2">
        <table class="table table-bordered table-hover" style="border: 1px solid; width: 95%;">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Operator</th>
                    <th>Nomor Karyawan</th>
                    <th>Factory</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php($number = 1)
                    @foreach ($operators as $operator)
                    <td>{{ $number }}</td>
                    <td>{{ $operator->nama_operator}}</td>
                    <td>{{ $operator->id_operator}}</td>
                    <td>{{ $operator->factory}}</td>
                    <td scope="col" class="td-actions text-right">
                        <a href="{{ url("operators/{$operator->nama_operator}/edit") }}" class="btn btn-info">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    @php($number++)
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection