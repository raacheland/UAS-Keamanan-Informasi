<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\api\AbsensiApiController;


// Route::middleware('client.auth')->group(function (){
    //     Route::get('/products', [ProductApiController::class, 'index']);
    //     Route::post('/products', [ProductApiController::class, 'store']);
    // });
Route::middleware('Author')->group(function(){
    Route::get('/', [AbsensiApiController::class,'index']);
});