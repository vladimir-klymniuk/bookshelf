<?php

use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ImageUploaderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/images', [ImagesController::class, 'showAll']);
Route::get('/image/{id}/show', [ImagesController::class, 'show']);
Route::patch('/image/{id}/restore', [ImagesController::class, 'restore']);
Route::patch('/image/{id}/favorite', [ImagesController::class, 'addToFavorite']);
Route::post('/image/upload', [ImageUploaderController::class, 'upload']);
Route::delete('/image/{id}', [ImagesController::class, 'deleteImage']);
