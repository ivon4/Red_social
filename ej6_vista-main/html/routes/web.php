<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

// Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
Route::get('/logados', [AuthController::class, 'logados'])->name('logados');
Route::get('/registro', [UserController::class, 'create'])->name('registro');
Route::post('/guardar_registro', [UserController::class, 'store'])->name('guardar_registro');
// Route::get('/', function () { return view('profile.profile'); }) -> name('principal');
// Route::get('/', function () { return view('home'); }) -> name('principal');
Route::get('/',[PostController::class, 'home'])->name('principal'); 
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/login', function () { return view('auth.login'); }) -> name('login');

// CRUD POSTS

Route::get('post', [PostController::class, 'index'])->name('list-post');
Route::get('post/nuevo', [PostController::class, 'create'])->name('create-post');
Route::post('post/guardar', [PostController::class, 'store'])->name('save-post');
Route::post('post/editar/{id}', [PostController::class, 'edit'])->name('edit-post');
Route::post('post/actualizar/{id}', [PostController::class, 'update'])->name('update-post');
Route::get('post/borrar/{id}', [PostController::class, 'destroy'])->name('delete-post');


