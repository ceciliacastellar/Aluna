<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
  protected $table = 'roles';
  protected $fillable = ['name', 'display_name', 'description'];


public function user(){
  return $this->belongsToMany('App\User');
  }

public function permissions(){
  return $this->belongsToMany('App\Permissions');
  }

}
