<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layout');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [CounterController::class, 'index'])->name('index');
    Route::get('/create', [CounterController::class, 'create'])->name('create');
    Route::post('/', [CounterController::class, 'store'])->name('store');
    Route::get('{counter}/edit', [CounterController::class, 'edit'])->name('edit');
    Route::put('{counter}', [CounterController::class, 'update'])->name('update');
});
