<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


Route::get('/', HomeController::class)->name('home');

Route::controller(CursoController::class)->group(function(){

Route::get('/cursos','index')->name('cursos.index'); ;
Route::get('/cursos/create','create')->name('cursos.create');
Route::post('/cursos','store')->name('cursos.store');
Route::get('/cursos/{curso}/edit','edit')->name('cursos.edit');
Route::get('/cursos/{curso}','show')->name('cursos.show');
Route::put('/cursos/{curso}','update')->name('cursos.update');
Route::delete('/cursos/{id}', 'destroy')->name('cursos.destroy');
});

Route::controller(ContactanosController::class)->group(function(){

Route::get('/contactanos', 'index' )->name('contactanos.index');
Route::post('/contactanos', 'store' )->name('contactanos.store');

});
