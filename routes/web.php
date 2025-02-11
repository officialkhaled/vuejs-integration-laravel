<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminEventsController;
use App\Http\Controllers\AttendeeEventsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layout');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminEventsController::class, 'index'])->name('index');
    Route::get('/create', [AdminEventsController::class, 'create'])->name('create');
    Route::post('/', [AdminEventsController::class, 'store'])->name('store');
    Route::get('{event}/edit', [AdminEventsController::class, 'edit'])->name('edit');
    Route::put('{event}', [AdminEventsController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'attendee', 'as' => 'attendee.'], function () {
    Route::get('/', [AttendeeEventsController::class, 'index'])->name('index');
    Route::get('/create', [AttendeeEventsController::class, 'create'])->name('create');
    Route::post('/', [AttendeeEventsController::class, 'store'])->name('store');
    Route::get('{event}/edit', [AttendeeEventsController::class, 'edit'])->name('edit');
    Route::put('{event}', [AttendeeEventsController::class, 'update'])->name('update');
});
