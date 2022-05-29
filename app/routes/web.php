<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/using-bootstrap', function () {
    return view('using-bootstrap');
});

Route::get('/using-bootstrap-step1',                    function () { return view('using-bootstrap-step1'); });
Route::get('/using-bootstrap-step2-with-cdn',           function () { return view('using-bootstrap-step2-with-cdn'); });
Route::get('/using-bootstrap-step2-with-local-files',   function () { return view('using-bootstrap-step2-with-local-files'); });
Route::get('/using-bootstrap-step2-with-mix',           function () { return view('using-bootstrap-step2-with-mix'); });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
