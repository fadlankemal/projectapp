@extends('layouts.app')


@section('title')
    Data Barang
@endsection

@section('content')
    <!-- Page content-->
    <div class="container-fluid mt-2 mx-6">
        <h1>Data Barang</h1>
        @can('create good')
            <a href="{{ url('goods/add') }}" class="btn btn-success mb-2">
                Buat Data Baru
            </a>
        @endcan

        <table id="example" class="table table-hover table-striped">
            <thead class="table-secondary">
                <tr>
                    <th scope="row">No</th>
                    <th scope="row">Nama Barang</th>
                    <th scope="row">Tipe Barang</th>
                    <th scope="row">Merek Barang</th>
                    <th scope="row">Stok</th>
                    <th scope="row">Rak Barang</th>
                    <th scope="row">Nomor rak</th>
                    <th scope="row">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php($number = 1)
                    @foreach ($goods as $good)
                        <td scope="col">{{ $number }}</td>
                        <td scope="col">{{ $good->nama_barang }}</td>
                        <td scope="col">{{ $good->tipe_barang }}</td>
                        <td scope="col">{{ $good->merek_barang }}</td>
                        <td scope="col">{{ $good->stok }}</td>
                        <td scope="col">{{ $good->rak_barang }}</td>
                        <td scope="col">{{ $good->nomor_rak }}</td>

                        <td scope="col" class="">
                            @can('update good')
                                <a href="{{ url("goods/{$good->tipe_barang}/edit") }}" class="btn btn-info btn-sm">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            @endcan
                            @can('show good')
                                <a href="{{ url("goods/{$good->tipe_barang}") }}" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            @endcan
                            @can('delete good')
                                <a href="{{ url('goods/' . $good->id . '/delete') }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                                {{-- <form method="POST" action="{{ url('goods/' . $good->id . '/delete') }}">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form> --}}
                            @endcan
                        </td>
                        @php($number++)
                </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    order: [
                        [5, 'asc']
                    ]
                });
            });
        </script>
        {{-- <script src='https://code.jquery.com/jquery-3.7.1.js'></script> --}}
        <script src="public/exam/js/datatable.js"></script>
    </div>
@endsection
