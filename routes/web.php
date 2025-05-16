<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;

// Rutas para la entidad Area
Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('/areas/create', [AreaController::class, 'create'])->name('areas.create');
Route::post('/areas', [AreaController::class, 'store'])->name('areas.store');

// Rutas para la entidad TrainingCenter
Route::get('/training-centers', [TrainingCenterController::class, 'index'])->name('training_centers.index');
Route::get('/training-centers/create', [TrainingCenterController::class, 'create'])->name('training_centers.create');
Route::post('/training-centers', [TrainingCenterController::class, 'store'])->name('training_centers.store');

// Rutas para la entidad Computer
Route::get('/computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('/computers/create', [ComputerController::class, 'create'])->name('computers.create');
Route::post('/computers', [ComputerController::class, 'store'])->name('computers.store');

Route::get('/', function () {
    return view('welcome');
});
