<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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
    return view('home');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/student', StudentController::class);
//Route::get('/create', [StudentController::class, 'create']);
//Route::post('/store', [StudentController::class, 'store']);
//Route::get('/edit', [StudentController::class, 'edit']);
//Route::resource('student', [StudentController::class]);

