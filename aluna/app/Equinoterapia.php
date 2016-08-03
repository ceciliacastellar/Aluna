<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Equinoterapia extends Model
{
  protected $table = 'equinoterapia';
  protected $fillable = ['alerta','orientado','lenguaje','sensopercepcion','alteracion_pares_craneales','cual_pares','fuerza_muscular' ,'trofismo','tono','distribucion','reflejos','signos','sensibilidad_superficial','sensibilidad_profunda','control_cabeza','control_tronco','progresiones_posicionales','rolados',
                          'patrones_mov_selectivo', 'reacciones','cuales_reaccioness','desplaza' ,'como_hace_desplaza','pelvis','alteracion_pelvis','cual_alteracion_pelvis','alteracion_postura','cual_alteracion_postura', 'restricciones','donde_restricciones','pruebas_especiales','cuales_pruebas_especiales','deformaciones','cuales_deformaciones',
                          'mid','mii','torsion_tibial','torsion_tibial2','patron_respiratorio','auscultacion','camina_punta','camina_talones','camina_atras','camina_lados','camina_cuclillas','camina_equilibrio','sostiene_pie','escaleras','rampa','corre','salta','obstaculos','lanza','atrapa','patea','nivel',
                          'fisioterapeutico','motor','recomendaciones1','recomendaciones2','recomendaciones3','alumno_id'];

  public function alumno(){
    return $this->belongsTo('\App\Alumno', 'alumno_id', 'id');
  }



}
