@extends('layouts.plantillabase')
@section('contenido')
<button onclick="pasarid($codigo->codigo)" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Mostrar
</button>
<x-detalle-venta :productos="$articulos"/>

<form action="/venta"  class="w-75 p-3" method="post">
@csrf()
<div class="row">
  <div class="col">
    <input type="text" name="codigo" class="form-control" placeholder="Codigo" aria-label="First name">
  </div>

  <div class="col">
  </div>

</div>
</br>

<div class="row">
  <div class="col">
    <input type="text" class="form-control" name="vendedor" placeholder="Vendedor" aria-label="First name">
  </div>
  <div class="col">

    <input type="text" class="form-control" name="cliente" placeholder="Cliente" aria-label="Last name">
  </div>
</div>
</br>
<div class="input-group">
  <input name="pago" type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
  <span  class="input-group-text">Pago en C$</span>
  <span class="input-group-text">0.00</span>
</div>
</br>

<div class="row">
  <div class="col">
  <div class="mb-3">
    
    <input name="fecha" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  </div>
  <div class="col">
    <input type="text" class="form-control" name="telefono" placeholder="Numero de celular" aria-label="Last name">
  </div>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo venta</th>
      <th scope="col">codigo producto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio unitario</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th id="id" scope="row"></th>
      <td id="idtabla"></td>
      <td id="desctabla"></td>
      <td id="canttabla"></td>
      <td id="pretabla"></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td ></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<div class="d-grid gap-2 col-6 mx-auto">
  <input class="btn btn-primary" type="submit" value="Guardar" />
</div>
</form>

<script>
function pasarid(id) {
  var pa=id;
  var pasar=document.geyElementById('id'):
  pasar.innerHTML=pa;
}
</script>
@endsection