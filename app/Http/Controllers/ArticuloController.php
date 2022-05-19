<?php

namespace App\Http\Controllers;
use App\Models\Articulo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articulos= Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);

    //    $articulos = DB::table('articulos')->get();
    //     return view('articulo.index', ['articulo' => $articulos]);
    //     DB::table('articulos')->where('precio',$precio)-> ('cantidad',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
    //     $articulos= new Articulo();
    //     $articulos->codigo = $request->get('codigo');
    //     $articulos->descripcion = $request->get('descripcion');
    //     $articulos->cantidad = $request->get('cantidad');
    //     $articulos->precio = $request->get('precio');
       // $articulos->save();
    $codigo= $request ->get('codigo');
    $descripcion=$request->get('descripcion');
    $cantidad=$request->get('cantidad');
    $precio=$request->get('precio');
    DB:: insert('insert into articulos (codigo, descripcion, cantidad, precio) values (?, ?, ?, ?)', [$codigo, $descripcion,$cantidad,$precio]);
        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $articulos= Articulo::find($id);
    return view('articulo.edit')->with('articulo',$articulos);
    return redirect('/articulos');
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
         $articulos= Articulo::find($id);
         $articulos->codigo = $request->get('codigo');
         $articulos->descripcion = $request->get('descripcion');
         $articulos->cantidad = $request->get('cantidad');
         $articulos->precio = $request->get('precio');
           $articulos->save();

    //     $codigo= $request ->get('codigo');
    //    $descripcion=$request->get('descripcion');
    //    $cantidad=$request->get('cantidad');
    //    $precio=$request->get('precio');
       
    //    DB:: update('update articulos set codigo = ?, descripcion=?, cantidad=?, precio=? where id=?', [$codigo,$descripcion,$cantidad,$precio,$id]);
    DB::table('articulos')->where('id',$id)-> decrement('cantidad',1);
         return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo=Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
