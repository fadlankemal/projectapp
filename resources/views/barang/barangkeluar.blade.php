@extends('layouts.app')


@section('title')
Barang Keluar
@endsection

@section('content')
<div class="container-fluid mx-3">
    <h1>Barang Keluar</h1>
    <a href="{{ url('databarang/tambahbarangkeluar')}}" class="btn btn-success mb-2">Buat Data Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover" style="border: 1px solid; width: 95%;">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tipe Barang</th>
                    <th>Merek Barang</th>
                    <th>Qty</th>
                    <th>Rak Barang</th>
                    <th>Nomor rak</th>
                    <th>Tanggal dan waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

<!-- <td scope="col">{!! DNS1D::getBarcodeHTML($goods->tipe_barang, 'C39', 1,44);
                    !!}</td> -->

                    <!-- </div> -->
    <!-- {!! $data->withQueryString()->links('pagination::bootstrap-5') !!} -->