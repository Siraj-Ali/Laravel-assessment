<?php

use App\Http\Controllers\user\UserController;
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

// Route::get('/', function () {
//     return view('landing');
    Route::get('/', [App\Http\Controllers\TaskController::class, 'index'])->name('landing');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create/task', [App\Http\Controllers\HomeController::class, 'createTask'])->name('task.create');
Route::post('/save/task', [App\Http\Controllers\HomeController::class, 'saveTask'])->name('save.task');
Route::get('/edit/task/{id}', [App\Http\Controllers\HomeController::class, 'editTask'])->name('edit.task');
Route::post('/update/task', [App\Http\Controllers\HomeController::class, 'updateTask'])->name('update.task');
Route::get('/destroye/{id}', [App\Http\Controllers\HomeController::class, 'destroye'])->name('destroye.task');
Route::get('/pdf/tsk/{id}', [App\Http\Controllers\HomeController::class, 'generatePdf'])->name('pdf.task');


Route::prefix('user')->group(function() {
    Route::controller(UserController::class)->group(function() {
        Route::get('/all', 'index')->name('all.user');
        Route::get('/edit/{id}', 'edit')->name('edit.user');
        Route::post('/update', 'update')->name('update.user');
        Route::get('/destroye/{id}', 'destroye')->name('destroye.user');
    });
});