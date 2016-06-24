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

    $vo = new Role();
    $vo->name = 'educador';
    $vo->display_name = 'usuario para docentes';
    $vo->save();

    $user = User::where('name','=','Javier')->first();
    $user->attachRole($administrativo);

    $user = User::where('name','=','Cecilia')->first();
    $user->attachRole($salud);

    $user = User::where('name','=','Javier')->first();
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





Route::group(['middleware' => 'auth'], function(){
/**
                    * Rutas para alumnos
 */
Route::get('method/{alumno}',[
    'uses' => 'AlumnoController@method',
    'as' => 'cita.index'
 ]);
Route::resource('alumno', 'AlumnoController');
});
//                    Rutas para Citas medicas
Route::group(['middleware' => 'auth'], function(){
Route::get('cita/{alumno}', [
  'uses' => 'CitaController@seecreate',
  'as' => 'cita.seecreate'
]);
Route::resource('cita', 'CitaController',
                ['except' => ['index']]);
});
//Route::group(['prefix' => 'administrativo', 'middleware' => ['role:administrativo']], function() {

Route::get('auth/index', ['middleware' => 'role:administrativo',
  'uses' => 'UsuarioController@index',
  'as' => 'auth/index'
]);
//});
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
