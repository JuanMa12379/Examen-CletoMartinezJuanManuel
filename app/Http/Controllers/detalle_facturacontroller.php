<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_factura;
use App\Http\Requests\detalle_factura as detalle_facturaRequests;

class detalle_facturacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $detalle_factura;

    public function _construct (detalle_factura $detalle_factura){
        $this -> detalle_factura = $detalle_factura;

    }
    public function index()
    {
        //
        $detalle_factura = detalle_factura::all();
        return response()->json(['detalle_factura'=> $detalle_factura] );
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
        $detalle_factura = $this->detalle_factura->create($request->all());
       // return $request;
        //return response()->json ($materia);
      return response()->json(new detalle_facturaRequests($detalle_factura), 201);
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
        $detalle_factura = detalle_factura::find($id);

        return $detalle_factura;
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
