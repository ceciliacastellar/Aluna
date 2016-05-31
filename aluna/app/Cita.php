<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
        protected $table = 'cita';
        protected $fillable = ['nombre_medico', 'area', 'fecha', 'hora', 'motivo_consulta', 'descripcion', 'alumno_id'];

        public function alumno(){
          return $this->belongsTo('\App\Alumno');
        }


}
