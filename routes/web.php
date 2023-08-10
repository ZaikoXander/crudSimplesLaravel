<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

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

Route::post('/aluno', [AlunoController::class, 'inserirAluno']);

Route::get('/aluno', [AlunoController::class, 'todosAluno']);

Route::get('aluno/{id}', [AlunoController::class, 'obtemUmAluno']);
