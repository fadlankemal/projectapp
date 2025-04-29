@extends('layouts.app')

@section('title')
    Edit Role
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-3">
        <h1>Edit Role</h1>
        <a href="{{ url('roles') }}" class="btn btn-danger mb-4">
            {{ __('Back') }}
        </a>
        <!-- errror -->
        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{ url('roles/' . $role->id) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Role Name</label>
                <input type="text" class="form-control" id="name" placeholder="Nama" name="name"
                    value="{{ $role->name }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-success mb-2">Update</button>
        </form>
    </div>
@endsection
