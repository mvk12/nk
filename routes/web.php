<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Zoho\TestOAuthController;

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

Route::group(['prefix' => '/zohoauth'], function () {
    Route::view('/', 'zoho.auth');
    Route::get('/ok', [TestOAuthController::class, 'index']);
    Route::post('/ok', [TestOAuthController::class, 'index']);
    Route::view('/token', 'zoho.token');
    Route::get('/jwt', [TestOAuthController::class, 'index']);
    Route::post('/jwt', [TestOAuthController::class, 'index']);
});