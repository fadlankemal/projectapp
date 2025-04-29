@extends('layouts.app')

@section('title')
    Permission Role
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-6">
        <h1>Roles</h1>
        <a href="{{ url('roles/create') }}" class="btn btn-success mb-2">Tambah role</a>
        @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ session('status') }} </strong>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
            </div>
        @endif
        <div class="table-responsive mt-2">
            <table class="table table-striped table-hover" style=" width: 95%;">
                <thead class="">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php($number = 1)
                        @foreach ($roles as $role)
                            <td>{{ $number }}</td>
                            <td>{{ $role->name }}</td>
                            <td scope="col" class="td-actions text-right">
                                <a href="{{ url('roles/' . $role->id . '/give-permissions') }}" class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-dice-three"></i>
                                </a>

                                @can('update role')
                                    <a href="{{ url('roles/' . $role->id . '/edit') }}" class="btn btn-info btn-sm">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                @endcan

                                @can('delete role')
                                    <a href="{{ url('roles/' . $role->id . '/delete') }}" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
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
