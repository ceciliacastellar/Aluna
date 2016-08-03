<?php
use App\Role;
use App\Permission;
use App\User;

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

Route::get('/start', function()
{

    $administrativo = new Role();
    $administrativo->name = 'administrativo';
    $administrativo->display_name = 'usuario para personal administrativo';
    $administrativo->save();

    $salud = new Role();
    $salud->name = 'salud';
    $salud->display_name = 'usuario para personal de salud';
    $salud->save();

    $educador = new Role();
    $educador->name = 'educador';
    $educador->display_name = 'usuario para docentes';
    $educador->save();

    $user = User::where('name','=','administrativo')->first();
    $user->attachRole($administrativo);

    $user = User::where('name','=','salud')->first();
    $user->attachRole($salud);

    $user = User::where('name','=','educador')->first();
    $user->attachRole($educador);

    $read = new Permission();
    $read->name = 'can_read';
    $read->display_name = 'Can Read Data';
    $read->save();

    $edit = new Permission();
    $edit->name = 'can_edit';
    $edit->display_name = 'Can Edit Data';
    $edit->save();

    $administrativo->attachPermission($read);




    // print_r($userRole);
    // die();
    return 'Woohoo!';
});




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

Route::group(['middleware' => 'auth'], function(){
// Registration routes...
Route::get('auth/register', ['middleware' => 'role:administrativo',
  'uses' => 'UsuarioController@show',
  'as' => 'auth/register'
]);

Route::get('register', [
    'uses'=> 'Auth\AuthController@getRegister',
  'as' => 'register'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');
});

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
Route::post('reset', 'Auth\PasswordController@postReset');*/


/*Route::get('principal', function () {
    return view('principal');
});*/





Route::group(['middleware' => 'auth'], function(){
/**
                    * Rutas para alumnos
 */

Route::resource('alumno', 'AlumnoController',
                ['except' => ['create']]);
Route::group(['middleware' => ['role:administrativo']], function() {
Route::get('create', 'AlumnoController@create');
});
//                    Rutas para Citas medicas

Route::get('method/{alumno}',['middleware' => 'role:salud',
    'uses' => 'AlumnoController@method',
    'as' => 'cita.index'
 ]);
Route::get('cita/{alumno}', ['middleware' => 'role:salud',
  'uses' => 'CitaController@seecreate',
  'as' => 'cita.seecreate'
]);

Route::group(['middleware' => ['role:salud']], function() {
Route::resource('cita', 'CitaController',
                ['except' => ['index']]);

});
Route::get('auth/index', ['middleware' => 'role:administrativo',
  'uses' => 'UsuarioController@index',
  'as' => 'auth/index'
]);

Route::get('auth/{user}', [
  'uses' => 'UsuarioController@edit',
  'as' => 'auth.edit'
]);



Route::get('pdf/invoice',[
  'uses'=> 'PdfController@invoice',
  'as' => 'pdf.invoice'
]);

//  Rutas para formatos de salud
Route::get('formatos/{alumno}', ['middleware' => 'role:salud',
  'uses' => 'FormatosController@salud',
  'as' => 'formatos.salud'
]);

Route::get('formatos/hisotriaini/{alumno}', ['middleware' => 'role:salud',
  'uses' => 'FormatosController@createini',
  'as' => 'formatos.historiaini'
]);

Route::post('formatos.saveini/{alumno}', ['middleware' => 'role:salud',
  'uses' => 'FormatosController@saveini',
  'as' => 'formatos.saveini'
]);


Route::get('formatos.showhini/{alumno}', ['middleware' => 'role:salud',
'uses' => 'FormatosController@showhini',
'as' => 'formatos.showhini'
]);

Route::get('formatos.index/{alumno}', ['middleware' => 'role:salud',
'uses' => 'FormatosController@index',
'as' => 'formatos.index'
]);

Route::get('formatos.fisioterapia/{alumno}', ['middleware' => 'role:salud',
'uses' => 'FormatosController@fisioterapia',
'as' => 'formatos.fisioterapia'
]);

Route::post('formatos.storefisio/{alumno}', ['middleware' => 'role:salud',
  'uses' => 'FormatosController@storefisio',
  'as' => 'formatos.storefisio'
]);

Route::get('formatos.verfisio/{alumno}', ['middleware' => 'role:salud',
'uses' => 'FormatosController@verfisio',
'as' => 'formatos.verfisio'
]);

Route::get('formatos.equinoterapia/{alumno}', ['middleware' => 'role:salud',
'uses' => 'FormatosController@equinoterapia',
'as' => 'formatos.equinoterapia'
]);

Route::post('formatos.storeequi/{alumno}', ['middleware' => 'role:salud',
  'uses' => 'FormatosController@storeequi',
  'as' => 'formatos.storeequi'
]);

Route::get('formatos.verequino/{alumno}', ['middleware' => 'role:salud',
'uses' => 'FormatosController@verequino',
'as' => 'formatos.verequino'
]);





});
/*Route::post('auth/{user}', [
  'uses' => 'UsuarioController@update',
  'as' => 'auth.update'
]);*/


/*Route::get('citas.create', function () {
    return view('citas.create');
});*/
