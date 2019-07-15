<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pdf</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Listado de Articulos</h1>

	<table 	class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Nombre Articulo</th>
				<th>Seccion</th>
				<th>Precio</th>
			</tr>
	</thead>
	<tbody>
			@foreach($articulos as $articulo)
			<tr>
				<td>{{ $articulo->Nombre_Articulo }}</td>
				<td>{{ $articulo->Seccion }}</td>
				<td>{{ $articulo->Precio }}</td>
			</tr>
			@endforeach
		</tbody>
	
	</table>
</body>
</html>