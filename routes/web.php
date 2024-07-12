<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroUsuarioController;
use App\Http\Controllers\SeguimientoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('start');
});

Route::resource('login', LoginController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/nuevaContra', function () {
    return view('nuevacontra');
});

Route::resource('registro', RegistroUsuarioController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/cuenta', function () {
        return view('menu/cuenta');
    });

    Route::resource('seguimientos', SeguimientoController::class);

    Route::get('/meditacion', function () {
        return view('menu/meditacion');
    });

    Route::get('/comunidad', function () {
        return view('menu/comunidad');
    });

    Route::get('/contacto', function () {
        return view('menu/contacto');
    });
});
