<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Signup;
use App\Http\Controllers\auth\Login;
use App\Http\Controllers\Dashboard\Home;
use App\Http\Controllers\Dashboard\Data;
use App\Http\Controllers\Dashboard\Dataset;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// authentication
Route::get('/login', [Login::class, "index"])->name("login-pages");
Route::get('/signup', [Signup::class, "index"])->name("signup-pages");

// Dashboard page
Route::get('/', [Home::class, "index"])->name("home-pages");
Route::get('/data', [Data::class, "index"])->name("data-pages");
Route::get('/data/detail', [Data::class, "show"])->name("data-pages-detail");
// dataset page
Route::get('/dataset', [Dataset::class, "index"])->name("dataset-pages");
Route::get('/dataset/view', [Dataset::class, "selectData"])->name("select-dataset");
