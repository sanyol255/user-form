<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;

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

Route::get('/', [UserFormController::class, 'index'])->name('user-form');
Route::post('/', [UserFormController::class, 'save'])->name('save-user');

Route::get('/user-created', [UserFormController::class, 'createdUser'])->name('user-created');

