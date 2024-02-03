<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }
    public function store(StoreCurso $request){
        //validar sin StoreCurso form request
        /* $request->validate([
            'name' => 'required|min:3',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]); */

       /*  $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save(); */

        //asignacion massiva
        /* $curso = Curso::created([ // create, crea y guarda al tiempo
            'name' => $request->name,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria
        ]); */

        //mejor manera
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso); // aqui se puede colocar $curso->id pero ya laravel entiende que debe mostar el actual
    }
    public function show(Curso $curso){
        return view('cursos.show', [
            'curso' => $curso
        ]);
        // compact('curso'); == ['curso' => $curso];
    }
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));

    }
    public function update(StoreCurso $request, Curso $curso){
        
        /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save(); */
        // con asignacion masiva
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }
}
