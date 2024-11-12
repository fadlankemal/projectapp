@extends('layouts.app')

@section('title')
Add Permissions
@endsection


@section('content')
<div class="container-fluid mt-2 mx-3">
    <div class="container mt-3 ">
        <h1>Role : {{ $role->name }}</h1>
        <!-- errror -->
        @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
        @endif

        <!-- form -->
        <form method="POST" action="{{ url('roles/'.$role->id.'/give-permissions') }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                @error('permission')
                <span class="text-danger">
                    {{ $message }}
                    @enderror
                </span>
                <label for="" class="form-label">Permissions</label>

                <div class="row">
                    @foreach($permissions as $permission)
                    <div class="col-md-2">
                        <label>
                            <input
                                type="checkbox"
                                name="permission[]"
                                value="{{ $permission->name }}"
                                {{ in_array($permission->id, $rolePermissions) ? 'checked' :''}}>
                            {{ $permission->name }}
                        </label>
                    </div>
                    @endforeach
                </div>
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-success mb-2">Update</button>
        </form>
    </div>
</div>

@endsection