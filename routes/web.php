<?php

use App\Http\Controllers\UserController;
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


Route::get('/',  [UserController::class, 'getAllUsers'])->name('getAllUsers');

Route::get('/user/{user}', [UserController::class, 'showUser'])->name('showUser');

/**
 * User creation routes
 */
Route::view('/newUser', 'makeUser');
Route::post('/createUser', [UserController::class, 'createUser'])->name('createUser');

/**
 * User weight routes
 */
Route::view('/userWeight', 'addUserWeight')->name('addWeight.get');
Route::post('/addUserWeight', [UserController::class, 'userAddWeight'])->name('addWeight.post');
