@extends('layouts.app')

@section('title')
Edit User
@endsection


@section('content')
<div class="container-fluid mt-2 mx-3">
    <div class="container mt-3 ">
        <h1>Edit User</h1>
        <!-- errror -->
        @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{ url('users')}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ $user->name }}">
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" id="email" placeholder="" name="email" value="{{ $user->email }}"></input>
                @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('emai') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input class="form-control" id="password" name="password" value="{{ $user->password }}"></input>
                @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Role</label>
                <select class="form-control" name="roles[]" multiple>
                    <option value="">Select Role</option>
                    @foreach($roles as $role)
                    <option value="{{ $role }}"
                        {{ in_array($role->id, $userRoles) ? 'selected' :''}}>
                        {{ $role }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('role'))
                <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-success mb-2">Save</button>
        </form>
    </div>
</div>

@endsection