<?php

use Illuminate\Support\Facades\Route;

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

// Ruta para la pagina "Paquete basico"
Route::get('/paquete-basico', function () {
    return view('paquetebasico');
});

// Ruta para la pagina "Paquete intermedio"
Route::get('/paquete-intermedio', function () {
    return view('paqueteintermedio');
});

// Ruta para la pagina "Paquete completo"
Route::get('/paquete-completo', function () {
    return view('paquetecompleta');
});