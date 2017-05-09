<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linea;
use App\Models\Serie;

class LineasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lineas.index')->with('lineas',Linea::all());
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lineas.create')->with('gamas',Serie::all());
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
        $linea = new Linea;
        $linea->nombre = $request->nombre;
        $linea->gama_id = $request->gama_id;
        $linea->save();
        return redirect('admin/lineas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('lineas.edit')->with('linea',Linea::find($id))->with('gamas',Serie::all());
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
        $linea = Linea::find($id);
        $linea->nombre = $request->nombre;
        $linea->gama_id = $request->gama_id;
        $linea->save();
        return redirect('admin/lineas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linea = Linea::find($id);
        $linea->delete();
        return redirect('admin/lineas');
    }

    public function productos($id)
    {
        return view('lineas.productos')->with('linea',Linea::find($id));
    }
}
