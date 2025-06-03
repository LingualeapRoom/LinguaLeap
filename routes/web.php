<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('inicio.servicios'); 
})->name('servicios');

Route::get('/about', function () {
    return view('inicio.descubramas');
})->name('about');

Route::get('/contacto', function () {
    return view('inicio.contacto');
})->name('contacto');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
