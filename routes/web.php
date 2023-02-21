<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserinfoController;
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

Route::get('/', [UserinfoController::class, 'index'])->middleware('auth');
Route::get('userinfo/create',[UserinfoController::class, 'create'])->middleware('auth');
Route::post('/userinfo/store',[UserinfoController::class, 'store'])->middleware('auth');
Route::get('/userinfo/edit/{user}', [UserinfoController::class, 'edit'])->middleware('auth');
Route::put('/userinfo/update/{user}', [UserinfoController::class, 'update'])->middleware('auth');
Route::delete('/userinfo/delete/{user}', [UserinfoController::class, 'destroy'])->middleware('auth');
Route::get('/userinfo/manage', [UserinfoController::class, 'manage'])->middleware('auth');;

Route::get('/admin/register',[UserController::class, 'create'])->middleware('guest');
Route::post('/admin/store',[UserController::class, 'store']);

Route::get('/admin/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/admin/auth',[UserController::class, 'authenticate']);
Route::post('/admin/logout',[UserController::class, 'logout']);


