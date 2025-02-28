<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/{pathMatch}', function () {
//    return view('layout');
//})->where('pathMatch', '.*');

Route::get('/{any}', function () {
    return view('layout');
})->where('any', '.*')->name('app');
