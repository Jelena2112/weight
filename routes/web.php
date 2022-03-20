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


Route::view('/', 'layout');
Route::view('/newUser', 'makeUser');
Route::view('/userWeight', 'addUserWeight')->name('addWeight.get');

/**
 * Post routes
 */

Route::post('/createUser', [UserController::class, 'createUser'])->name('createUser');
Route::post('/addUserWeight', [UserController::class, 'userAddWeight'])->name('addWeight.post');
