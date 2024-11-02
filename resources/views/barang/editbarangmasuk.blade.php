<div class="table-responsive">
    <table class="table table-bordered table-hover" style="border: 1px solid; width: 95%;">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tipe Barang</th>
                <th>Merek Barang</th>
                <th>Stok</th>
                <th>Rak Barang</th>
                <th>Nomor rak</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @php($number = 1)
                @foreach ($data as $datum)
                <td>{{ $number }}</td>
                <td>{{ $datum->nama_barang}}</td>
                <td>{{ $datum->tipe_barang}}</td>
                <td>{{ $datum->merek_barang}}</td>
                <td>{{ $datum->stok}}</td>
                <td>{{ $datum->rak_barang}}</td>
                <td>{{ $datum->nomor_rak}}</td>
                <td><a href="{{ url("databarang/$datum->id/editdata") }}" class="btn btn-primary">Edit</a></td>

                @php($number++)
            </tr>
            @endforeach
        </tbody>
    </table>