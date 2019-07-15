<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articulos=Articulo::orderBy('Nombre_Articulo','asc')->paginate(3);

        return view("articulos.index", compact("articulos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articulos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $articulo = new Articulo;

       $articulo->Nombre_Articulo=$request->Nombre_Articulo;
       $articulo->Precio=$request->Precio;
       $articulo->Pais_origen=$request->Pais_origen;
       $articulo->Observaciones=$request->Observaciones;
       $articulo->Seccion=$request->Seccion;

       $articulo->save();

       return redirect("/articulos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo=Articulo::findOrFail($id);

        return view("articulos.show", compact("articulo"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo=Articulo::findOrFail($id);

        return view("articulos.edit", compact("articulo"));
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
        $articulo=Articulo::findOrFail($id);

        $articulo->update($request->all());

        return redirect("/articulos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo=Articulo::findOrFail($id);

        $articulo->delete();

        return redirect("/articulos");
    }

}
