<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class)->name('home');

Route::controller(CursoController::class)->group(function(){

Route::get('/cursos','index')->name('cursos.index'); ;
Route::get('/cursos/create','create')->name('cursos.create');
Route::post('/cursos','store')->name('cursos.store');
Route::get('/cursos/{curso}/{categoria}','show')->name('cursos.show');
});


