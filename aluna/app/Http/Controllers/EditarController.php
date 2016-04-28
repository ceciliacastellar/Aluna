<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use DB;
use View;

class EditarController extends Controller
{
  /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

public function index(){


     $alumnos = Alumno::all();


     return View::make('alumnostabla')->with('alumnos', $alumnos);

}
  //
}
