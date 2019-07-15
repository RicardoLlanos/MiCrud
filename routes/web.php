<?php


// Route::get('/', function () {
//     return view('welcome');
// });

use App\Articulo;
use App\Cliente;

Route::resource('/articulos', 'ArticulosController');

Route::get('articulos-list-pdf', 'ArtController@exportPdf')->name('articulo.pdf');


Route::get("/cliente/{id}/articulo", function($id){

	return Cliente::find($id)->articulo;
});


Route::get("/articulos/{id}/cliente", function($id){

	return Articulo::find($id)->cliente->Nombre;
});



Route::get("/articulos2", function(){

	$articulos = Cliente::find(1)->articulos->where("Pais_origen", "China");

	foreach($articulos as $articulo){

		echo $articulo->Nombre_Articulo. "&nbsp; $";
		echo $articulo->Precio.  "<br>";
	}
});

/*Route::get("/articulos2", 'ArtChinosController@Mostrar')->name('chinos');

