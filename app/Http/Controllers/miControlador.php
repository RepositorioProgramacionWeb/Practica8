<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validreq;

class miControlador extends Controller
{
    public function principal(){
        return view ("principal");
    }

    public function registrarLibro(){
        return view ("RegLibro");
    }

    //FUNCIÓN PARA EL REQUEST
    public function validaFormulario(validreq $req){
       // return $req;
        return redirect('reg')->with('Confirmacion','Llego correcto');
    }
}
