<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificaciones;

class ClasificacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['store','index','destroy','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clasificaciones = Clasificaciones::all();
        return $clasificaciones;
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
        //
        $clasificacion = new Clasificaciones();

        $clasificacion->imagen = $request->imagen;
        $clasificacion->resultado = $request->resultado;
        $clasificacion->user_id = 1;

        $clasificacion->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $clasificacion = Clasificaciones::findOrFail($id);

        $clasificacion->imagen = $request->imagen;
        $clasificacion->resultado = $request->resultado;
        $clasificacion->user_id = 1;

        $clasificacion->save();

        return $clasificacion;
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
        $clasificacion = Clasificaciones::destroy($id);
        return $clasificacion;
    }
}
