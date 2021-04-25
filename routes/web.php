<?php

use App\Http\Controllers\AuteurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/page2', function () {
    return view('page2');
});

Route::get('/addLivre',[LivreController::class,'show']);
Route::post('/livreAdd',[LivreController::class,'add']);
Route::get('/livresList',[LivreController::class,'showAll']);
Route::get('/livresUpdate/{id}',[LivreController::class,'showId']);
Route::post('/livresUpdate/{id}',[LivreController::class,'Update']);
Route::get('/livresDelete/{id}',[LivreController::class,'delete']);
Route::get('/',[LivreController::class,'index']);

Route::get('/addPhoto',[PhotoController::class,'show']);
Route::get('/imageUpload',[PhotoController::class,'show']);
Route::post('/test',[PhotoController::class,'photo']);
Route::get('/AuteurAdd',[AuteurController::class,'getForm']);
Route::post('/AuteurAdd',[AuteurController::class,'addAuteur']);
Route::get('/auteursListe',[AuteurController::class,'showAll']);
Route::get('/auteurDelete/{id}',[AuteurController::class,'delete']);
Route::get('/auteurUpdate/{id}',[AuteurController::class,'showId']);
Route::post('/auteurUpdate/{id}',[AuteurController::class,'Update']);




