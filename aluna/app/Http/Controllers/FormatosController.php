<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Validator;
use View;

use App\Http\Requests;

class FormatosController extends Controller
{
  public function salud($id)
   {
      $alumnos = Alumno::find($id);
      return View::make('formatos.salud')->with('alumnos', $alumnos);
   }

   public function createini($id)
    {
       $alumnos = Alumno::find($id);
       return View::make('formatos.historiaini')->with('alumnos', $alumnos);
    }

    public function edit($id)
      {
            $users = User::find($id);
            return  View::make('auth.edit')->with('users', $users);
      }


}
