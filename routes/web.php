<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class );
/* Route::get('/', 'HomeController'); para laravel 7
 */

Route::get('Cursos', [CursoController::class, 'index']);
/* Route::get('Cursos', 'CursoController@index'); para Laravel 7
 */

Route::get('Cursos/create', [CursoController::class, 'create']);

//1 parametro en la funcion
Route::get('Cursos/{curso}', [CursoController::class, 'show']);

//GRUPOS DE RUTAS
Route::controller(CursoController::class)->group(function(){
    Route::get('Cursos', 'index');
    Route::get('Cursos/create', 'create');
    Route::get('Cursos/{curso}', 'show');
});

// 2 parametros
/* Route::get('cursos/{cursos}/{categoria}', function ($curso, $categoria){
    return "Bienvenido al curso $curso, de la categoria {$categoria}";
}); */

// 2 parametros dinamicos
/* Route::get('cursos/{cursos}/{categoria?}', function ($curso, $categoria = null){
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria {$categoria}";
    } else {
        return 'Bienvenido al curso: $curso';
    }
    
}); */