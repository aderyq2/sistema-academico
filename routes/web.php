<?php

// Importar los controladores.
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;

// Importar el sistema de rutas de Laravel.
use Illuminate\Support\Facades\Route;

// Ruta principal del proyecto.
Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar la página de inicio.
Route::get('/inicio', [InicioController::class, 'index']);

// Ruta para mostrar la lista de estudiantes.
Route::get('/estudiantes', [EstudianteController::class, 'index'])
    ->name('estudiantes.index');

// Ruta para mostrar los datos de un estudiante seleccionado.
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])
    ->name('estudiantes.show');

// Ruta para mostrar la lista de cursos.
Route::get('/cursos', [CursoController::class, 'index'])
    ->name('cursos.index');