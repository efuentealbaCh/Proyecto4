<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class DocsController extends Controller
{
    public function imprimir(){
    $pdf = Pdf::loadView('pdf.plantilla');
    return $pdf->stream();
    }
}
