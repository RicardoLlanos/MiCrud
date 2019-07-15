<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{

	public function cliente(){

		return $this->belongsTo("App\Cliente");
	}

    protected $fillable=
    ["Nombre_Articulo","Precio","Pais_origen","Observaciones","Seccion"];
}
