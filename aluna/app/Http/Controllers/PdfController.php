<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

use App\Http\Requests;

class PdfController extends Controller
{

  public function invoice()
  {
      $data = Alumno::all();
      //$data = $this->getData();
      $date = date('Y-m-d');
      $invoice = "";
      $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('lista.pdf');
  }

}
