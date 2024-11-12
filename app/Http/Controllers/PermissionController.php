<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        
        return view('role-permission.permission.index', ['permissions' => $permissions]);
    }

    public function create() 
    {
        return view('role-permission.permission.create');
    }


    public function edit(Permission $permission) 
    {
        return view('role-permission.permission.edit', ['permission' => $permission]);
    }


    public function store(StorePermissionRequest $request) 
    {
        Permission::create($request->all());

        return redirect('permissions')->with('status', 'Status berhasil ditambahkan');
    }

    public function update(UpdatePermissionRequest $request, Permission $permission) 
    {
        $permission->update($request->all());
        
        return redirect('permissions')->with('status', 'Status berhasil ditambahkan');
    }

    public function destroy($permissionId) 
    {
        $permission = Permission::find($permissionId);
        $permission->delete();

        return redirect('permissions')->with('status', 'Status berhasil dihapus');
    }
}
