<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BMICalculatorController;
Route::get('/', function () {
    return view('welcome');
});


Route::post('/hitung-bmi', [BMICalculatorController::class, 'calculate'])->name('hitung-bmi');
Route::post('/hapus-bmi/{index}', [BMICalculatorController::class, 'deleteRow'])->name('hapus-bmi-row');
