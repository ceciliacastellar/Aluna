<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $fillable = ['nombres','apellidos','tipo_documento','numero_documento','fecha_nacimiento','departamento','municipio','edad','direccion_residencia',
    'nombre_persona','apellido_persona','parentesco',
    'nombre_padre','apellido_padre','tipo_documentop','numero_documentop','direccion_padre','tel_padre','dir_trabajop','tel_trabajop',
    'nombre_madre','apellido_madre','tipo_documentom','direccion_madre','tel_madre','dir_trabajom','tel_trabajom',
    'nombre_acudiente','apellido_acudiente','tipo_documentopa','numero_documentoa','direccion_acudiente','tel_acudiente','dir_trabajoa','tel_trabajoa',
    'nombre_emergencia','apellido_emergencia','direccion_emergencia','tel_emergencia','tel_trabajoe','fecha_matricula','convenio','modulo','programa'];

    public function cita(){
      return $this->hasMany('\App\Cita');
    }

    public function historiaini(){
      return $this->hasOne('\App\Historiaini', 'alumno_id', 'id');
    }

    public function fisioterapia(){
      return $this->hasOne('\App\Fisioterapia', 'alumno_id', 'id');
    }

    public function scopeName($query, $name)
    {
    //  dd("scope:" , $name);
    if (trim($name) != ""){
      $query->where(\DB::raw("CONCAT(nombres,' ',apellidos,' ',convenio,' ',numero_documento,' ',programa,' ',modulo)"),"LIKE", "%$name%");
    }
  }

}
