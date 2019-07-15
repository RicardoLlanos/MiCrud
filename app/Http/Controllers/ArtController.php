<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Articulo;

class ArtController extends Controller
{
    public function exportPdf()
    {
    	$articulos = Articulo::get();
    	$pdf = PDF::loadView('pdf.articulo', compact('articulos'));
    	return $pdf->download('articulo-list-pdf');
    }
}
