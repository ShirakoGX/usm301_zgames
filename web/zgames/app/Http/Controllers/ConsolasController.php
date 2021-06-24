<?php

namespace App\Http\Controllers;
use App\Models\Consola;
use Illuminate\Http\Request;
  
class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas = array();
        $marcas[]= "Sony";
        $marcas[]= "Microsoft";
        $marcas[]= "Nintendo";
        $marcas[]= "Sega";
        return $marcas;
    }
    public function getConsolas(){
        $consolas=Consola::all();
        return $consolas;
    }
    public function crearConsolas(Request $request){
        $input = $request->all();
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

        $consola->save();
        return $consola;  
    }
}
