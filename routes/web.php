<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Resource routes
Route::resource('machines', \App\Http\Controllers\MachineController::class);
Route::resource('appointments', \App\Http\Controllers\AppointmentController::class);


//Profile routes
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//Admin routes
Route::get('/admin', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.index')->middleware(['auth', 'admin']);
Route::put('/admin/toggle/{user}', [\App\Http\Controllers\Admin\UserController::class, 'toggle'])->name('admin.toggle')->middleware(['auth', 'admin']);

//machine search routes
Route::get('/machine-search', [\App\Http\Controllers\MachineController::class, 'search'])->name('machines.search');
Route::get('/machine-filter', [\App\Http\Controllers\MachineController::class, 'filter'])->name('machines.filter');
