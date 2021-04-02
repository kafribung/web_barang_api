<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\{CategoryController, InventoryController};

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', LoginController::class);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('inventory', [InventoryController::class, 'index']);
    Route::get('category', CategoryController::class);
});

