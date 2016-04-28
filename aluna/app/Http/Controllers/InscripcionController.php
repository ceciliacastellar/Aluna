<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use Validator;
use DB;

class InscripcionController extends Controller
{
  /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

public function index(){
     return view('inscripcion');
}


public function create(Request $request){
  $this ->validate($request, [
       'nombres'=> 'max:60',
       'apellidos'=> 'max:60',
       'tipo_documento'=> 'max:60',
       'numero_documento'=> 'max:60',
       'fecha_nacimiento'=> 'max:60',
       'departamento'=> 'max:60',
       'municipio'=> 'max:60',
       'edad'=> 'max:60',
       'direccion_residencia'=> 'max:60',
       'nombre_persona'=> 'max:60',
       'apellido_persona'=> 'max:60',
       'parentesco'=> 'max:60',
       'nombre_padre'=> 'max:60',
       'apellido_persona'=> 'max:60',
       'tipo_documentop'=> 'max:60',
       'numero_documentop'=> 'max:60',
       'direccion_padre'=> 'max:60',
       'tel_padre'=> 'max:60',
       'dir_trabajop'=> 'max:60',
       'tel_trabajop'=> 'max:60',
       'dir_trabajop'=> 'max:60',
       'tel_trabajop'=> 'max:60',
       'nombre_madre'=> 'max:60',
       'apellido_madre'=> 'max:60',
       'tipo_documentom'=> 'max:60',
       'direccion_madre'=> 'max:60',
       'tel_madre'=> 'max:60',
       'dir_trabajom'=> 'max:60',
       'tel_trabajom'=> 'max:60',
       'nombre_acudiente'=> 'max:60',
       'apellido_acudiente'=> 'max:60',
       'tipo_documentopa'=> 'max:60',
       'numero_documentoa'=> 'max:60',
       'direccion_acudiente'=> 'max:60',
       'tel_acudiente'=> 'max:60',
       'dir_trabajoa'=> 'max:60',
       'tel_trabajoa'=> 'max:60',
       'nombre_emergencia'=> 'max:60',
       'apellido_emergencia'=> 'max:60',

       'numero_documentoe'=> 'max:60',
       'direccion_emergencia'=> 'max:60',
       'tel_emergencia'=> 'max:60',
       'dir_trabajoe'=> 'max:60',
       'tel_trabajoe'=> 'max:60',
       'fecha_matricula'=> 'max:60',
       'convenio'=> 'max:60',
       'modulo'=> 'max:60',
       'programa'=> 'max:60',
  ]);
        $alumno = new alumno;
        $alumno->nombres = $request->nombres;
        $alumno->apellidos = $request->apellidos;
        $alumno->tipo_documento = $request->tipo_documento;
        $alumno->numero_documento = $request->numero_documento;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->departamento = $request->departamento;
        $alumno->municipio = $request->municipio;
        $alumno->edad = $request->edad;
        $alumno->direccion_residencia = $request->direccion_residencia;
        $alumno->nombre_persona = $request->nombre_persona;
        $alumno->apellido_persona = $request->apellido_persona;
        $alumno->parentesco = $request->parentesco;
        $alumno->nombre_padre = $request->nombre_padre;
        $alumno->apellido_padre = $request->apellido_padre;
        $alumno->tipo_documentop = $request->tipo_documentop;
        $alumno->numero_documentop = $request->numero_documentop;
        $alumno->direccion_padre = $request->direccion_padre;
        $alumno->tel_padre = $request->tel_padre;
        $alumno->dir_trabajop = $request->dir_trabajop;
        $alumno->tel_trabajop = $request->tel_trabajop;
        $alumno->nombre_madre = $request->nombre_madre;
        $alumno->apellido_madre = $request->apellido_madre;
        $alumno->tipo_documentom = $request->tipo_documentom;
        $alumno->numero_documentom = $request->numero_documentom;
        $alumno->direccion_madre = $request->direccion_madre;
        $alumno->tel_madre = $request->tel_madre;
        $alumno->dir_trabajom = $request->dir_trabajom;
        $alumno->tel_trabajom = $request->tel_trabajom;
        $alumno->nombre_acudiente = $request->nombre_acudiente;
        $alumno->apellido_acudiente = $request->apellido_acudiente;
        $alumno->tipo_documentopa = $request->tipo_documentopa;
        $alumno->numero_documentoa = $request->numero_documentoa;
        $alumno->direccion_acudiente = $request->direccion_acudiente;
        $alumno->tel_acudiente = $request->tel_acudiente;
        $alumno->dir_trabajoa = $request->dir_trabajoa;
        $alumno->tel_trabajoa = $request->tel_trabajoa;
        $alumno->nombre_emergencia = $request->nombre_emergencia;
        $alumno->apellido_emergencia = $request->apellido_emergencia;

        $alumno->direccion_emergencia = $request->direccion_emergencia;
        $alumno->tel_emergencia = $request->tel_emergencia;
        $alumno->tel_trabajoe = $request->tel_trabajoe;
        $alumno->fecha_matricula = $request->fecha_matricula;
        $alumno->convenio = $request->convenio;
        $alumno->modulo = $request->modulo;
        $alumno->programa = $request->programa;
        $alumno->save();
        return view('inscripcion');

      }
}
