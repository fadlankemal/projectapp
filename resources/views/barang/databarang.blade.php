@extends('layouts.app')


@section('title')
Data Barang
@endsection

@section('content')
<!-- Page content-->
<div class="container-fluid mx-3" style="">
    <h1>Data Barang</h1>
    <a href="{{ url('databarang/tambahdata')}}" class="btn btn-success mb-2">Buat Data Baru</a>

    <!-- <form method="GET" class="row g-3 mb-3 d-flex ">
        <div class="col-auto">
            <input
                type="text"
                name="search"
                value="{{ request()->get('search') }}"
                class="form-control"
                placeholder="Search..."
                aria-label="Search"
                aria-describedby="button-addon2">
        </div>
        <div class="col-auto">
            <button class="btn btn-secondary" type="submit" id="button-addon2">Search</button>
        </div>
    </form> -->

    <!-- <div class="table-responsive" data-mdb-perfect-scrollbar="true" style="position: relative; height: 445px;"> -->
    <!-- <table class="table table-hover table-striped content-center align-middle style=" display: block; -->
    <!-- overflow-x: auto;
            white-space: nowrap;"> -->
    <table id="example" class="table table-hover table-striped" style="width:100%">
        <thead class="table-secondary">
            <tr>
                <th scope="row">No</th>
                <th scope="row">Nama Barang</th>
                <th scope="row">Tipe Barang</th>
                <th scope="row">Merek Barang</th>
                <th scope="row">Stok</th>
                <!-- <th scope="row">Barcode</th> -->
                <th scope="row">Rak Barang</th>
                <th scope="row">Nomor rak</th>
                <th scope="row">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @php($number = 1)
                @foreach ($data as $datum)
                <td scope="col">{{ $number }}</td>
                <td scope="col">{{ $datum->nama_barang}}</td>
                <td scope="col">{{ $datum->tipe_barang}}</td>
                <td scope="col">{{ $datum->merek_barang}}</td>
                <td scope="col">{{ $datum->stok}}</td>
                <!-- <td scope="col">{!! DNS1D::getBarcodeHTML($datum->tipe_barang, 'C39', 1,44);
                    !!}</td> -->
                <td scope="col" scope="col">{{ $datum->rak_barang}}</td>
                <td scope="col">{{ $datum->nomor_rak}}</td>

                <td scope="col" class="td-actions text-right">
                    <a href="{{ url("databarang/$datum->id/editdata") }}" class="btn btn-info">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="{{ url("databarang/$datum->id/show") }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <button type="button" rel="tooltip" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
                @php($number++)
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- </div> -->
    <!-- {!! $data->withQueryString()->links('pagination::bootstrap-5') !!} -->


    <script>
        $(document).ready(function() {
            $(".search").keyup(function() {
                var searchTerm = $(".search").val();
                var listItem = $('.results tbody').children('tr');
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                $.extend($.expr[':'], {
                    'containsi': function(elem, i, match, array) {
                        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                    }
                });

                $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr('visible', 'false');
                });

                $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr('visible', 'true');
                });

                var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' item');

                if (jobCount == '0') {
                    $('.no-result').show();
                } else {
                    $('.no-result').hide();
                }
            });
        });
    </script>
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
    <!-- Data Table JS -->
    <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'>
    </script>
    <!-- Script JS -->
    <script src="exam/js/script.js"></script>
</div>
@endsection