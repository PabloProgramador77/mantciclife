<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/username', [App\Http\Controllers\UserController::class, 'create'])->name('perfil-usuario');

Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
Route::post('/usuario/agregar', [App\Http\Controllers\UserController::class, 'store'])->name('agregar-usuario');
Route::post('/usuario/actualizar', [App\Http\Controllers\UserController::class, 'update'])->name('actualizar-usuario');
Route::post('/usuario/borrar', [App\Http\Controllers\UserController::class, 'destroy'])->name('borrar-usuario');
Route::post('/usuario/perfil', [App\Http\Controllers\UserController::class, 'edit'])->name('actualizar-perfil');

Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
Route::post('/rol/agregar', [App\Http\Controllers\RoleController::class, 'store'])->name('agregar-rol');
Route::post('/rol/actualizar', [App\Http\Controllers\RoleController::class, 'update'])->name('actualizar-rol');
Route::post('/rol/borrar', [App\Http\Controllers\RoleController::class, 'destroy'])->name('borrar-rol');
Route::post('/rol/permisos',[App\Http\Controllers\RoleController::class, 'create'])->name('permisos-rol');
Route::post('/rol/permissions', [App\Http\Controllers\RoleController::class, 'show'])->name('permissions-rol');

Route::get('/permisos', [App\Http\Controllers\PermissionController::class, 'index'])->name('permisos');
Route::post('/permiso/agregar', [App\Http\Controllers\PermissionController::class, 'store'])->name('agregar-permiso');
Route::post('/permiso/actualizar', [App\Http\Controllers\PermissionController::class, 'update'])->name('actualizar-permiso');
Route::post('/permiso/borrar', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('borrar-permiso');