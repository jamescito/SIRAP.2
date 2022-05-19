<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" > 
     
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  </div>
</nav>
<table class="table table-dark table-striped mt-4">
<thead>
     <tr>
     <th>ID</th>
     <th>Codigo</th>
     <th>Descripcio</th>
     <th>Cantidad</th>
     <th>Precio</th>
     <th></th>
    
     

     </tr> 
 </thead>
<tbody>
      @foreach($productos as $articulo)
      <tr>

<td>{{$articulo->id}}</td>
<td>{{$articulo->codigo}}</td>
<td>{{$articulo->descripcion}}</td>
<td><input type="number" id="exampleFormControlInput1" placeholder="" value={{$articulo->cantidad}}></td>
<td>{{$articulo->precio}}</td>
<td><button type="button" onclick="Pasardatos({{$articulo->id}},'{{$articulo->descripcion}}',{{$articulo->cantidad}},{{$articulo->precio}})" class="btn btn-primary">Agregar</button></td>

 

</tr>
      @endforeach
      </tbody>
</table>  
      
<script>
function Pasardatos(id,desc,cantidad,precio) {
  var obtener=id;
  var obt=desc;
  var ob=cantidad;
  var p=precio;
  var mostrar=document.getElementById('idtabla');
  var mos=document.getElementById('desctabla');
  var mo=document.getElementById('canttabla');
  var pasar=document.getElementById('pretabla');


  mostrar.innerHTML=obtener;
  mos.innerHTML=obt;
  mo.innerHTML=ob;
  pasar.innerHTML=p;
 

}
</script>


    </div>
  </div>
</div>
</div>