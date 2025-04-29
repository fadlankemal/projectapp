@extends('layouts.app')


@section('title')
    Tambah Data
@endsection

@section('content')
    <div class="container mt-2 mx-3">

        <!-- errror -->
        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{ url('goods') }}" class="">
            @csrf
            <div class="card mt-2 me-3">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-10 p-2">
                            <h3 class="card-title">
                                {{ __('Tambah Data Barang') }}
                            </h3>

                        </div>
                        <div class="col-2 d-flex mb-3">
                            <a href="{{ url('goods') }}" class="btn btn-danger ms-auto p-2">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="row row-cards">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="namabarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="namabarang"
                                    placeholder="Sensor, PLC, Solenoid Valve, etc" name="nama_barang">
                                @if ($errors->has('nama_barang'))
                                    <span class="text-danger">{{ $errors->first('nama_barang') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="tipebarang" class="form-label">Tipe Barang</label>
                                <input class="form-control" id="tipebarang" name="tipe_barang"></input>
                                @if ($errors->has('tipe_barang'))
                                    <span class="text-danger">{{ $errors->first('tipe_barang') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="merekbarang" class="form-label">Merek Barang</label>
                                <input class="form-control" id="merekbarang" name="merek_barang"></input>
                                @if ($errors->has('merek_barang'))
                                    <span class="text-danger">{{ $errors->first('merek_barang') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input class="form-control" id="satuan" name="satuan"></input>
                                @if ($errors->has('satuan'))
                                    <span class="text-danger">{{ $errors->first('satuan') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="stok_alert" class="form-label">Minimum stok</label>
                                <input class="form-control" id="stok_alert" name="stok_alert"></input>
                                @if ($errors->has('stok_alert'))
                                    <span class="text-danger">{{ $errors->first('stok_alert') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="rakbarang" class="form-label">Rak Barang</label>
                                <input class="form-control" id="rakbarang" name="rak_barang"></input>
                                @if ($errors->has('rak_barang'))
                                    <span class="text-danger">{{ $errors->first('rak_barang') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="nomorrak" class="form-label">Nomor Rak</label>
                                <input class="form-control" id="nomor_rak" name="nomor_rak"></input>
                                @if ($errors->has('nomor_rak'))
                                    <span class="text-danger">{{ $errors->first('nomor_rak') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">Details</label>
                                <textarea type="textarea" class="form-control" id="details" name="details"></textarea>
                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success mb-2">Input</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
