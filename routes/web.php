<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
    return view('pages/home');
});

Route::get('/about-us', function () {
    return view('pages/aboutUs');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages/contactUs');
})->name('contact-us');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');