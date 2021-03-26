<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Inventario;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function inventario(){
        $inventarios = Inventario::all();
        return view('inventarios', compact('inventarios'));
    }

    public function articulos($id){
        $articulos = Inventario::find($id);
        //dd($articulos);
        return view('inventarios', compact('articulos'));

    }

    public function movimientos($id)
    {
        $movimientos = Articulo::find($id);
        //dd($movimientos->descripcion);
        return view('inventarios', compact('movimientos'));
    }
}
