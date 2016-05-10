<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use View;

use App\Http\Requests;

class UsuarioController extends Controller
{
  public function index()
   {
      $users = User::all();
      return View::make('auth.index')->with('users', $users);
   }

   public function show()
    {
       return View::make('auth.register');
    }


}
