@extends('layouts.plantillabase')
@section('contenido')
<h1>CREAR REGISTRO</h1>
<form action="\prueba" method="post">
@csrf()
<div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control" tabindex="3">
    </div>
    
    <a href="/prueba" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection