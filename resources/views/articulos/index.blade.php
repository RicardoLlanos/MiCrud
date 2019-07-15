@extends('../layouts.plantilla')

@section('pageTitle')

Home - Crud

@endSection

@section("cabecera")


@endSection

@section("contenido")

<h1>Leer registros</h1>

<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
			<th>Nombre articulo</th>
			<th>Seccion</th>
			<th>Precio</th>
			<th>Pais de Origen</th>
			<th>Observaciones</th>
		</tr>
	</thead>
		@foreach($articulos as $articulo)
	<tbody>
		<tr>
			<td><a href="{{route('articulos.edit', $articulo->id)}}">
				{{$articulo->Nombre_Articulo}}</a></td>
			<td>{{$articulo->Seccion}}</td>
			<td>{{$articulo->Precio}}</td>
			<td>{{$articulo->Pais_origen}}</td>
			<td>{{$articulo->Observaciones}}</td>
		</tr>
	</tbody>
	@endforeach
</table>

 {{ $articulos->links() }}


<h4>Exportar datos</h4>
<p>
	<a href="{{route('articulo.pdf')}}">Aqui</a>Para descargar en PDF 
</p>

@endSection