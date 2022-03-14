<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimelogController;

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


Route::post('project', [ProjectController::class, 'store']);
Route::post('task', [TaskController::class, 'store']);

Route::controller(TimelogController::class)->group(function () {
    Route::get('/', 'index')->name('timelog.index');
    Route::post('timelog', 'store')->name('timelog.store');
});

