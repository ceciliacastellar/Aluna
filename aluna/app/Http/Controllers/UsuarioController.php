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
      $users = User::paginate(8);
      return View::make('auth.index')->with('users', $users);
   }

   public function show()
    {
       return View::make('auth.register');
    }

    public function destroy($id)
      {
            $user = User::find($id)->delete();
            $users = User::paginate(8);
            return View::make('auth.index')->with('users', $users);

      }


    public function edit($id)
      {
            $users = User::find($id);
            return  View::make('auth.edit')->with('users', $users);
      }


}
