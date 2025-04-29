@can('view user')
@extends('layouts.app')

@section('title')
    Users
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-6">
        <h1>User</h1>

        <a href="{{ url('users/create') }}" class="btn btn-success mb-2">Tambah user</a>
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
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php($number = 1)
                        @foreach ($users as $user)
                            <td>{{ $number }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $rolename)
                                        <label class="badge bg-primary mx-1">{{ $rolename }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td scope="col" class="td-actions text-right">
                                @can('update user')
                                    <a href="{{ url('users/' . $user->id . '/edit') }}" class="btn btn-info btn-sm">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                @endcan

                                @can('delete user')
                                    <a href="{{ url('users/' . $user->id . '/delete') }}" class="btn btn-danger btn-sm"
                                        data-confirm-delete="true">
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
@endcan