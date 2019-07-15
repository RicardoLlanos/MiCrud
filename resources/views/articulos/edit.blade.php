@extends('../layouts.plantilla')

@section('pageTitle')

Crear - Crud

@endSection


@section("cabecera")

@endSection

@section("contenido")

<h1>Editar Articulo</h1>

<form method="post" action="/articulos/{{ $articulo->id }}">

{{csrf_field()}}

	<input type="hidden" name="_method" value="PUT">

	<div class="form-group">
		<label for="Nombre">Nombre Articulo</label>
		<input type="text" class="form-control" id="Nombre_Articulo" 
		name="Nombre_Articulo" value="{{ $articulo->Nombre_Articulo}}">
	</div>
	
	<div class="form-group">
		<label for="Precio">Precio</label>
		<input type="text" class="form-control" id="Precio"  name="Precio" value="{{ $articulo->Precio }}">
	</div>

	<div class="form-group">
		<label for="Pais de Origen">Pais de Origen</label>
		<input type="text" class="form-control" id="Pais_origen"  name="Pais_origen" value=" {{ $articulo->Pais_origen }}">
	</div>

	<div class="form-group">
		<label for="Observaciones">Observaciones</label>
		<input type="text" class="form-control"  id="Observaciones"  name="Observaciones" value=" {{ $articulo->Observaciones }}">
	</div>

	<div class="form-group">
		<label for="Seccion">Seccion</label>
		<input type="text" class="form-control" id="Seccion" name="Seccion" value=" {{ $articulo->Seccion }}">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-success" name="enviar" value="enviar">
		<input type="reset"  class="btn btn-warning" name="Borrar" value="Borrar">
	</div>

</form>


<form method="post" action="/articulos/{{$articulo->id}}">
	{{csrf_field()}}

	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" class="btn btn-danger" value="Eliminar registros">
</form>
@endSection