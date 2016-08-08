<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Psicologia extends Model
{
  protected $table = 'psicologia';
  protected $fillable = ['porte_actitud','conciencia','orientacion','atencion','memoria','inteligencia','psicomotora','afecto','pensamiento','lenguaje_comunicacion',
                         'sensopercepcion','juicio','prospeccion','introspeccion','procesos_cognitivos','conocimientos_academicos','socializacion_juego','sexualidad_desarrollo',
                         'repertorio_conductal','recomendaciones'];

  public function alumno(){
    return $this->belongsTo('\App\Alumno', 'alumno_id', 'id');
  }



}
