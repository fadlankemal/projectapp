@extends('layouts.app')

@section('title')
Dashboard
@endsection


@section('content')
<div class="container mt-2">
    <h1>Edit Data Barang</h1>

    @if(session()->has('error_message'))
    <div class="alert alert-danger">
        {{ session()->get('error_message') }}
    </div>
    @endif

    <form method="POST" action="{{ url("operators/{$operator->nama_operator}") }}" class="form-control">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="namaoperator" class="form-label">Nama Operator</label>
            <input type="text" class="form-control" id="nama_operator" placeholder="Nama Lengkap" name="nama_operator" value="{{ $operator->nama_operator }}">
            @if($errors->has('nama_operator'))
            <span class="text-danger">{{ $errors->first('nama_operator') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="id_operator" class="form-label">Nomor Karyawan</label>
            <input class="form-control" id="id_operator" name="id_operator" value="{{ $operator->id_operator }}"></input>
            @if($errors->has('id_operator'))
            <span class="text-danger">{{ $errors->first('id_operator') }}</span>
            @endif
        </div>


        <div class="mb-3">
            <label for="factory" class="form-label">Factory</label>
            <input class="form-control" id="factory" name="factory" value="{{ $operator->factory }}"></input>
            @if($errors->has('factory'))
            <span class="text-danger">{{ $errors->first('factory') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-success mb-2">Input</button>
    </form>
    <form method="POST" action="{{url ("operators/{operator}")}}" class="form-control">
        @method('delete')
        @csrf
        <button type="submit" value="delete" class="btn btn-danger">DELETE</button>
    </form>
</div>
@endsection