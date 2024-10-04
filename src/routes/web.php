<?php

use Illuminate\Support\Facades\Route;

// コントローラの追加
use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\CategoryController;

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

// indexの表示
Route::get('/', [Todocontroller::class, 'index']);

// Todoの追加
Route::post('/todos', [Todocontroller::class, 'store']);

// Todoの更新
Route::patch('todos/update', [Todocontroller::class, 'update']);

// Todoの削除
Route::delete('todos/delete', [Todocontroller::class, 'destroy']);

// categoryの表示
Route::get('/categories', [CategoryController::class, 'index']);

// categoryの追加
Route::post('/categories', [CategoryController::class, 'store']);

// categoryの更新
Route::patch('/categories/update', [CategoryController::class, 'update']);

// categoryの削除
Route::delete('/categories/delete', [CategoryController::class, 'destroy']);

// Todoの検索
Route::get('/todos/search', [TodoController::class, 'search']);