<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página "Index"
Route::get('/', function () {
    return view('index');
});

// Ruta para la página "Nosotros"
Route::get('/nosotros', function () {
    return view('nosotros'); 
});

// Ruta para la página "Paquetes"
Route::get('/paquetes', function () {
    return view('paquetes');
});

// Ruta para la página "Equipo"
Route::get('/equipo', function () {
    return view('equipo');
});

// Ruta para la página "Contacto"
Route::get('/contacto', function () {
    return view('contacto');
});