<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index']);

/* GET - page routes */
Route::get('/products', [ProductController::class, 'products']);
Route::get('/categories', [CategoryController::class, 'categories']);

/* GET - create routes */
Route::get('create_product', [ProductController::class, 'create']);
Route::get('create_category', [CategoryController::class, 'create']);

/* GET and POST - edit routes */
Route::get('edit_product/{product}', [ProductController::class, 'edit']);
Route::post('update_product/{product}', [ProductController::class, 'update']);

Route::get('edit_category/{category}', [CategoryController::class, 'edit']);
Route::post('update_category/{category}', [CategoryController::class, 'update']);

/* GET - delete routes */
Route::get('delete_product/{product}', [ProductController::class, 'delete']);
Route::get('delete_category/{category}', [CategoryController::class, 'delete']);

/* POST - store routes */
Route::post('store-data', [ProductController::class, 'store']);
Route::post('store-data-cat', [CategoryController::class, 'store']);