@extends('layout')

@section('content')


    <!--main content start-->
<div class="contenido">
            <!--overview start-->
            <div class="row">

                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Cita Medica</h3>
                    <ol class="breadcrumb">
                      <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
                      <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
                      <li><i class="fa fa-user-md"></i> <a href="{{ route('formatos.salud', $alumnos)}}">Area de salud de: {{ $alumnos->nombres }}{{ $alumnos->apellidos }}</a></li>
                      <li><i class="fa fa-th-list"></i><a href="{{ route('cita.index', $alumnos)}}">Listado de citas</a></li>
                      <li><i class="fa fa-th-list"></i>Cita de {{ $citas->alumno->nombres}} {{ $citas->alumno->apellidos }} </li>

                    </ol>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Datos del paciente
                    </div>

                    <div class="panel-body">
                        <div class="form">

                        <div class="bio-row">
                              <p><span>NOMBRES</span>: {{ $citas->alumno->nombres}} </p>
                        </div>

                        <div class="bio-row">
                            <p><span>APELLIDOS</span>: {{ $citas->alumno->apellidos }} </p>
                        </div>

                            <div class="bio-row">
                                    <p><span>EDAD</span>: {{ $citas->alumno->edad }} </p>
                                </div>


                            <div class="bio-row">
                                    <p><span>TIPO DE DOCUMENTO</span>: {{ $citas->alumno->tipo_documento }} </p>
                                </div>

                                <div class="bio-row">
                                      <p><span>NUMERO DE DOCUMENTO</span>: {{ $citas->alumno->numero_documento }} </p>
                                    </div>


                            </div>







                          <!--   <div class=" form-group col-md-5">

                                <div class="input-group">
                                    <label for="tipo_documento" class="control-label">�ACUDIENTE?</label>
                                    <span class=""><i class=" "></i></span>


                                    <SELECT name="color" class="form-control" onchange="if(this.value=='Con') {document.getElementById('nombre_acudiente').disabled = false} else{document.getElementById('nombre_acudiente').disabled = true} " >
                                            <OPTION selected>Ninguno</OPTION>
                                            <OPTION value="Sin">Sin acudiente</OPTION>
                                            <OPTION value="Con">Con acudiente</OPTION>
                                        </SELECT>
                                </div>

                            </div>

                            <div class="form-group col-md-5">
                                <div class="input-group col-md-9">
                                    <label for="nombre_acudiente" class="control-label">NOMBRES DEL ACUDIENTE</label>
                                <span class=""><i class=""></i></span>
                                <input type="text" id="nombre_acudiente" class=" form-control col-xs-5"  name="acudiente" size="12" value="Nombre del acudiente" disabled>
                            </div>-->
                        </div>





                          </div>

                </div>
                </div>




               <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Datos de la cita
                    </div>

                    <div class="panel-body">


                        <div class="bio-row">
                            <p><span>NOMBRE DEL MEDICO O ESPECIALISTA</span>: {{ $citas->nombre_medico }}</p>
                        </div>



                        <div class="bio-row">
                            <p><span>AREA O SECCION</span>: {{ $citas->area }}</p>
                        </div>

                        <div class="bio-row">
                            <p><span>FECHA</span>: {{ $citas->fecha }}</p>
                        </div>

                        <div class="bio-row">
                            <p><span>HORA</span>: {{ $citas->hora }}</p>
                        </div>




                            <div class="bio-row">
                                <p><span>MOTIVO DE LA CONSULTA</span>: {{ $citas->motivo_consulta }}</p>
                            </div>

                            <div class="bio-row">
                                <p><span>DESCRIPCION</span>: {{ $citas->descripcion }}</p>
                            </div>
                    </div>

                </div>

                </div>










                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
            </div>
            </div>

            </div>

            </div>
            <!-- project team & activity end -->

        </section>
    </div>
@endsection
