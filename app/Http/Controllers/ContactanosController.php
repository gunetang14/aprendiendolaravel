<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);
        
        Mail::to('correodeprueba@correo.com')
        ->send( new ContactanosMailable( $request->all() ) );

        //mensaje de confirmacion
        // manera 1 con helper session
        //session()->flash('info', 'Mensaje Enviado');

        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado'); // metodo with para enviar en una variable informacion
        
    }
}
