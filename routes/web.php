<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes - NEXUS CAFÉ & GAMING
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tarifas', [PageController::class, 'tarifas'])->name('tarifas');
Route::get('/instalaciones', [PageController::class, 'instalaciones'])->name('instalaciones');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [PageController::class, 'submitReserva'])->name('contacto.submit');
