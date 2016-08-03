<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\historiaini;
use App\Fisioterapia;
use App\Equinoterapia;
use Validator;
use View;

use App\Http\Requests;

class FormatosController extends Controller
{
  public function index($id)
    {
          $alumnos = Alumno::find($id);
          return  View::make('formatos.index')->with('alumnos', $alumnos);
    }

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

    public function fisioterapia($id)
      {
            $alumnos = Alumno::find($id);
            return  View::make('formatos.fisioterapia')->with('alumnos', $alumnos);
      }

      public function verfisio($id)
        {
              $alumnos = Alumno::find($id);
              return  View::make('formatos.verfisio')->with('alumnos', $alumnos);
        }

      public function equinoterapia($id)
        {
              $alumnos = Alumno::find($id);
              return  View::make('formatos.equinoterapia')->with('alumnos', $alumnos);
        }

        public function verequino($id)
          {
                $alumnos = Alumno::find($id);
                return  View::make('formatos.verequino')->with('alumnos', $alumnos);
          }

    public function storefisio(Request $request, $id)
      {
          $alumnos = Alumno::find($id);
          $fisioterapia = new fisioterapia;
          $fisioterapia->alerta = $request->alerta;
          $fisioterapia->orientado = $request->orientado;
          $fisioterapia->lenguaje = $request->lenguaje;
          $fisioterapia->sensopercepcion = $request->sensopercepcion;
          $fisioterapia->alteracion_pares_craneales = $request->alteracion_pares_craneales;
          $fisioterapia->cual_pares = $request->cual_pares;
          $fisioterapia->fuerza_muscular = $request->fuerza_muscular;
          $fisioterapia->trofismo = $request->trofismo;
          $fisioterapia->tono = $request->tono;
          $fisioterapia->distribucion = $request->distribucion;
          $fisioterapia->reflejos = $request->reflejos;
          $fisioterapia->signos = $request->signos;
          $fisioterapia->sensibilidad_superficial = $request->sensibilidad_superficial;
          $fisioterapia->sensibilidad_profunda = $request->sensibilidad_profunda;
          $fisioterapia->control_cabeza = $request->control_cabeza;
          $fisioterapia->control_tronco = $request->control_tronco;
          $fisioterapia->progresiones_posicionales = $request->progresiones_posicionales;
          $fisioterapia->rolados = $request->rolados;
          $fisioterapia->patrones_mov_selectivo = $request->patrones_mov_selectivo;
          $fisioterapia->reacciones = $request->reacciones;
          $fisioterapia->cuales_reaccioness = $request->cuales_reaccioness;
          $fisioterapia->desplaza = $request->desplaza;
          $fisioterapia->como_hace_desplaza = $request->como_hace_desplaza;
          $fisioterapia->pelvis = $request->pelvis;
          $fisioterapia->alteracion_pelvis = $request->alteracion_pelvis;
          $fisioterapia->cual_alteracion_pelvis = $request->cual_alteracion_pelvis;
          $fisioterapia->alteracion_postura = $request->alteracion_postura;
          $fisioterapia->cual_alteracion_postura = $request->cual_alteracion_postura;
          $fisioterapia->restricciones = $request->restricciones;
          $fisioterapia->donde_restricciones = $request->donde_restricciones;
          $fisioterapia->pruebas_especiales = $request->pruebas_especiales;
          $fisioterapia->cuales_pruebas_especiales = $request->cuales_pruebas_especiales;
          $fisioterapia->deformaciones = $request->deformaciones;
          $fisioterapia->cuales_deformaciones = $request->cuales_deformaciones;
          $fisioterapia->mid = $request->mid;
          $fisioterapia->mii = $request->mii;
          $fisioterapia->torsion_tibial = $request->torsion_tibial;
          $fisioterapia->torsion_tibial2 = $request->torsion_tibial2;
          $fisioterapia->patron_respiratorio = $request->patron_respiratorio;
          $fisioterapia->auscultacion = $request->auscultacion;
          $fisioterapia->camina_punta = $request->camina_punta;
          $fisioterapia->camina_talones = $request->camina_talones;
          $fisioterapia->camina_atras = $request->camina_atras;
          $fisioterapia->camina_lados = $request->camina_lados;
          $fisioterapia->camina_cuclillas = $request->camina_cuclillas;
          $fisioterapia->camina_equilibrio = $request->camina_equilibrio;
          $fisioterapia->sostiene_pie = $request->sostiene_pie;
          $fisioterapia->escaleras = $request->escaleras;
          $fisioterapia->rampa = $request->rampa;
          $fisioterapia->corre = $request->corre;
          $fisioterapia->salta = $request->salta;
          $fisioterapia->obstaculos = $request->obstaculos;
          $fisioterapia->lanza = $request->lanza;
          $fisioterapia->atrapa = $request->atrapa;
          $fisioterapia->patea = $request->patea;
          $fisioterapia->nivel = $request->nivel;
          $fisioterapia->fisioterapeutico = $request->fisioterapeutico;
          $fisioterapia->motor = $request->motor;
          $fisioterapia->recomendaciones1 = $request->recomendaciones1;
          $fisioterapia->recomendaciones2 = $request->recomendaciones2;
          $fisioterapia->recomendaciones3 = $request->recomendaciones3;
          $fisioterapia->alumno_id = $request->alumno_id;
          $fisioterapia->save();
          return View::make('formatos.salud')->with('alumnos', $alumnos);

        }

        public function storeequi(Request $request, $id)
          {
              $alumnos = Alumno::find($id);
              $equinoterapia = new equinoterapia;
              $equinoterapia->alerta = $request->alerta;
              $equinoterapia->orientado = $request->orientado;
              $equinoterapia->lenguaje = $request->lenguaje;
              $equinoterapia->sensopercepcion = $request->sensopercepcion;
              $equinoterapia->alteracion_pares_craneales = $request->alteracion_pares_craneales;
              $equinoterapia->cual_pares = $request->cual_pares;
              $equinoterapia->fuerza_muscular = $request->fuerza_muscular;
              $equinoterapia->trofismo = $request->trofismo;
              $equinoterapia->tono = $request->tono;
              $equinoterapia->distribucion = $request->distribucion;
              $equinoterapia->reflejos = $request->reflejos;
              $equinoterapia->signos = $request->signos;
              $equinoterapia->sensibilidad_superficial = $request->sensibilidad_superficial;
              $equinoterapia->sensibilidad_profunda = $request->sensibilidad_profunda;
              $equinoterapia->control_cabeza = $request->control_cabeza;
              $equinoterapia->control_tronco = $request->control_tronco;
              $equinoterapia->progresiones_posicionales = $request->progresiones_posicionales;
              $equinoterapia->rolados = $request->rolados;
              $equinoterapia->patrones_mov_selectivo = $request->patrones_mov_selectivo;
              $equinoterapia->reacciones = $request->reacciones;
              $equinoterapia->cuales_reaccioness = $request->cuales_reaccioness;
              $equinoterapia->desplaza = $request->desplaza;
              $equinoterapia->como_hace_desplaza = $request->como_hace_desplaza;
              $equinoterapia->pelvis = $request->pelvis;
              $equinoterapia->alteracion_pelvis = $request->alteracion_pelvis;
              $equinoterapia->cual_alteracion_pelvis = $request->cual_alteracion_pelvis;
              $equinoterapia->alteracion_postura = $request->alteracion_postura;
              $equinoterapia->cual_alteracion_postura = $request->cual_alteracion_postura;
              $equinoterapia->restricciones = $request->restricciones;
              $equinoterapia->donde_restricciones = $request->donde_restricciones;
              $equinoterapia->pruebas_especiales = $request->pruebas_especiales;
              $equinoterapia->cuales_pruebas_especiales = $request->cuales_pruebas_especiales;
              $equinoterapia->deformaciones = $request->deformaciones;
              $equinoterapia->cuales_deformaciones = $request->cuales_deformaciones;
              $equinoterapia->mid = $request->mid;
              $equinoterapia->mii = $request->mii;
              $equinoterapia->torsion_tibial = $request->torsion_tibial;
              $equinoterapia->torsion_tibial2 = $request->torsion_tibial2;
              $equinoterapia->patron_respiratorio = $request->patron_respiratorio;
              $equinoterapia->auscultacion = $request->auscultacion;
              $equinoterapia->camina_punta = $request->camina_punta;
              $equinoterapia->camina_talones = $request->camina_talones;
              $equinoterapia->camina_atras = $request->camina_atras;
              $equinoterapia->camina_lados = $request->camina_lados;
              $equinoterapia->camina_cuclillas = $request->camina_cuclillas;
              $equinoterapia->camina_equilibrio = $request->camina_equilibrio;
              $equinoterapia->sostiene_pie = $request->sostiene_pie;
              $equinoterapia->escaleras = $request->escaleras;
              $equinoterapia->rampa = $request->rampa;
              $equinoterapia->corre = $request->corre;
              $equinoterapia->salta = $request->salta;
              $equinoterapia->obstaculos = $request->obstaculos;
              $equinoterapia->lanza = $request->lanza;
              $equinoterapia->atrapa = $request->atrapa;
              $equinoterapia->patea = $request->patea;
              $equinoterapia->nivel = $request->nivel;
              $equinoterapia->fisioterapeutico = $request->fisioterapeutico;
              $equinoterapia->motor = $request->motor;
              $equinoterapia->recomendaciones1 = $request->recomendaciones1;
              $equinoterapia->recomendaciones2 = $request->recomendaciones2;
              $equinoterapia->recomendaciones3 = $request->recomendaciones3;
              $equinoterapia->alumno_id = $request->alumno_id;
              $equinoterapia->save();
              return View::make('formatos.salud')->with('alumnos', $alumnos);

            }





    /*public function preuba($id)
      {
            $alumnos = Alumno::find($id);
            return  View::make('')->with('alumnos', $alumnos);
      }*/


}
