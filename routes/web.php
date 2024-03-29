<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\VideoControllers;
use App\Http\Controllers\indexController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [indexController::class, 'index']);

Route::get('register', [Registercontroller::class, 'registration_view']);
Route::get('auth', [Registercontroller::class, 'auth_view']);
Route::post('registration_valid', [Registercontroller::class, 'registration_valid']);
Route::post('auth_valid', [Registercontroller::class, 'auth_valid']);
Route::get('signout', [Registercontroller::class, 'signout']);

Route::get('addVideo', [VideoControllers::class, 'addVideo_view']);
Route::post('addVideo_valid', [VideoControllers::class, 'addVideo_valid']);
Route::get('/{id}/Video', [VideoControllers::class, 'Video_view']);

Route::post('/{id}/comment_Add', [VideoControllers::class, 'comment_Add']);
Route::get('/{id}/like_add', [VideoControllers::class, 'like_add']);
Route::get('/{id}/Dislike_add', [VideoControllers::class, 'Dislike_add']);

Route::get('/personalVideo', [Registercontroller::class, 'personalVideo_view']);
Route::get('/admin/index', [AdminController::class, 'index_admin']);
Route::post('/{id}/Reduct_status', [AdminController::class, 'Reduct_status']);
