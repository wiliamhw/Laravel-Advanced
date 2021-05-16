<?php

use App\Http\Controllers\ArticleController;
use App\Models\User;
use App\Services\Postcard;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Route;
use App\Services\PostcardSendingService;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;

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

/** e1 - Service Container **/
Route::get('pay', [PayOrderController::class, 'store']);

/** e2 - View Composer **/
Route::get('channels', [ChannelController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);

/** e4 - Facades **/
Route::get('postcards', function () {
    $postcardService = new PostcardSendingService('us', 4, 6);
    $postcardService->hello('Hello from me', 'test@test.com');
});

Route::get('facades', function() {
    Postcard::hello('Hello from facades', 'test@test.com');
});

/** e5 - Macros **/
Route::get('macro', function () {
//    dd(Str::partNumber('123456789'));
//    dd(Str::prefix('123456789'));
    return ResponseFactory::errorJson('Huge error occur');
});

/** e6 - Pipelines Pattern **/
Route::get('post', [PostController::class, 'index']);

/** e7 - Repository Pattern **/
Route::get('customer', [CustomerController::class, 'index']);
Route::get('customer/{customerId}', [CustomerController::class, 'show']);
Route::get('customer/{customerId}/update', [CustomerController::class, 'update']);
Route::get('customer/{customerId}/delete', [CustomerController::class, 'destroy']);

/** e9 - Soft Deletes **/
Route::get('/articles', [ArticleController::class, 'index']);


/** e8 - Lazy Collections & PHP Generator **/
Route::get('lazy', function () {
    // will run out of memory
//   $collection = Collection::times(10000000)
//       ->map(function ($number) {
//           return pow(2, $number);
//       });

    $collection = LazyCollection::times(10000000)
        ->map(function ($number) {
            return pow(2, $number);
        });

    // Fetch user model using LazyCollection
    User::cursor();
    return 'done';
});

Route::get('generator', function () {
    function happyFunction() {
       dump(1);
       yield 'One';
       dump(2);

       dump(3);
       yield 'Two';
       dump(4);

       dump(5);
       yield 'Three';
       dump(6);
    }
    // Get yield using current() and next()
    $return = happyFunction();
    dump($return->current());

    $return->next();
    dump($return->current());

    $return->next();
    dump($return->current());

    $return->next();
    dump($return->current());
});

Route::get('generator/v2', function () {
    // will run out of memory
    function notHappyFunction($number) {
        $return = [];
        for ($i = 1; $i < $number; $i++) {
            $return[] = $i;
        }
        return $return;
    }

    function happyFunction($number) {
        for ($i = 1; $i < $number; $i++) {
            yield $i;
        }
    }

    // will run out of memory
//    foreach (notHappyFunction(10000000) as $number) {
//        if (!$number % 1000 == 0) {
//            dump('hello');
//        }
//    }

    foreach (happyFunction(10000000) as $number) {
        if (!$number % 1000 == 0) {
            dump('hello');
        }
    }
});
