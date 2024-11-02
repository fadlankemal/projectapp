@extends('layouts.app')


@section('title')
Tambah Data
@endsection

@section('content')
    <div class="container mt-3 ">
        <h1>Tambah Data Barang</h1>
        <form method="POST" action="{{ url('data')}}" class="form-control">
            @csrf

            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" placeholder="Sensor, PLC, Solenoid Valve, etc" name="nama_barang">
            </div>
            <div class="mb-3">
                <label for="tipebarang" class="form-label">Tipe Barang</label>
                <input class="form-control" id="tipebarang" name="tipe_barang"></input>
            </div>
            <div class="mb-3">
                <label for="merekbarang" class="form-label">Merek Barang</label>
                <input class="form-control" id="merekbarang" name="merek_barang"></input>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input class="form-control" id="stok" name="stok"></input>
            </div>
            <div class="mb-3">
                <label for="stok_alert" class="form-label">Minimum stok</label>
                <input class="form-control" id="stok_alert" name="stok_alert"></input>
            </div>
            <div class="mb-3">
                <label for="rakbarang" class="form-label">Rak Barang</label>
                <input class="form-control" id="rakbarang" name="rak_barang"></input>
            </div>
            <div class="mb-3">
                <label for="nomorrak" class="form-label">Nomor Rak</label>
                <input class="form-control" id="nomorrak" name="nomor_rak"></input>
            </div>
            <button type="submit" class="btn btn-success mb-2">Input</button>
        </form>
    </div>
    @endsection
