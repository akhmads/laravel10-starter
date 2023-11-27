<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});


// Clear all cache
// ------------------------------------
Route::get('/sys/clear', function () {
    Artisan::call('view:clear');
    dump(Artisan::output());
    Artisan::call('cache:clear');
    dump(Artisan::output());
    Artisan::call('config:clear');
    dump(Artisan::output());
    Artisan::call('event:clear');
    dump(Artisan::output());
    Artisan::call('route:clear');
    dump(Artisan::output());
});
