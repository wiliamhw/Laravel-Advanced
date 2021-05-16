<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});

/** Pipelines pattern **/
Route::get('post', [PostController::class, 'index']);

/** Repository pattern **/
Route::get('customer', [CustomerController::class, 'index']);
Route::get('customer/{customerId}', [CustomerController::class, 'show']);
Route::get('customer/{customerId}/update', [CustomerController::class, 'update']);
Route::get('customer/{customerId}/delete', [CustomerController::class, 'destroy']);
