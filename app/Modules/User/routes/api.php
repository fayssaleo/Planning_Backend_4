<?php

use App\Modules\User\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'api/users',
    'middleware' => ['auth:sanctum'],
], function ($router) {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/delete', [UserController::class,'delete']);
    Route::put('/updatepass', [UserController::class,'updatePassword']);
    Route::put('/resetpass', [UserController::class,'resetPassword']);
    Route::put('/update', [UserController::class,'update']);
    Route::post('/drivers' , [UserController::class,'getDrivers']);
    Route::post('/getDriversActiveList_byF' , [UserController::class,'getDriversActiveList_byF']);
    Route::post('/getDriversActiveList_all' , [UserController::class,'getDriversActiveList_all']);
    Route::post('/getById', [UserController::class,'getById']);
});

Route::group([
    'prefix' => 'api/users',
    // 'middleware' => ['cors'],
], function ($router) {
    Route::post('/register', [UserController::class,'register']);
    Route::post('/login', [UserController::class,'login']);
});
