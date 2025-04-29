<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\OutcomingController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Resources\ArduinoCollection;
use App\Http\Resources\ArduinoResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Arduino;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard')->middleware('auth');

Route::group(['middleware' => ['auth', 'role:super admin|staff|SPV']], function () {

    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::resource('users', UserController::class);
    Route::delete('users/{id}/delete', [UserController::class, 'destroy'])->name('users.remove');
    Route::get('reports', [LaporanController::class, 'index'] )->middleware(['permission:view report']);
    Route::get('reports/export', [LaporanController::class, 'export'] )->middleware(['permission:view report']);

    Route::controller(ProfileController::class)->group(function () {
        Route::put('profiles/update', 'update')->name('profile.update');
        Route::get('profile/edit', 'edit')->name('profile.edit');

        Route::delete('profile/destroy', 'destroy')->name('profile.destroy');
    });

    Route::controller(GoodController::class)->group(function () {
        Route::get('goods', 'index');
        Route::get('goods/add', 'create');
        Route::post('goods', 'store');

        Route::put('goods/{good:tipe_barang}', 'update');
        Route::get('goods/{good:tipe_barang}/edit', 'edit');

        Route::get('goods/{good:tipe_barang}', 'show');
        Route::delete('goods/{id}/delete', 'destroy');
    });

    Route::controller(OpController::class)->group(function () {
        Route::get('operators', 'index');
        Route::get('operators/add', 'create');
        Route::post('operators', 'store');

        Route::put('operators/{operator}', 'update');
        Route::get('operators/{operator:nama_operator}/edit', 'edit');

        Route::delete('operators/{id}/delete', 'destroy');
    });

});

Route::group(['middleware' => ['auth', 'role:super admin|operator']], function () {

    Route::controller(IncomingController::class)->group(function () {
        Route::get('incomings', 'index')->middleware(['permission:view incoming']);
        Route::post('incomings', 'store')->middleware(['permission:create incoming']);
        Route::delete('incomings/{id}/delete', 'destroy')->middleware(['permission:delete incoming']);
    });

    Route::controller(OutcomingController::class)->group(function () {
        Route::get('outcomings', 'index')->middleware(['permission:view outcoming']);
        Route::post('outcomings', 'store')->middleware(['permission:create outcoming']);
        Route::delete('outcomings/{id}/delete', 'destroy')->middleware(['permission:delete outcoming']);
    });
});

Route::post('test', function (Request $request) {
    DB::table('arduino_data')->insert([
        'variabel' => $request->variabel,
        'nilai' => $request->nilai,
    ]);
    return redirect()->back();
});

Route::get('test', function(){
    return view('test');
});

Route::get('test/show/{id}', function(string $id){
    return new ArduinoResource(Arduino::findOrFail($id));
});

// Route::get('test/show', [IncomingController::class, 'show']);
