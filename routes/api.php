<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/data', [ApiController::class, 'getData']);

Route::get('/music', [ApiController::class, 'getMusic']);
Route::post('/store-music', [ApiController::class, 'storeMusic']);
Route::post('/update-music/{id}', [ApiController::class, 'updateMusic']);
Route::post('/delete-music/{id}', [ApiController::class, 'deleteMusic']);

Route::get('/artist', [ApiController::class, 'getArtist']);
Route::post('/store-artist', [ApiController::class, 'storeArtist']);
Route::post('/update-artist/{id}', [ApiController::class, 'updateArtist']);
Route::post('/delete-artist/{id}', [ApiController::class, 'deleteArtist']);

Route::get('/category', [ApiController::class, 'getCategory']);
Route::post('/store-category', [ApiController::class, 'storeCategory']);
Route::post('/update-category/{id}', [ApiController::class, 'updateCategory']);
Route::post('/delete-category/{id}', [ApiController::class, 'deleteCategory']);