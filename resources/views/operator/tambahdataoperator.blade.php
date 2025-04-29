@extends('layouts.app')

@section('title')
    Tambah Data
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-3">
        <div class="container mt-3 ">
            <div class="row ">
                <div class="col-10 p-2">
                    <h1 class="card-title">
                        {{ __('Tambah Data Operator') }}
                    </h1>
                </div>
                <div class="col-2 d-flex mb-4">
                    <a href="{{ url('operators') }}" class="btn btn-danger ms-auto p-2">
                        {{ __('Back') }}
                    </a>
                </div>
            </div>
            <!-- errror -->
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif
            <!-- form -->
            <form method="POST" action="{{ url('operators') }}">
                @csrf
                <div class="mb-3">
                    <label for="nama_operator" class="form-label">Nama Operator</label>
                    <input type="text" class="form-control" id="nama_operator" placeholder="Nama" name="nama_operator">
                    @if ($errors->has('nama_operator'))
                        <span class="text-danger">{{ $errors->first('nama_operator') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="id_operator" class="form-label">Nomor Karyawan</label>
                    <input class="form-control" id="id_operator" placeholder="123456xxx" name="id_operator"></input>
                    @if ($errors->has('id_operator'))
                        <span class="text-danger">{{ $errors->first('id_operator') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="factory" class="form-label">Factory</label>
                    <input class="form-control" id="factory" name="factory"></input>
                    @if ($errors->has('factory'))
                        <span class="text-danger">{{ $errors->first('factory') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-success mb-2">Input</button>
            </form>
        </div>
    </div>
@endsection
