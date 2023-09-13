<?php

use App\Http\Controllers\imobiliariaController;
use App\Http\Controllers\imoveisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [imobiliariaController::class, 'home'])->name('home');
Route::get('/template', [ imobiliariaController::class, 'template'])->name('template');
Route::get('/empresa', [imobiliariaController::class, 'empresa'])->name('empresa');

/*IMOVEIS*/

Route::get('/imoveis', [imoveisController::class, 'imoveis'])->name('imoveis');
Route::get('/imoveis2', [imoveisController::class, 'imoveis2'])->name('imoveis2');
Route::get('/imoveis3', [imoveisController::class, 'imoveis3'])->name('imoveis3');

Route::get('/casat', [imoveisController::class, 'casat'])->name('casat');