<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Alumno;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        Excel::create('lista alumnos', function($excel) {

            $excel->sheet('alumnos', function($sheet) {

                $alumnos = Alumno::select('id', 'tipo_documento', 'numero_documento', 'nombres', 'apellidos', 'edad', 'convenio', 'fisio' , 'equino', 'fono', 'psico', 'terapia_acuatica' , 'terapia_ocupacional' , 'talleres')->get();
                $sheet->fromArray($alumnos);

            });
        })->export('xls');

	}
}
