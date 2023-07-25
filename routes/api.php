<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PluginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('plugins/install',[PluginController::class,'store']);
Route::post('plugins/uninstall',[PluginController::class,'destroy']);
Route::post('libraries/install',[LibraryController::class,'store']);
Route::post('libraries/uninstall',[LibraryController::class,'destroy']);
