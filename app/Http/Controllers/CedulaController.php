<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento as Documento;
use Illuminate\Support\Facades\Input;


class CedulaController extends Controller
{
    public function buscarCedula(){
    	$url="https://www.facebook.com/messages/t/nicolasc1";
    	$input= Input::all();
    	$Cedula =$input['cedula'];
    	//haciendo la busqueda
    	$Resultado=Documento::where("documento", "=",$Cedula) -> get();
    	//verifica lo que tiene
    	//dd($Resultado);
    	if (!$Resultado->isEmpty()){

    		return redirect($url);
    	}else{
    		return view("welcome");
    	}
    }
}
