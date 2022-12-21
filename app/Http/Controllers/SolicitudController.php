<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitudes;

class SolicitudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $solicitudes = solicitudes::all();
        return $solicitudes;

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
        $solicitud = new solicitudes();

        $solicitud->razon_social = $request->razon_social;
        $solicitud->ruc = $request->ruc;
        $solicitud->descripcion = $request->descripcion;
        $solicitud->presupuesto = $request->presupuesto;
        $solicitud->estado = $request->estado;
        $solicitud->user_id = $request->user_id;

        $solicitud->save();
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
        $solicitud = solicitudes::find($id);

        return $solicitud;
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

        $solicitud = solicitudes::findOrFail($id);

        $solicitud->razon_social = $request->razon_social;
        $solicitud->ruc = $request->ruc;
        $solicitud->descripcion = $request->descripcion;
        $solicitud->presupuesto = $request->presupuesto;
        $solicitud->estado = $request->estado;
        $solicitud->user_id = $request->user_id;

        $solicitud->save();

        return $solicitud;
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
        $solicitud = solicitudes::destroy($id);
        return $solicitud;
    }
}
