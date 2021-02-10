<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Zoho\TestOAuthController;
use Barryvdh\DomPDF\Facade as PDF;

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

Route::view('/', 'app');

Route::group(['prefix' => '/pdf/examples'], function () {
    Route::get('/hello_world', function () {
        $pdf = PDF::loadView('pdf.examples.01.hello_world');
        return $pdf->stream('hello_world.pdf');
    });
    Route::get('/hello_world_with_styles', function () {
        $pdf = PDF::loadView('pdf.examples.01.hello_world_with_styles');
        return $pdf->stream('hello_world_with_styles.pdf');
    });

    Route::get('/layout', function () {
        $pdf = PDF::loadView('pdf.examples.02.layout');
        return $pdf->stream('layout.pdf');
    });

    Route::get('/account_status_report', function () {
        $pdf = PDF::loadView('pdf.examples.03.layout');
        return $pdf->stream('account_status_report.pdf');
    });
});
