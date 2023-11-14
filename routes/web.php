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
Route::get('/index', function () {return view('welcome');})->name('index');
Route::get('/service', function (){return view('service');})->name('service');
Route::get('/about', function (){return view('about');})->name('about');
Route::get('/contact', function (){return view('contact');})->name('contact');
Route::get('/shakeNumbers', function (){return view('shakeNumbers');})->name('shake');

Route::get('/getInput',[\App\Http\Controllers\HomeController::class, 'getInputNumber'])->name('getInput');

