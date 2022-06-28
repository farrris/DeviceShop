<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TypeController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/device/{id}', [IndexController::class, 'device']);

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'admin']);
    Route::post('/brand/create', [BrandController::class, 'create']);
    Route::post('/type/create', [TypeController::class, 'create']);
    Route::post('/device/create', [DeviceController::class, 'create']);
});

Route::group(['prefix' => 'basket', 'middleware' => 'user', 'as' => 'user.'], function() {
    Route::get('/', [BasketController::class, 'basket']);
    Route::get('/add/{id}', [BasketController::class, 'add']);
    Route::get('/buy', [BasketController::class, 'buy']);
});

require __DIR__.'/auth.php';
