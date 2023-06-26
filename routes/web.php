<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\UserController;
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
Route::get('/', function(){return redirect('/home');});
Route::controller(AccessController::class)->group(function() {
    Route::get('/login', 'index')->name('login');
    Route::get('/logout', 'logout');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->controller(HomeController::class)->group(function() {
    Route::get('/home', 'index');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/user/create', 'create');
    Route::post('/user', 'store');
});

Route::middleware('auth:sanctum')->controller(PlantController::class)->prefix('/plants')->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::get('/{id}/edit', 'edit');
    Route::delete('/{id}', 'destroy');
});

Route::middleware('auth:sanctum')->controller(FamilyController::class)->prefix('/families')->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::get('/{id}/edit', 'edit');
    Route::delete('/{id}', 'destroy');
});