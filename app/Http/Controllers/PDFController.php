<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
    	return view('sample');
    }

    public function print()
    {
    	
    	$view = View('invoice');
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view->render());
    	return $pdf->stream();

    }
}
