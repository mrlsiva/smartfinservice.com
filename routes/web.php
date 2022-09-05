<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\PreventBackHistory;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//Welcome
Route::get('/',[registerController::class, 'home'])->name('home');
//End welcome

//Register
Route::get('/sign_up',[registerController::class, 'sign_up'])->name('sign_up');
Route::post('/register',[registerController::class, 'register'])->name('register');
//Register End


//Login
Route::get('/sign_in',[loginController::class, 'sign_in'])->name('sign_in');
Route::post('/login',[loginController::class, 'login'])->name('login');
//Login End

//User Management
Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');
Route::get('/get_user',[UserController::class, 'get_user'])->name('get_user');
Route::post('/change_user_status',[UserController::class, 'change_user_status'])->name('change_user_status');
Route::get('/profile',[UserController::class, 'profile'])->name('profile');
Route::get('/user/{id}/',[UserController::class, 'user'])->name('user');
Route::get('/approve_user/{id}/',[UserController::class, 'approve_user'])->name('approve_user');
Route::get('/approve_user_profile/{id}/',[UserController::class, 'approve_user_profile'])->name('approve_user_profile');

Route::get('user_search',[UserController::class, 'user_search'])->name('user_search');
Route::get('user_status',[UserController::class, 'user_status'])->name('user_status');
Route::get('user_progress',[UserController::class, 'user_progress'])->name('user_progress');
Route::get('user_profile',[UserController::class, 'user_profile'])->name('user_profile');
Route::get('user_role',[UserController::class, 'user_role'])->name('user_role');

Route::post('/save_profile',[UserController::class, 'save_profile'])->name('save_profile');
Route::post('/edit_profile',[UserController::class, 'edit_profile'])->name('edit_profile');


//User Management end


//Logout
Route::get('/logout',[loginController::class, 'logout'])->name('logout');
//End Logout




