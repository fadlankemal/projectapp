@extends('layouts.app')

@section('title')
Permission Role
@endsection


@section('content')
<div class="container-fluid mt-2 mx-6">
    <h1>Permission</h1>
    <a href="{{ url('permissions/create')}}" class="btn btn-success mb-2">Tambah permission</a>
    @if(session('status'))
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
                    @foreach ($permissions as $permission)
                    <td>{{ $number }}</td>
                    <td>{{ $permission->name}}</td>
                    <td scope="col" class="td-actions text-right">
                        @can('update permission')
                        <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="btn btn-info btn-sm">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        @endcan
                        @can('delete permission')
                        <a href="{{ url('permissions/'.$permission->id.'/delete') }}" class="btn btn-danger btn-sm">
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