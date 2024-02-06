<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redirect;

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


Route::get('/login',[Redirect::class,'redirectLogin'])->name('login');

Route::get('/register',[Redirect::class,'redirectRegister'])->name('register');

Route::get('/landing-page',[Redirect::class,'redirectHome'])->name('landing-page');

Route::get('/todos-page',[Redirect::class,'redirectTodosPage'])->name('todos-page');
