<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/split-v', 'split-v')->name('split-v');
Route::view('/split-h', 'split-h')->name('split-h');
Route::view('/nested', 'nested')->name('nested');
Route::view('/set-size', 'set-size')->name('set-size');
Route::view('/fill-container', 'fill-container')->name('fill-container');