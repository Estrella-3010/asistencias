<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function(){
    return 'Hola mundo';
});

Route::get('/hola/{nombre}', function($nombre){
    return 'Hola ' . $nombre;
});

Route::get(
    //url de la ruta 
    '/usuarios/todos',
    //controlador y metodo de la clase 
    [UserController::class, 'all']
);
