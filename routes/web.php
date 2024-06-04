<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/nuevaContra', function () {
    return view('nuevacontra');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cuenta', function () {
    return view('menu/cuenta');
});

Route::get('/seguimiento', function () {
    return view('menu/seguimiento');
});

Route::get('/meditacion', function () {
    return view('menu/meditacion');
});

Route::get('/comunidad', function () {
    return view('menu/comunidad');
});

Route::get('/contacto', function () {
    return view('menu/contacto');
});