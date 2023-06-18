<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

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
Route::get('/', [RentalController::class, 'index']); 


Route::get('/rental', [RentalController::class, 'index']); 
Route::get('/rental/create', [RentalController::class, 'create']);
Route::post('/rental/store', [RentalController::class, 'store']);
Route::get('/rental/{id}', [RentalController::class, 'show']);
Route::get('/rental/edit/{id}', [RentalController::class, 'edit']);
Route::patch('/rental/update/{id}', [RentalController::class, 'update']);
Route::delete('/rental/delete/{id}', [RentalController::class, 'destroy']);