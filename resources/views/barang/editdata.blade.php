<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-2">
        <h1>Edit Data Barang</h1>
        <form method="POST" action="{{url ("data/$datum->id")}}" class="form-control">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" placeholder="Sensor, PLC, Solenoid Valve, etc" name="nama_barang" value="{{ $datum->nama_barang}}">
            </div>
            <div class="mb-3">
                <label for="tipebarang" class="form-label">Tipe Barang</label>
                <input class="form-control" id="tipebarang" name="tipe_barang" value="{{ $datum->tipe_barang}}"></input>
            </div>
            <div class="mb-3">
                <label for="merekbarang" class="form-label">Merek Barang</label>
                <input class="form-control" id="merekbarang" name="merek_barang" value="{{ $datum->merek_barang}}"></input>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input class="form-control" id="stok" name="stok" value="{{ $datum->stok}}"></input>
            </div>
            <div class="mb-3">
                <label for="rakbarang" class="form-label">Rak Barang</label>
                <input class="form-control" id="rakbarang" name="rak_barang" value="{{ $datum->rak_barang}}"></input>
            </div>
            <div class="mb-3">
                <label for="nomorrak" class="form-label">Nomor Rak</label>
                <input class="form-control" id="nomorrak" name="nomor_rak" value="{{ $datum->nomor_rak}}"></input>
            </div>
            <button type="submit" class="btn btn-success mb-2">Input</button>
        </form>
        <form method="POST" action="{{url ("data/$datum->id")}}" class="form-control">
            @method('delete')
            @csrf
            <button type="submit" value="delete"class="btn btn-danger">DELETE</button>
        </form>
    </div>
</body>
</html>