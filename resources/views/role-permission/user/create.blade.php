@extends('layouts.app')

@section('title')
Create User
@endsection


@section('content')
<div class="container-fluid mt-2 mx-3">
    <div class="container mt-3 ">
        <h1>Tambah User</h1>
        <a href="{{ url('users') }}" class="btn btn-danger mb-4">
            {{ __('Back') }}
        </a>


        <!-- errror -->
        @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{ url('users')}}">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name">
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" id="email" placeholder="" name="email"></input>
                @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('emai') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input class="form-control" id="password" name="password"></input>
                @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Role</label>
                <select class="form-control" name="roles[]" multiple>
                    <option value="">Select Role</option>
                    @foreach($roles as $role)
                    <option value="{{ $role }}">
                        {{ $role }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('role'))
                <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-success mb-2">Input</button>
        </form>
    </div>
</div>

@endsection