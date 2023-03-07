<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiPlanet;

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

Route::group(['prefix'=>'/multiplanet'],function () {

    Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    Route::get('/about-us', [MultiPlanet::class, 'about'])->name('about_us');
    Route::get('/contact_us', [MultiPlanet::class, 'contact'])->name('contact_us');
     Route::get('/gallery', [MultiPlanet::class, 'gallery'])->name('gallery');
     Route::get('/resources', [MultiPlanet::class, 'resources'])->name('resources');
    Route::get('/sales', [MultiPlanet::class, 'sales'])->name('sales');
    Route::get('/services', [MultiPlanet::class, 'services'])->name('services');
    // Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    // Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    // Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    // Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    //  Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    //   Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');
    //   Route::get('/home', [MultiPlanet::class, 'index'])->name('index_home');

});
