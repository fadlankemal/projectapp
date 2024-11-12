@extends('layouts.app')


@section('title')
Tambah Data
@endsection

@section('content')
<div class="container-fluid mt-2 mx-3">
    <h1>Edit Data Barang</h1>
    <form method="POST" action="{{ url("goods/{$good->tipe_barang}") }}" class="">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Product Details') }}
                        </h3>

                        <div class="row row-cards">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">
                                        {{ __('Name') }}
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="namabarang" placeholder="Sensor, PLC, Solenoid Valve, etc" name="nama_barang" value="{{ $good->nama_barang}}"></input>
                                    @if($errors->has('nama_barang'))
                                    <span class="text-danger">{{ $errors->first('nama_barang') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="tipebarang" class="form-label">
                                        {{ __('Tipe Barang') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="tipebarang" name="tipe_barang" value="{{ $good->tipe_barang}}"></input>
                                    @if($errors->has('tipe_barang'))
                                    <span class="text-danger">{{ $errors->first('tipe_barang') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="merekbarang" class="form-label">
                                        {{ __('Merek Barang') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" id="merekbarang" name="merek_barang" value="{{ $good->merek_barang }}"></input>
                                    @if($errors->has('merek_barang'))
                                    <span class="text-danger">{{ $errors->first('merek_barang') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input class="form-control" id="stok" name="stok" value="{{ $good->stok }}"></input>
                                    @if($errors->has('stok'))
                                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input class="form-control" id="satuan" name="satuan" value="{{ $good->satuan }}"></input>
                                    @if($errors->has('satuan'))
                                    <span class="text-danger">{{ $errors->first('satuan') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="stok_alert" class="form-label">Minimum stok</label>
                                    <input class="form-control" id="stok_alert" name="stok_alert" value="{{ $good->stok_alert }}"></input>
                                    @if($errors->has('stok_alert'))
                                    <span class="text-danger">{{ $errors->first('stok_alert') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="rakbarang" class="form-label">Rak Barang</label>
                                    <input class="form-control" id="rakbarang" name="rak_barang" value="{{ $good->rak_barang}}"></input>
                                    @if($errors->has('rak_barang'))
                                    <span class="text-danger">{{ $errors->first('rak_barang') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="nomorrak" class="form-label">Nomor Rak</label>
                                    <input class="form-control" id="nomorrak" name="nomor_rak" value="{{ $good->nomor_rak}}"></input>
                                    @if($errors->has('nomor_rak'))
                                    <span class="text-danger">{{ $errors->first('nomor_rak') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label for="details" class="form-label">Details</label>
                                    <textarea type="textarea" class="form-control" id="details" name="details" value="{{ $good->details }}"></textarea>
                                    @if($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mb-2">Input</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection