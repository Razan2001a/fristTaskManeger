<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']); 
ROUTE::POST('task',[TaskController::class, 'create'])->name('tasks.store');
Route::delete('/delete/{task}',[TaskController::class, 'destroy'])->name('tasks.delete');
Route::get('task/{task}/show', [TaskController::class, 'show'])->name('tasks.show');
Route::get('task/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('task/{task}/update', [TaskController::class, 'update'])->name('tasks.update');