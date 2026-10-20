<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/estudiantes', [EstudianteController::class, 'index']);

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show']);

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');