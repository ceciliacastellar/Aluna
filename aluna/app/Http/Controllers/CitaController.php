<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cita;
use App\Alumno;
use Validator;
use View;
use DB;

class CitaController extends Controller
{
  public function index()
   {
      $citas = Cita::all();
      return View::make('cita.index')->with('citas', $citas);
   }

   public function edit($id)
   {
       $citas = Cita::find($id);
       return View::make('cita.show')->with('citas', $citas);
   }

   public function seecreate($id){
     $alumnos = Alumno::find($id);
     return  View::make('cita.seecreate')->with('alumnos', $alumnos);
   }

   public function store(Request $request){
     $this ->validate($request, [
          'nombre_medico'=> 'max:60',
          'area'=> 'max:60',
          'fecha'=> 'max:60',
          'hora'=> 'max:60',
          'motivo_consulta'=> 'max:60',
          'descripcion'=> 'max:60',


     ]);
           $cita = new cita;
           $cita->nombre_medico = $request->nombre_medico;
           $cita->area = $request->area;
           $cita->fecha = $request->fecha;
           $cita->hora = $request->hora;
           $cita->motivo_consulta = $request->motivo_consulta;
           $cita->descripcion = $request->descripcion;
           $cita->alumno_id = $request->alumno_id;
           $cita->save();
           return view('/principal');

         }










}
