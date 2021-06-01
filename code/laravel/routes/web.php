<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

// Route::get('/', function() {
//     return view('gallery.home');
// });

Route::get('/', [ImageController::class, 'getHome'])->middleware('auth');

Route::get('/gallery', [ImageController::class, 'getIndex'])->middleware('auth');

Route::get('/gallery/crea', [ImageController::class, 'getCrea'])->middleware('auth');

Route::get('/gallery/{id}', [ImageController::class, 'getMostra'])->middleware('auth');

Route::get('/gallery/edit/{id}', [ImageController::class, 'getEdit'])->middleware('auth');

Route::post('/gallery/crea', [ImageController::class, 'postCrea'])->middleware('auth');

Route::post('/gallery/edit/{id}', [ImageController::class, 'postEdit'])->middleware('auth');

Route::get('/login', function () {
    echo "Login usuario";
    // return view('auth.login');
});

Route::get('/logout', function () {
    echo "Logout usuario";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
