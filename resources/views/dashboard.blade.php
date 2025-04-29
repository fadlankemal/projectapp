@extends('layouts.app')

@section('title')
    Dashboard
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-3 mt-4">
        <h2 class="page-title">
            {{ __('Dashboard') }}
        </h2>
        <!-- Page title actions -->
        <p class="page-content">
            Login sebagai {{ Auth::user()->name }}
        </p>
    </div>
    <div class="col-12 p-3 me-4 mt-md-4">
        <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- <span class="bg-primary text-white avatar">Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18"
                                    viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M350 177.5c3.8-8.8 2-19-4.6-26l-136-144C204.9 2.7 198.6 0 192 0s-12.9 2.7-17.4 7.5l-136 144c-6.6 7-8.4 17.2-4.6 26s12.5 14.5 22 14.5l88 0 0 192c0 17.7-14.3 32-32 32l-80 0c-17.7 0-32 14.3-32 32l0 32c0 17.7 14.3 32 32 32l80 0c70.7 0 128-57.3 128-128l0-192 88 0c9.6 0 18.2-5.7 22-14.5z" />
                                </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ __('Barang Masuk') }}
                                </div>
                                <div class="text-muted">
                                    {{ $incomings }} Barang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18"
                                    viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M350 334.5c3.8 8.8 2 19-4.6 26l-136 144c-4.5 4.8-10.8 7.5-17.4 7.5s-12.9-2.7-17.4-7.5l-136-144c-6.6-7-8.4-17.2-4.6-26s12.5-14.5 22-14.5l88 0 0-192c0-17.7-14.3-32-32-32L32 96C14.3 96 0 81.7 0 64L0 32C0 14.3 14.3 0 32 0l80 0c70.7 0 128 57.3 128 128l0 192 88 0c9.6 0 18.2 5.7 22 14.5z" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ __('Barang Keluar') }}
                                </div>
                                <div class="text-muted">
                                    {{ $outcomings }} Barang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="30"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M0 488L0 171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4L640 488c0 13.3-10.7 24-24 24l-48 0c-13.3 0-24-10.7-24-24l0-264c0-17.7-14.3-32-32-32l-384 0c-17.7 0-32 14.3-32 32l0 264c0 13.3-10.7 24-24 24l-48 0c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24l0-56 384 0 0 56c0 13.3-10.7 24-24 24zM128 400l0-64 384 0 0 64-384 0zm0-96l0-80 384 0 0 80-384 0z" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Barang
                                </div>
                                <div class="text-muted">
                                    {{ $total }} barang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18"
                                    viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM96 75l0-11 192 0 0 11c0 19-5.6 37.4-16 53L112 128c-10.3-15.6-16-34-16-53zm16 309c3.5-5.3 7.6-10.3 12.1-14.9L192 301.3l67.9 67.9c4.6 4.6 8.6 9.6 12.1 14.9L112 384z" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Low Stock
                                </div>
                                <div class="text-muted">
                                    {{ $goods->count() }} barang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid mt-2 mx-3 mt-4">
        <div class="table-responsive mt-2">
            <h3>
                {{ __('Status Low Stock ') }}
            </h3>
            <table class="table table-striped  table-hover" style="width: 95%;">
                <thead class="">
                    <tr>
                        <th>
                            {{ __('No') }}
                        </th>
                        <th scope="col">
                            {{ __('Nama Barang') }}
                        </th>
                        <th scope="col">
                            {{ __('Tipe Barang') }}
                        </th>
                        <th scope="col">
                            {{ __('Stock') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php($number = 1)
                    @forelse ($goods as $good)
                        <tr class="table-danger">
                            <td>{{ $number }}</td>
                            <td>{{ $good->nama_barang }}</td>
                            <td>{{ $good->tipe_barang }}</td>
                            <td>{{ $good->stok }}</td>
                        </tr>
                        @php($number++)
                    @empty
                        <tr>
                            <td class="align-middle text-center" colspan="4">
                                No results found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
