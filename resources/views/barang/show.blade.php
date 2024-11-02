@extends('layouts.app')


@section('title')
Data Barang
@endsection

@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                {{ __('') }}
                            </h3>

                            <img class="img-account-profile mb-2" src="{{ asset('assets/img/products/default.webp') }}" alt="" id="image-preview" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Product Details') }}
                            </h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered card-table table-vcenter text-nowrap datatable">
                                <tbody>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>{{ $datum->nama_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tipe Barang</td>
                                        <td>{{ $datum->tipe_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-secondary">Merek Barang</span></td>
                                        <td>{{ $datum->merek_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td>Barcode</td>
                                        <td>{!! $barcode !!}</td>
                                    </tr>

                                    <tr>
                                        <td>Quantity</td>
                                        <td>{{ $datum->stok }}</td>
                                    </tr>
                                    <tr>
                                        <td>Quantity Alert</td>
                                        <td>
                                            <span class="badge bg-red-lt">
                                                {{ $stok->stok_alert }}
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Rak Barang</td>
                                        <td>{{ $datum->rak_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Rak</td>
                                        <td>{{ $datum->nomor_rak }}</td>
                                    </tr>
                                    <tr>
                                        <td>Detail</td>
                                        <td>
                                            <span class="badge bg-red-lt">
                                                {{ $datum->detail }} %
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer text-end">
                            <x-button.edit route="{{ route('products.edit', $product) }}">
                                {{ __('Edit') }}
                            </x-button.edit>

                            <x-button.back route="{{ route('products.index') }}">
                                {{ __('Cancel') }}
                            </x-button.back>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>