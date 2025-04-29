@extends('layouts.app')


@section('title')
    Data Barang
@endsection

@section('content')
    <div class="container-fluid mt-2 mx-3">
        <div class="card me-3">
            <div class="card-header">
                <h3 class="card-title">
                    {{ __('Product Details') }}
                </h3>

                <a href="{{ url('goods') }}" class="btn btn-danger">
                    {{ __('Back') }}
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered card-table table-vcenter text-nowrap datatable">
                    <tbody>
                        <tr>
                            <td>Nama Barang</td>
                            <td>{{ $good->nama_barang }}</td>
                        </tr>
                        <tr>
                            <td>Tipe Barang</td>
                            <td>{{ $good->tipe_barang }}</td>
                        </tr>
                        <tr>
                            <td><span class="text-secondary">Merek Barang</span></td>
                            <td>{{ $good->merek_barang }}</td>
                        </tr>
                        <tr>
                            <td>Barcode</td>
                            <td>{!! $barcode !!}</td>
                        </tr>

                        <tr>
                            <td>Quantity</td>
                            <td>{{ $good->stok }}</td>
                        </tr>
                        <tr>
                            <td>Quantity Alert</td>
                            <td>
                                {{ $good->stok_alert }}
                            </td>
                        </tr>

                        <tr>
                            <td>Rak Barang</td>
                            <td>{{ $good->rak_barang }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Rak</td>
                            <td>{{ $good->nomor_rak }}</td>
                        </tr>
                        <tr>
                            <td>Detail</td>
                            <td>
                                {{ $good->details }}
                            </td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>
                                {{ $good->created_at }}
                            </td>
                        </tr>
                        <tr>
                            <td>Updated At</td>
                            <td>
                                {{ $good->updated_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
