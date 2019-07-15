@extends('../layouts.plantilla')

@section('pageTitle')

Crear - Crud

@endSection


@section("cabecera")

@endSection

@section("contenido")

<h1>Crear articulo</h1>

<form method="post" action="/articulos">

{{csrf_field()}}

	<div class="form-group">
		<label for="Nombre">Nombre Articulo</label>
		<input type="text" class="form-control" id="Nombre_Articulo" name="Nombre_Articulo" placeholder="Nombre del articulo">
	</div>
	
	<div class="form-group">
		<label for="Precio">Precio</label>
		<input type="text" class="form-control" id="Precio"  name="Precio" placeholder="Precio">
	</div>

	<div class="form-group">
		<label for="Pais de Origen">Pais de Origen</label>
		<input type="text" class="form-control" id="Pais_origen"  name="Pais_origen" placeholder="Pais de Origen">
	</div>

	<div class="form-group">
		<label for="Observaciones">Observaciones</label>
		<input type="text" class="form-control"  id="Observaciones"  name="Observaciones" placeholder="Observaciones">
	</div>

	<div class="form-group">
		<label for="Seccion">Seccion</label>
		<input type="text" class="form-control" id="Seccion" name="Seccion" placeholder="Seccion">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-success" name="enviar" value="enviar">
		<input type="reset"  class="btn btn-danger" name="Borrar" value="Borrar">
	</div>

</form>
@endSection