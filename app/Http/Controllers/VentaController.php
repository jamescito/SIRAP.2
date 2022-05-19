<?php

namespace App\Http\Controllers;
use App\Models\Ventas;
use App\Models\Articulo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $venta = Ventas::all();
        $productos= Articulo::all();
        return view('venta.venta')->with('venta',$venta)->with('articulos',$productos);

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('venta.venta');
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
        $codigo=$request->get('codigo');
        $vendedor=$request-> get('vendedor');
        $cliente=$request-> get('cliente');
        $pago=$request->get('pago');
        $fecha=$request->get('fecha');
        $telefono=$request->get('telefono');
        DB::insert('insert into ventas(codigo,vendedor,cliente,pago,fecha,telefono) values(?,?,?,?,?,?)',[$codigo,$vendedor,$cliente,$pago,$fecha,$telefono]);
    

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
