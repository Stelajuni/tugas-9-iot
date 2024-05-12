<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DeviceController;
use App\Models\Device;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        "title"=> "dashboard"
    ]);
});

// dashboard, devices, rules, users

Route::get('/dashboard', function(){
    return view('dashboard', [
        "title"=> "dashboard"
    ]);
});

Route::get('/devices', [DataController::class, 'web_index']);
Route::get('/devices/{id}', [DataController::class, 'web_show']);
