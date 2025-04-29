@extends('layouts.app')

@section('title')
Data Operator
@endsection


@section('content')
<div class="container-fluid mt-2 mx-3">
    <div class="container mt-3 ">
        <div class="row ">
            <div class="col-10 p-2">
                <h1 class="card-title">
                    {{ __('Tambah Permission') }}
                </h1>
            </div>
            <div class="col-2 d-flex mb-4">
                <a href="{{ url('permissions') }}" class="btn btn-danger ms-auto p-2">
                    {{ __('Back') }}
                </a>
            </div>
        </div>
        <!-- errror -->
        @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{ url('permissions')}}">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Permission Name</label>
                <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-success mb-2">Input</button>
        </form>
    </div>
</div>

@endsection