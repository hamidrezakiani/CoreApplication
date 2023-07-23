<?php

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

Route::get('plugins',[PluginController::class,'index']);
Route::get('libraries',[LibraryController::class,'index']);
