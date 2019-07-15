<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('pageTitle') </title>

<style>
	
	.imagenCabecera{

		float:right;
		width: 150px;
		padding-bottom: 30px;
	}
	.cabecera{
		text-align:center;
		font-size: x-large;
		font-family: Tahoma, Geneva, sans-serif;
		margin-bottom:100px;
		color:#04BF11;
	}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div class="container">
		<div class="cabecera">

			@include("layouts.navBar")
			@yield("cabecera")
			<img src="/images/disenor.png" class="imagenCabecera">
			
		</div>

		<div class="contenido">

			@yield("contenido")
			
		</div>


		<div class="pie">
			
			@yield("pie")

		</div>
	
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>