@extends('layouts.plantillabase')

@section('contenido')
<a href="articulos/create" class="btn btn-primary">CREAR</a>

<label id="dato"></label>
<table class="table table-dark table-striped mt-4">
<thead>
     <tr>
     <th>ID</th>
     <th>Codigo</th>
     <th>Descripcio</th>
     <th>Cantidad</th>
     <th>Precio</th>
     <th>Acciones</th>
     <th></th>

     </tr> 
 </thead>
<tbody>
@foreach($articulos as $articulo)
<tr>

<td>{{$articulo->id}}</td>
<td>{{$articulo->codigo}}</td>
<td>{{$articulo->descripcion}}</td>
<td>{{$articulo->cantidad}}</td>
<td>{{$articulo->precio}}</td>
 <td><div class="btn-group" role="group" aria-label="Basic example">
  
  
</div></td>
 <td>
 <form action="{{route('articulos.destroy',$articulo->id)}}" method="post">
 @csrf
@method('DELETE')
 <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>\
<button type="submit" class="btn btn-danger">Eliminar</button>
<button onclick="pasar('{{$articulo->descripcion}}')" class="btn btn-primary">ejemplo</button>
 </form>
</td>

</tr>
@endforeach




<script>



function pasar(codigo) {
    var ob=codigo;
    var mostrar= document.getElementById('dato');

    mostrar.innerHTML=ob;
}
</script>








</tbody>
</table>
@endsection