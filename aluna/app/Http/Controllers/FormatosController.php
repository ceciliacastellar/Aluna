<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\historiaini;
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

    public function saveini(Request $request, $id)
    {
      $alumnos = Alumno::find($id);
      $historiaini = new historiaini;
      $historiaini->diagnostico = $request->diagnostico;
      $historiaini->perfil = $request->perfil;
      $historiaini->remitido = $request->remitido;
      $historiaini->escolarizacion = $request->escolarizacion;
      $historiaini->subsidio = $request->subsidio;
      $historiaini->nivel = $request->nivel;
      $historiaini->contributivo = $request->contributivo;
      $historiaini->eps = $request->eps;
      $historiaini->cual_inicial = $request->cual_inicial;
      $historiaini->trabajo = $request->trabajo;
      $historiaini->edad_padre = $request->edad_padre;
      $historiaini->edad_madre = $request->edad_madre;
      $historiaini->trabajo_madre = $request->trabajo_madre;
      $historiaini->motivo_consulta = $request->motivo_consulta;
      $historiaini->inicio_curso_evolucion = $request->inicio_curso_evolucion;
      $historiaini->sosten_cabeza = $request->sosten_cabeza;
      $historiaini->gateo = $request->gateo;
      $historiaini->sedestacion = $request->sedestacion;
      $historiaini->camino = $request->camino;
      $historiaini->lateralidad = $request->lateralidad;
      $historiaini->descripcion_actual = $request->descripcion_actual;
      $historiaini->balbuceo = $request->balbuceo;
      $historiaini->primera_palabra = $request->primera_palabra;
      $historiaini->primera_frase = $request->primera_frase;
      $historiaini->desarrollo_personal = $request->desarrollo_personal;
      $historiaini->mapa_familiar = $request->mapa_familiar;
      $historiaini->descripcion_familiar = $request->descripcion_familiar;
      $historiaini->aspectos_psicosociales_ambientales = $request->aspectos_psicosociales_ambientales;
      $historiaini->duracion_embarazo = $request->duracion_embarazo;
      $historiaini->controles = $request->controles;
      $historiaini->aborto = $request->aborto;
      $historiaini->caidas = $request->caidas;
      $historiaini->consumo_alcohol = $request->consumo_alcohol;
      $historiaini->fumo = $request->fumo;
      $historiaini->enfermedades = $request->enfermedades;
      $historiaini->cuales_enfermedades = $request->cuales_enfermedades;
      $historiaini->tomo_medicamentos = $request->tomo_medicamentos;
      $historiaini->cuales_medicamentos = $request->cuales_medicamentos;
      $historiaini->observaciones = $request->observaciones;
      $historiaini->parto_vaginal = $request->parto_vaginal;
      $historiaini->cesaria = $request->cesaria;
      $historiaini->forceps = $request->forceps;
      $historiaini->desarrollo_parto = $request->desarrollo_parto;
      $historiaini->observaciones_parto = $request->observaciones_parto;
      $historiaini->convulsiones = $request->convulsiones;
      $historiaini->primera_crisis = $request->primera_crisis;
      $historiaini->ultima_crisis = $request->ultima_crisis;
      $historiaini->cirugias = $request->cirugias;
      $historiaini->cuales_cirugias = $request->cuales_cirugias;
      $historiaini->familiares = $request->familiares;
      $historiaini->cuales_familiares = $request->cuales_familiares;
      $historiaini->otros = $request->otros;
      $historiaini->cuales_otros = $request->cuales_otros;
      $historiaini->examenes_especializados = $request->examenes_especializados;
      $historiaini->pedagogicos = $request->pedagogicos;
      $historiaini->terapeuticos = $request->terapeuticos;
      $historiaini->farmacologicos = $request->farmacologicos;
      $historiaini->expectativas = $request->expectativas;
      $historiaini->plan_trabajo = $request->plan_trabajo;
      $historiaini->alumno_id = $request->alumno_id;
      $historiaini->save();
      return View::make('formatos.salud')->with('alumnos', $alumnos);

    }

    public function showhini($id)
      {
        $alumnos = Alumno::find($id);
        return View::make('formatos.showhini')->with('alumnos', $alumnos);
      }


    public function edit($id)
      {
            $users = User::find($id);
            return  View::make('auth.edit')->with('users', $users);
      }


}
