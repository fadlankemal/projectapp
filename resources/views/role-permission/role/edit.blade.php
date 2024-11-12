@extends('layouts.app')

@section('title')
Edit Role
@endsection


@section('content')
<div class="container-fluid mt-2 mx-3">
    <div class="container mt-3 ">
        <h1>Edit Role</h1>
        <!-- errror -->
        @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{ url('roles/'.$role->id) }}">
        @method('PUT')
        @csrf
            <div class="mb-3">
                <label for="" class="form-label">Role Name</label>
                <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="{{ $role->name }}">
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <!-- <div class="mb-3">
            <label for="id_operator" class="form-label">Nomor Karyawan</label>
            <input class="form-control" id="id_operator" placeholder="123456xxx" name="id_operator"></input>
            @if($errors->has('id_operator'))
            <span class="text-danger">{{ $errors->first('id_operator') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="factory" class="form-label">Factory</label>
            <input class="form-control" id="factory" name="factory"></input>
            @if($errors->has('factory'))
            <span class="text-danger">{{ $errors->first('factory') }}</span>
            @endif
        </div> -->
            <button type="submit" class="btn btn-success mb-2">Update</button>
        </form>
    </div>
</div>

@endsection