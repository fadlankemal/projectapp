@extends('layouts.app')


@section('title')
Data Barang
@endsection

@section('content')
<!-- Page content-->
<div class="container-fluid mt-2 mx-3">
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
                @foreach ($goods as $good)
                <td scope="col">{{ $number }}</td>
                <td scope="col">{{ $good->nama_barang}}</td>
                <td scope="col">{{ $good->tipe_barang}}</td>
                <td scope="col">{{ $good->merek_barang}}</td>
                <td scope="col">{{ $good->stok}}</td>
                <td scope="col">{{ $good->rak_barang}}</td>
                <td scope="col">{{ $good->nomor_rak}}</td>

                <td scope="col" class="d-flex gap-1">
                    <a href="{{ url("goods/{$good->tipe_barang}/edit") }}" class="btn btn-info col">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="{{ url("goods/{$good->tipe_barang}") }}" class="btn btn-success col">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="javascript:void(0)" id="btn-delete-goods" data-id="{{ $good->id }}" class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
                @php($number++)
            </tr>
            @endforeach
        </tbody>
    </table>

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
    <script>
        //button create post event
        $('body').on('click', '#btn-delete-goods', function() {

            let good_id = $(this).data('id');
            let token = $("meta[name='csrf-token']").attr("content");

            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "ingin menghapus data ini!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'TIDAK',
                confirmButtonText: 'HAPUS'
            }).then((result) => {
                if (result.isConfirmed) {

                    console.log('test');

                    //fetch to delete data
                    $.ajax({

                        url: `/goods/${good_id}`,
                        type: "DELETE",
                        cache: false,
                        data: {
                            "_token": token
                        },
                        success: function(response) {

                            //show success message
                            Swal.fire({
                                type: 'success',
                                icon: 'success',
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 3000
                            });

                            //remove post on table
                            $(`#index_${operator_id}`).remove();
                        }
                    });


                }
            })

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