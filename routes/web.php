<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles',ArticleController
::class);
Route::put('/edit','ArticleController@update');
Route::get('/article/cetak_pdf',
[ArticleController::class,'cetak_pdf']);