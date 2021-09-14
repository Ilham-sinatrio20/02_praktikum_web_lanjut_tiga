<?php

use App\Http\Controllers\ContactsController;
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

// Home Page
Route::get('/home', function () {
    echo "Ini adalah halaman Home Page";
});

// Products Page
Route::prefix('products')->group(function() {
    Route::get('/category_1', function (){
        return "Marbel Edu Games";
    });
    Route::get('/category_2', function (){
        return "Marbel and Friends Kids Games";
    });
    Route::get('/category_3', function (){
        return "Riri Story Books";
    });
    Route::get('/category_4', function (){
        return "Kolak Kids Songs";
    });
});


// News Page (Route Param)
Route::get('/news/{id}', function ($id=0) {
    return "Educa Studio Berbagi Untuk Warga Sekitar Terdampak Covid-19";
});

// Program Page
Route::prefix('program')->group(function(){
    Route::get('/karir', function () {
        return "Karir";
    });
    Route::get('/magang', function () {
        return "Magang";
    });
    Route::get('/kunjungan-industri', function () {
        return "Kunjungan Industri";
    });
});

// About Us Page
Route::get('/about', function() {
    echo "About Page";
});

// Contact Us Page
Route::resource('contact/{contacts}', ContactsController::class) -> only ([
    'index'
]);

Route::get('contact/{contacts}', [ContactsController::class, 'show']);
