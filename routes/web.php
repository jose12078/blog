<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return "Bienvenidos a la pagina principal";
});

Route::get('videos', function (){
    return "Bienvenido a la pagina cursos";
});

Route::get('videos/create', function(){
    return "En esta pagina crearas un curso";
});

// Route::get('videos/{video}', function($video){
//     return "Bienvenido a el moridero: $video";
// });

Route::get('videos/{video}/{categoria?}', function($video, $categoria = null){

    if($categoria){
        return "Bienvenido al curso $video, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $video";
    }
});
