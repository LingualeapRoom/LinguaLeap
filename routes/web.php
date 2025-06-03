<?php
use App\Http\Controllers\RolesController;
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

Route::get('/formulario', function () {
    return view('inicio.formulario');
})->name('formulario');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rutas para clientes
Route::get('/roles', [RolesController::class, 'index'])->middleware('auth');

Route::get('/roles/show',[RolesController::class, 'index'])->middleware('auth');

Route::get('/roles/create', [RolesController::class, 'create'])->middleware('auth');

Route::get('/roles/edit/{rol}', [RolesController::class, 'edit'])->middleware('auth');

Route::post('/roles/store', [RolesController::class, 'store'])->middleware('auth');

Route::put('/roles/update/{rol}', [RolesController::class, 'update'])->middleware('auth');

Route::delete('/roles/destroy/{id}', [RolesController::class, 'destroy'])->middleware('auth');