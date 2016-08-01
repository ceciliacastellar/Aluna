<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Historiaini extends Model
{
  protected $table = 'historiaini';
  protected $fillable = ['diagnostico','perfil','remitido','escolarizacion','subsidio','nivel','contributivo','eps','cual_inicial','trabajo','edad_padre','edad_madre','trabajo_madre','motivo_consulta',
  'inicio_curso_evolucion','sosten_cabeza','gateo','sedestacion','camino','lateralidad','descripcion_actual','balbuceo','primera_palabra','primera_frase','desarrollo_personal','mapa_familiar','aspectos_psicosociales_ambientales',
  'duracion_embarazo','controles','aborto','caidas','consumo_alcohol','fumo','enfermedades','cuales_enfermedades','tomo_medicamentos','cuales_medicamentos','observaciones','parto_vaginal','cesaria','forceps','desarrollo_parto','observaciones_parto','convulsiones','primera_crisis',
   'ultima_crisis','cirugias','cuales_cirugias','familiares','cuales_familiares','otros','cuales_otros','examenes_especializados','pedagogicos','terapeuticos','farmacologicos','expectativas','plan_trabajo','alumno_id'];

    public function alumno(){
        return $this->belongsTo('\App\Alumno', 'alumno_id', 'id');
    }
}
