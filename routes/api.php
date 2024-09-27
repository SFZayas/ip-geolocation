<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeoController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/geo/{ipAddress}', [GeoController::class, 'getGeoData']);
