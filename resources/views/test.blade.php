<?php date_default_timezone_set('Asia/Jakarta'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ url('test') }}">
        @csrf
        <label for="" class="form-label">Variable</label>
        <input type="text" name="variabel" value="rake">
        <label for="" class="form-label">Nilai</label>
        <input type="text" name="nilai">
        <button type="submit" value='Kirim'>Submit</button>
    </form>
</body>

</html>