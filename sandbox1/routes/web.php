<?php

use App\Services\Postcard;
use Illuminate\Support\Facades\Route;
use App\Services\PostcardSendingService;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PostController;

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

// 1. Service Container
Route::get('pay', [PayOrderController::class, 'store']);

// 2. View Composer
Route::get('channels', [ChannelController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);

// 4. Facades
Route::get('postcards', function () {
    $postcardService = new PostcardSendingService('us', 4, 6);

    $postcardService->hello('Hello from me', 'test@test.com');
});

Route::get('facades', function() {
    Postcard::hello('Hello from facades', 'test@test.com');
});
