<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\DeviceController;

Route::get('/', function () {
    return view('welcome');
});

//Route::group(['prefix' => 'v1', 'namespace' => )
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('devices', DeviceController::class);
});