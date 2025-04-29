<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Requests\StoreRoleRequest;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controllers\Middleware;


class RoleController extends Controller
{
    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            new Middleware('permission:view role', only: ['index']),
            new Middleware('permission:create role', only: ['create', 'store']),
            new Middleware('permission:update role', only: ['update', 'edit']),
            new Middleware('permission:delete role', only: ['destroy']),
        ];
    }
    public function index()
    {
        $roles = Role::all();

        return view('role-permission.role.index', ['roles' => $roles]);
    }

    public function create()
    {
        return view('role-permission.role.create');
    }


    public function edit(Role $role)
    {
        return view('role-permission.role.edit', ['role' => $role]);
    }


    public function store(StoreRoleRequest $request)
    {
        Role::create($request->all());

        return redirect('roles')->with('status', 'Role berhasil ditambahkan');
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->all());

        return redirect('roles')->with('status', 'Role berhasil ditambahkan');
    }

    public function destroy($roleId)
    {
        $role = Role::find($roleId);
        $role->delete();

        return redirect('roles')->with('status', 'Role berhasil dihapus');
    }

    public function addPermissionRole($roleId)
    {
        $permissions = Permission::get();
        $role = Role::findOrFail($roleId);
        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_has_permissions.role_id', $role->id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('role-permission.role.add-permissions', [
            'role' => $role,
            'permissions' => $permissions,
            'rolePermissions' => $rolePermissions
        ]);
    }

    public function givePermissionToRole(Request $request, $roleId)
    {
        $request->validate([
            'permission' => 'required'
        ]);

        $role = Role::findOrFail($roleId);
        $role->syncPermissions($request->permission);

        return redirect()->back()->with('status', 'Permissions added to role');
    }
}
