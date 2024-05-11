<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DataController;
use App\Models\Device;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

Route::get('/devices', [DeviceController::class, 'web_index']);

Route::get('/devices/{id}', [DataController::class, 'web_show']);


Route::get('/rules', function () {
    return view('rules', [
        "title" => "rules"
    ]);
});

Route::get('/users', function () {
    return view('users', [
        "title" => "users"
    ]);
});
