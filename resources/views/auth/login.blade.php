<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- CSS only -->
    <link href="">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
        <div class="container-tight py-6">

            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @endif

            <form class="form-control" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="card-body">
                    <h3 class="text-center mb-3 font-weight-medium">
                        Login
                    </h3>
                        <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="name" class="form-control @error('nama') is-invalid @enderror"
                            placeholder="" value="{{ old('name') }}" name="name">
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('nama_operator') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Masukan kata sandi anda" name="password">
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>