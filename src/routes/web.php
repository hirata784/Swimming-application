<?php

use App\Http\Controllers\SwimmingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SwimmingController::class, 'index']);
Route::post('/confirm', [SwimmingController::class, 'confirm']);
Route::post('/completion', [SwimmingController::class, 'add']);

// Route::get('/', function () {
//     return view('welcome');
// });
