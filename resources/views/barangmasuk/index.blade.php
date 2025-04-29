@extends('layouts.app')


@section('title')
    Barang Masuk
@endsection

@section('content')
    <div class="container-fluid mt-2 mx-6">
        <h1>Barang Masuk</h1>

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
        @can('create incoming')
            <form method="POST" action="{{ url('incomings') }}" class="" role="search">
                @csrf
                <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                        <label for="tipebarang" class="form-label">Tipe Barang</label>
                        @if ($goods->count() === 1)
                            <select name="barang_id" id="barang_id"
                                class="form-select @error('barang_id') is-invalid @enderror"" readonly>
                                @foreach ($goods as $good)
                                    <option value=" {{ $good->id }}" selected>
                                        {{ $good->tipe_barang }}
                                    </option>
                                @endforeach
                            </select>
                        @else
                            <select class="form-select" name="barang_id" id="select"">
                                <option selected="" disabled="">
                                    Select a good:
                                </option>

                                @foreach ($goods as $good)
                                    <option value=" {{ $good->id }}"
                                        @if (old('barang_id') == $good->id) selected="selected" @endif>
                                        {{ $good->tipe_barang }}
                                    </option>
                                @endforeach
                            </select>
                        @endif
                        @if ($errors->has('barang_id'))
                            <span class="text-danger">{{ $errors->first('barang_id') }}</span>
                        @endif
                    </div>

                    {{-- Jumlah --}}
                    <div class="mb-3">
                        <input class="" id="status" name="status" value="Masuk" type="hidden"></input>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input class="form-control" id="tipebarang" name="jumlah" value="1"></input>
                    </div>

                    <!-- Operator -->
                    <div class="mb-3">
                        <label for="operator_id" class="form-label">PIC</label>
                        @if ($ops->count() === 1)
                            <select name="operator_id" id="operator_id" class="form-select" readonly>
                                @foreach ($ops as $op)
                                    <option value="{{ $op->id }}" selected>
                                        {{ $op->nama_operator }}
                                    </option>
                                @endforeach
                            </select>
                        @else
                            <select name="operator_id" id="operator_id" class="form-select">
                                <option selected="" disabled="">
                                    Select a operator:
                                </option>

                                @foreach ($ops as $op)
                                    <option value="{{ $op->id }}"
                                        @if (old('operator_id') == $op->id) selected="selected" @endif>
                                        {{ $op->nama_operator }}
                                    </option>
                                @endforeach
                            </select>
                        @endif
                        @if ($errors->has('operator_id'))
                            <span class="text-danger">{{ $errors->first('operator_id') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-2">Input</button>
            </form>
        @endcan
        <div class="table-responsive mt-2">
            <table id="incoming" class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Tipe Barang</th>
                        <th>Merek Barang</th>
                        <th>Qty</th>
                        <th>Nama Operator</th>
                        <th>Tanggal dan waktu</th>
                        @can('delete incoming')
                            <th>Action</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @php($number = 1)
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                {{ $number }}
                            </td>
                            <td>
                                {{ $item->barang->nama_barang }}
                            </td>
                            <td>
                                {{ $item->barang->tipe_barang }}
                            </td>
                            <td>
                                {{ $item->barang->merek_barang }}
                            </td>
                            <td>
                                {{ $item->jumlah }}
                            </td>
                            <td>
                                {{ $item->operator->nama_operator }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            @can('delete incoming')
                                <td>
                                    <a href="{{ url('incomings/' . $item->id . '/delete') }}" class="btn btn-danger btn-sm"
                                        data-confirm-delete="true">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            @endcan
                        </tr>
                        @php($number++)
                    @endforeach
            </table>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#select').select2({
                tags: false,
                theme: "bootstrap-5"
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#incoming').DataTable();
        });
    </script>
    <script src='public/exam/js/datatable.js'></script>

@endsection
