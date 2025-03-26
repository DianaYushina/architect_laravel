<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();
// home
Route::get('/', [Controllers\BaseController::class, 'getIndex']);

Route::get('/contacts', [Controllers\ContactsController::class, 'getIndex']);
Route::get('/products', [Controllers\ProductController::class, 'getIndex']);
Route::get('/news', [Controllers\NewsController::class, 'getIndex']);
Route::get('/news/1', [Controllers\NewsController1::class, 'getIndex']);
Route::get('/news/2', [Controllers\NewsController2::class, 'getIndex']);
Route::get('/news/3', [Controllers\NewsController3::class, 'getIndex']);
Route::get('/news/4', [Controllers\NewsController4::class, 'getIndex']);
Route::get('/news/5', [Controllers\NewsController5::class, 'getIndex']);
Route::get('/news/6', [Controllers\NewsController6::class, 'getIndex']);
Route::get('/delivery/', [Controllers\DeliveryController::class, 'getIndex']);
Route::get('/account', [Controllers\AccountController::class, 'getIndex']);
Route::post('/account', [Controllers\AccountController::class, 'postFile']);
Route::post('/account/update', [Controllers\AccountController::class, 'postAccount']);
Route::get('/favorite', [Controllers\FavoriteController::class, 'getIndex']);
Route::post('/favorite/{id}', [Controllers\FavoriteController::class, 'postFavorite'])->name('favorite');
Route::get('/about', [Controllers\AboutController::class, 'getIndex']);
Route::get('/categories/{id?}', [Controllers\CategoriesController::class, 'getIndex']);
Route::get('/orderHistory', [Controllers\OrderHistoryController::class, 'getIndex']);


// basket
Route::controller(Controllers\BasketController::class)->prefix('basket')->group(function() {
    Route::get('/', 'getIndex');
    Route::post('/order', 'postOrder');
    Route::get('/delete/{prod_id}', 'getDelete');
    Route::post('/count/{prod_id}', 'postCount');
});

// feedback
Route::controller(Controllers\FeedbackController::class)->prefix('feedback')->group(function() {
    Route::get('/', 'getIndex');
    Route::post('/', 'postIndex');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
