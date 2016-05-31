<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]


);

Route::get('login', [
      'uses' => 'Auth\AuthController@getLogin',
      'as' => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
  'uses' => 'Auth\AuthController@getLogout',
  'as' => 'logout'
]);
Route::get('principal', [ 'middleware' => 'auth',
        'uses' => 'HomeController@principal',
        'as' => 'principal'
    ]


);
// Registration routes...
Route::get('auth/register', ['middleware' => 'auth',
  'uses' => 'UsuarioController@show',
  'as' => 'auth/register'
]);

Route::get('register', [
    'uses'=> 'Auth\AuthController@getRegister',
  'as' => 'register'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
/*Route::get('password', 'Auth\PasswordController@getEmail');
Route::post('password', 'Auth\PasswordController@postEmail');
Route::get('changepassword', ['middleware' => 'auth',
      'uses' => 'changePassword@index',
      'as' => 'changepassword'
  ]);
Route::post('changepassword', 'changePassword@postResetPassword');

// Password reset routes...
Route::get('reset/{token}', 'Auth\PasswordController@getReset');
Route::post('reset', 'Auth\PasswordController@postReset');
Route::post('nuevo','AlumnoController@save');*/
/*Route::get('principal', function () {
    return view('principal');
});*/







/**
                    * Rutas para alumnos
 */
Route::resource('alumno', 'AlumnoController');


//                    Rutas para Citas medicas

Route::get('cita/{alumno}', [
  'uses' => 'CitaController@seecreate',
  'as' => 'cita.seecreate'
]);


Route::resource('cita', 'CitaController');


Route::get('auth/index', ['middleware' => 'auth',
  'uses' => 'UsuarioController@index',
  'as' => 'auth/index'
]);

Route::get('auth/{user}', [
  'uses' => 'UsuarioController@edit',
  'as' => 'auth.edit'
]);

/*Route::post('auth/{user}', [
  'uses' => 'UsuarioController@update',
  'as' => 'auth.update'
]);*/


/*Route::get('citas.create', function () {
    return view('citas.create');
});*/
