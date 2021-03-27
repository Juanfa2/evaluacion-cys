<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Movimiento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return $articulos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movimiento();
        $articulo = Articulo::find($request->input("id_articulo"));
        if ($request["tipo"] == "Compra"){
            $movimiento->id_tipo = 1;
            $movimiento->cantidad = $request->input("cantidad");
            $movimiento->fecha = Carbon::now();
            $movimiento->id_articulo = $request->input("id_articulo");
            $articulo->cantidad = $articulo->cantidad + $request->input("cantidad") ;

        }elseif ($request["tipo"] == "Venta"){
            $movimiento->id_tipo = 2;
            $movimiento->cantidad = $request->input("cantidad");
            $movimiento->fecha = Carbon::now();
            $movimiento->id_articulo = $request->input("id_articulo");
            if(($articulo->cantidad - $request->input("cantidad")) < 0 ){
                $articulo->cantidad = 0 ;
            }else{
                $articulo->cantidad = $articulo->cantidad - $request->input("cantidad") ;
            }
        }else{
            $movimiento->id_tipo = 3;
            $movimiento->cantidad = $request->input("cantidad");
            $movimiento->fecha = Carbon::now();
            $movimiento->id_articulo = $request->input("id_articulo");
            $articulo->cantidad = $request->input("cantidad") ;
        }
        $articulo->save();
        $movimiento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulos = Articulo::find($id)->movimientos;
        return $articulos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
