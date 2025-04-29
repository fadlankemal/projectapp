@extends('layouts.app')


@section('title')
    Laporan Barang
@endsection

@section('content')
    <!-- Page content-->
    <div class="container-fluid mt-2 mx-6">
        <h1>
            {{ __('Laporan Barang') }}
        </h1>

        <form action="">
            <div class="row pb-3">
                <div class="col-md-2">
                    <label class="form-label">Status</label>
                    <select name="status" id="" class="form-select">
                        <option selected="" disabled="">
                            Select a Status:
                        </option>

                        <option>
                            Masuk
                        </option>
                        <option>
                            Keluar
                        </option>
                        {{-- @foreach ($data as $datum)
                            <option value="{{ $datum->id }}">
                                {{ $datum->status }}
                            </option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Start Date :</label>
                    <input type="date" name="start_date" class="form-control" value="{{ Request()->start_date }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">End Date :</label>
                    <input type="date" name="end_date" class="form-control" value="{{ Request()->end_date }}">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ url('reports') }}" class="btn btn-secondary mx-1">Reset</a>
                </div>

            </div>
        </form>
        <table class="table table-hover table-striped display">
            <thead class="table-secondary">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tipe Barang</th>
                    <th>Merek Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal dan Waktu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php($number = 1)
                @foreach ($data as $datum)
                    <tr>

                        <td>{{ $number }}</td>
                        <td>{{ $datum->barang->nama_barang }}</td>
                        <td>{{ $datum->barang->tipe_barang }}</td>
                        <td>{{ $datum->barang->merek_barang }}</td>
                        <td>{{ $datum->jumlah }}</td>
                        <td>{{ date('d-m-Y H:i:s ', strtotime($datum->created_at)) }}</td>
                        <td>
                            {{ $datum->status }}
                        </td>
                    </tr>
                    @php($number++)
                @endforeach
            </tbody>
        </table>


        <h1>
            {{ __('Laporan Persedian Barang') }}
        </h1>

        <table id="" class="table table-hover table-striped display">
            <thead class="table-secondary">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tipe Barang</th>
                    <th>Merek Barang</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @php($number = 1)
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $number }}</td>
                        <td scope="col">{{ $item->nama_barang }}</td>
                        <td scope="col">{{ $item->tipe_barang }}</td>
                        <td scope="col">{{ $item->merek_barang }}</td>
                        <td scope="col">{{ $item->stok }}</td>
                    </tr>
                    @php($number++)
                @endforeach
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('table.display').DataTable({
                    layout: {
                        topStart: {
                            buttons: [{
                                    extend: 'excel',
                                    messageTop: 'Control Spare Part',
                                    autoFilter: true,
                                },
                                {
                                    extend: 'pdf',
                                    messageTop: 'Control Spare Part'
                                },
                                {
                                    extend: 'print',
                                    messageTop: 'Control Spare Part'
                                }
                            ]
                        }
                    }
                });
            });
        </script>

        <!-- jQuery -->
        <script src='public/exam/js/jquery.js'></script>
        <!-- Data Table JS -->
        <script src='public/exam/js/datatable.js'></script>
        {{-- Button --}}
        <script src='https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js'></script>
        <script src='https://cdn.datatables.net/buttons/3.2.0/js/buttons.bootstrap5.js'></script>
        {{-- Excel --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js'></script>
        {{-- PDF --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js'></script>
        <script src='https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js'></script>

        <script src='https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js'></script>
    </div>
@endsection
