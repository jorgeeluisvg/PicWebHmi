<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\picontroller;
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

Route::middleware(['web'])->group(function () {
    Route::post('/encender-led', [picontroller::class, 'encenderLed'])->name('encender');
    Route::post('/apagar-led', [picontroller::class, 'apagarLed'])->name('apagar');
});
