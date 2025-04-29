@extends('layouts.app')

@section('title')
    Add Permissions
@endsection


@section('content')
    <div class="container-fluid mt-2 mx-3">
        <div class="card me-3">
            <div class="card-header">
                <h3 class="card-title">
                    Role : {{ $role->name }}
                </h3>

                <a href="{{ url('roles') }}" class="btn btn-danger">
                    {{ __('Back') }}
                </a>
            </div>
            <!-- errror -->
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif

            <div class="card-body">
                <!-- form -->
                <form method="POST" action="{{ url('roles/' . $role->id . '/give-permissions') }}">
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
                            @foreach ($permissions as $permission)
                                <div class="col-md-2">
                                    <label>
                                        <input type="checkbox" name="permission[]" value="{{ $permission->name }}"
                                            {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
