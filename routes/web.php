<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MainController::class, 'index']);
// Route::resource('/transaction', [TransactionController::class]);
Route::post('insert-transaction', [TransactionController::class, 'store']);
Route::get('delete-transaction/{transaction}', [TransactionController::class, 'destroy']);

