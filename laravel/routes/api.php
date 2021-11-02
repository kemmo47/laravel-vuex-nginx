<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\IndexController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/index', [IndexController::class,'index']);
Route::post('/done-all-todos', [IndexController::class,'done_all_todos']);
Route::post('/del-todo', [IndexController::class,'del_todo']);
Route::post('/del-all-todos', [IndexController::class,'del_all_todos']);
Route::post('/add-todo', [IndexController::class,'add_todo']);
Route::post('/edit-todo', [IndexController::class,'edit_todo']);

