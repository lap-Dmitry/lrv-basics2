<?php

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
    return view('welcome');
});

Route::get('/todo', [\App\Http\Controllers\TodoController::class, 'todo'])->name('todo');
Route::get('/todo/{id}', [\App\Http\Controllers\TodoController::class, 'todo_search'])->name('search');
Route::post('/todo/create', [\App\Http\Controllers\TodoController::class, 'add_task'])->name('');
