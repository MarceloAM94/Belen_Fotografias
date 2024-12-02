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

// Ruta para la pagina "Portafolio"
Route::get('/portafolio', function () {
    return view('portafolio');
});

// Ruta para la pagina "Portafolio1"
Route::get('/portafolio1', function () {
    return view('portafolio1');
});

// Ruta para la pagina "Portafolio2"
Route::get('/portafolio2', function () {
    return view('portafolio2');
});

// Ruta para la pagina "Portafolio3"
Route::get('/portafolio3', function () {
    return view('portafolio3');
});