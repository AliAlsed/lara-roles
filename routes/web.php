<?php

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\RolesController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::group([

    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::resource('tasks', TaskController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('news', NewsController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
