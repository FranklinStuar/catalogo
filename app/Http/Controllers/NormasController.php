<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Norma;

class NormasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('normas.index')->with('normas',Norma::all());
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('normas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $norma = new Norma;
        $norma->nombre = $request->nombre;
        $norma->descripcion = $request->descripcion;
        $norma->tipo = $request->tipo;
        $norma->save();
        return redirect('admin/normas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('normas.productos')->with('norma',Norma::find($id));
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
        return view('normas.edit')->with('norma',Norma::find($id));
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
        $norma = Norma::find($id);
        $norma->nombre = $request->nombre;
        $norma->descripcion = $request->descripcion;
        $norma->tipo = $request->tipo;
        $norma->save();
        return redirect('admin/normas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $norma = Norma::find($id);
        $norma->delete();
        return redirect('admin/normas');
    }
}
