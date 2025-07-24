<?php

use Themosis\Support\Facades\Route;

/**
 * Application routes.
 */
Route::get('/', function () {
    return view('home');
});

Route::get('inicio', function () {
    return view('home');
});

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('servicios', function () {
    return view('servicios');
});

Route::get('agentes', function () {
    return view('agentes');
});

Route::get('contacto', function () {
    return view('contacto');
});
 