<?php

use App\Http\Controllers\userController;
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

Route::get('/', [userController::class, 'index']);
Route::get('/add', [userController::class, 'add']);
Route::post('/add_data', [userController::class, 'add_data']);
Route::get('/detail/{id}',[userController::class, 'detail']);
Route::get('/edit/{id}',[userController::class, 'edit']);
Route::put('/edit_data', [userController::class, 'edit_data']);
Route::delete('/delete/{id}', [userController::class, 'delete']);
