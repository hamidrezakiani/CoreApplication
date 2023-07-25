<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PluginController;
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
Route::get('login',function(){
    return view('auth.login');
});
Route::post('/login',[LoginController::class,'authenticate'])->name('login');
Route::get('logout',function(){
    Auth::logout();
});
Route::get('plugins',[PluginController::class,'index']);
Route::get('libraries',[LibraryController::class,'index']);



