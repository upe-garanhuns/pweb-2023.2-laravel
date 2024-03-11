<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use Spatie\FlareClient\Api;

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


Route::get('/', [TarefaController::class, 'index'])->name('tarefa.index');
Route::get('/create-tarefa', [TarefaController::class, 'create'])->name('tarefa.create');
Route::get('/show-tarefa/{id}', [TarefaController::class, 'show'])->name('tarefa.show');
Route::post('/store-tarefa', [TarefaController::class, 'store'])->name('tarefa.store');
Route::get('/edit-tarefa/{id}', [TarefaController::class, 'edit'])->name('tarefa.edit');
Route::put('/update-tarefa/{id}', [TarefaController::class, 'update'])->name('tarefa.update');

