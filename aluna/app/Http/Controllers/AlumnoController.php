<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Cita;
//use Validator;
use View;
use DB;

class AlumnoController extends Controller
{

  public function index(Request $request)
   {

      $alumnos = Alumno::name($request->get('name'))->paginate(8);
      return View::make('alumno.index')->with('alumnos', $alumnos);
   }



  public function create(){
         return view('alumno.create');
  }

  public function show($id)
  {
      $alumnos = Alumno::find($id);
      return View::make('alumno.show')->with('alumnos', $alumnos);
  }


  public function edit($id)
    {
          $alumnos = Alumno::find($id);
          return  View::make('alumno.edit')->with('alumnos', $alumnos);
    }


  public function store(Request $request){
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
          $alumno->_fisioterapia_ = $request->_fisioterapia_;
          $alumno->_equinoterapia_ = $request->_equinoterapia_;
          $alumno->talleres = $request->talleres;
          $alumno->_fonoaudiologia_ = $request->_fonoaudiologia_;
          $alumno->_psicologia_ = $request->_psicologia_;
          $alumno->terapia_acuatica = $request->terapia_;
          $alumno->terapia_acuatica = $request->terapia_acuatica;
          $alumno->terapia_ocupacional = $request->terapia_ocupacional;
          $alumno->save();
          return view('alumno.create');
        }

        public function update(Request $request, $id)
          {
            $alumno = Alumno::find($id);
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
            $alumno->_fisioterapia_ = $request->_fisioterapia_;
            $alumno->_equinoterapia_ = $request->_equinoterapia_;
            $alumno->talleres = $request->talleres;
            $alumno->_fonoaudiologia_ = $request->_fonoaudiologia_;
            $alumno->_psicologia_ = $request->_psicologia_;
            $alumno->terapia_acuatica = $request->terapia_acuatica;
            $alumno->terapia_ocupacional = $request->terapia_ocupacional;
            $alumno->update();
            $alumnos = Alumno::find($id);
            return View::make('alumno.show')->with('alumnos', $alumnos);
          }

      public function method($id)
        {
          $alumnos = Alumno::find($id);
          $citas = $alumnos->citas;
          $citas = Cita::where('alumno_id', $alumnos->id)->paginate(8);
          return view('cita.index', ['alumnos'=>$alumnos, 'citas'=>$citas]);
        }
    //
}
