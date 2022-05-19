@extends('layouts.plantillabase')

@section('contenido')
<a href="prueba/create" class="btn btn-primary">CREAR</a>

<label id="dato"></label>
<table class="table table-dark table-striped mt-4">
<thead>
     <tr>
     
     <th>Codigo</th>
     <th>Nombre</th>
     <th>Apellido</th>
     <th></th>
     <th></th>

     </tr> 
 </thead>
<tbody>

@foreach($pruebas as $prueba)
<tr>


<td>{{$prueba->codigo}}</td>
<td>{{$prueba->nombre}}</td>
<td>{{$prueba->apellido}}</td>

 <td><div class="btn-group" role="group" aria-label="Basic example">
  
  
</div></td>
 <td>
 <form action="{{route('prueba.destroy',$prueba->codigo)}}" method="post">
 
 @csrf
@method('DELETE')
 <a href="/prueba/{{ $prueba->codigo }}/edit" class="btn btn-info">Editar</a>\
<button type="submit" class="btn btn-danger">Eliminar</button>
 </form>
</td>

</tr>
@endforeach




</tbody>
</table>
@endsection