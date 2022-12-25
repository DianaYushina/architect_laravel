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
Route::get('/about', [Controllers\AboutController::class, 'getIndex']);
Route::get('/categories', [Controllers\CategoriesController::class, 'getIndex']);

// basket
Route::controller(Controllers\FeedbackController::class)->prefix('basket')->group(function() {
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
