<?php

use App\Http\Controllers\NoteController;
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

//Obtenemos notas
Route::get('/', [NoteController::class, 'index'])->name('notes.home');

//Creamos notas
Route::get('/new', [NoteController::class, 'create'])->name('notes.create');
Route::post('/new', [NoteController::class, 'store'])->name('notes.store');

Route::get('/{note}', [NoteController::class, 'show'])->name('notes.show');

Route::get('/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::patch('/{note}/edit', [NoteController::class, 'update'])->name('notes.update');

Route::delete('/{note}', [NoteController::class, 'delete'])->name('notes.delete');