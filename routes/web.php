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
/* Route::get('Cursos', [CursoController::class, 'index'])->name('cursos.index'); */
/* Route::get('Cursos', 'CursoController@index'); para Laravel 7
 */
/*  Route::get('Cursos/create', [CursoController::class, 'create'])->name('cursos.create');*/
//1 parametro en la funcion
/* Route::get('Cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::post('Cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('Cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('Cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('Cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

//manera mas reducida para quitar codigo y declarar las rutas
Route::resource('cursos', CursoController::class);
/* Route::resource('asignaturas', CursoController::class)->names('cursos'); */ // si quiero cambiar el nombre en la url
// pero no los nombres de los metodos para que no me de error de redireccionamiento en las rutas ya creadas en los htmls
/* Route::resource('asignaturas', CursoController::class)->parameters('asignaturas' => 'curso)->names('cursos'); */ 
// el metodo parameters es para asignar el nombre de la variable de los parametros y no tener que cambiar el nombre de los parametros
//en cada funcion

//GRUPOS DE RUTAS
// Route::controller(CursoController::class)->group(function(){
//     Route::get('Cursos', 'index');
//     Route::get('Cursos/create', 'create');
//     Route::get('Cursos/{curso}', 'show');
// });

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