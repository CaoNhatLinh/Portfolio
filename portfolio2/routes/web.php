<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return redirect()->route('home');
});

//AUTH
Route::GET('home', [HomeController::class, 'index'])->name('home');