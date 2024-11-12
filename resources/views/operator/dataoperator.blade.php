<!-- Page content-->
@extends('layouts.app')

@section('title')
Data Operator
@endsection


@section('content')
<div class="container-fluid mt-2 mx-3">
    <h1>Data Operator</h1>
    <a href="{{ url('operators/add')}}" class="btn btn-success mb-2">Tambah data</a>
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> {{ session('success') }} </strong>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
    </div>
    @endif
    <div class="table-responsive mt-2">
        <table class="table table-striped  table-hover" style="width: 95%;">
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Nama Operator</th>
                    <th>Nomor Karyawan</th>
                    <th>Factory</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php($number = 1)
                    @foreach ($operators as $operator)
                    <td>{{ $number }}</td>
                    <td>{{ $operator->nama_operator}}</td>
                    <td>{{ $operator->id_operator}}</td>
                    <td>{{ $operator->factory}}</td>
                    <td scope="col" class="td-actions text-right">
                        <a href="{{ url("operators/{$operator->nama_operator}/edit") }}" class="btn btn-info btn-sm">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" id="btn-delete-operator" data-id="{{ $operator->id }}" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                    @php($number++)
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-delete-operator', function() {

        let operator_id = $(this).data('id');
        let token = $("meta[name='csrf-token']").attr("content");
        var parent = $(this).parent();

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

                    url: `/operators/${operator_id}`,
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
                            timer: 2000
                        });

                        //remove post on table
                        $(`#index_${operator_id}`).remove();
                    }
                });


            }
        })

    });
</script>
@endsection