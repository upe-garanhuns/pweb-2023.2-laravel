<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-tarefa', [TarefaController::class, 'create']);
Route::get('/show-tarefa', [TarefaController::class, 'show']);
Route::post('/store-tarefa', [TarefaController::class, 'store']);
