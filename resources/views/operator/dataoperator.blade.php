<!-- Page content-->
@extends('layouts.app')

@section('title')
    Data Operator
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-6">
        <h1>Data Operator</h1>
        <a href="{{ url('operators/add') }}" class="btn btn-success mb-2">Tambah data</a>
        @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ session('success') }} </strong>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
            </div>
        @endif
        <div class="table-responsive mt-2">
            <table class="table table-striped  table-hover" style="width: 95%;">
                <thead class="">
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
                            <td>{{ $operator->nama_operator }}</td>
                            <td>{{ $operator->id_operator }}</td>
                            <td>{{ $operator->factory }}</td>
                            <td scope="col" class="td-actions text-right">
                                @can('update operator')
                                    <a href="{{ url('operators/' . $operator->nama_operator . '/edit') }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                @endcan
                                @can('delete operator')
                                <a href="{{ url('operators/' . $operator->id . '/delete') }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                                    {{-- <form method="POST" action="{{ url('operators/' . $operator->id) }}">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form> --}}
                                @endcan
                            </td>
                            @php($number++)
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
