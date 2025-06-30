<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('guest.home');

Route::get('teams', function () {
    return view('guest.teams');
})->name('guest.teams');

Route::get('about', function () {
    return view('guest.about');
})->name('guest.about');
