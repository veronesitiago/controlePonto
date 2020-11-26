<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Colaboradores;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect::guest('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/colaboradores', function () {
    return view('colaboradores');
})->name('colaboradores');

Route::middleware(['auth:sanctum', 'verified'])->get('/consultar', function () {
    return view('consultar');
})->name('consultar');
