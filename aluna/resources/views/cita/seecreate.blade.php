@extends('layout')

@section('content')


    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
              <form method="POST" action="{{ route('cita.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Citas Medicas</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="indexsalud.html">Principal</a></li>
                        <li><i class="fa fa-stethoscope"></i><a href="indexsalud.html">Citas medicas</a></li>

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
                              <p><span>NOMBRES</span>: {{ $alumnos->nombres }} </p>
                        </div>

                        <div class="bio-row">
                            <p><span>APELLIDOS</span>: {{ $alumnos->apellidos }} </p>
                        </div>

                            <div class="bio-row">
                                    <p><span>EDAD</span>: {{ $alumnos->edad }} </p>
                                </div>


                            <div class="bio-row">
                                    <p><span>TIPO DE DOCUMENTO</span>: {{ $alumnos->tipo_documento }} </p>
                                </div>

                                <div class="bio-row">
                                      <p><span>NUMERO DE DOCUMENTO</span>: {{ $alumnos->numero_documento }} </p>
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
               </div>

            </div>

               <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Datos de la cita
                    </div>

                    <div class="panel-body">
                        <div class="form">

                        <div class="form-group bio-row">
                            <div class="input-group col-md-9">
                                <label for="nombre_medico" class="control-label">NOMBRE DEL MEDICO O ESPECIALISTA</label>
                                <span class=""><i class=""></i></span>
                                <input type="nombre_espcialista" name="nombre_medico" class="form-control" placeholder="Nombre del especialista">
                            </div>
                        </div>



                        <div class="form-group bio-row">
                            <div class="input-group col-md-9">
                                <label for="area" class="control-label">AREA O SECCION</label>
                                <span class=""><i class=""></i></span>
                                <input type="area" name="area" class="form-control" placeholder="Area o seccion">

                            </div>
                        </div>

                            <div class="form-group bio-row">
                                <div class="input-group col-xs-3">
                                      <label for="fecha"class="control-label">FECHA</label>
                                       <span class=""><i class=""></i></span>
                                       <input type="date" name="fecha" class="form-control" name="dd/mm/aa">
                                </div>

                                    <div class="input-group col-xs-3">
                                        <label for="hora" class="control-label" >HORA </label>
                                        <span class=""><i class=""></i></span>
                                        <input type="time" name="hora" class=" form-control col-xs-5" name="hora" placeholder="12:00 pm">
                                    </div>
                                </div>


                            </div>

                            <div class="form-group bio-row">
                                    <div class="input-group col-md-9">
                                        <label for="motivo_consulta" class="control-label" >MOTIVO DE LA CONSULTA</label>
                                        <span class=""><i class=""></i></span>
                                        <input type="motivo"  class=" form-control" name="motivo_consulta" placeholder="Motivo de la consulta">
                                    </div>
                            </div>

                            <div class="form-group bio-row">
                                    <div class="input-group col-lg-10">
                                        <label for="descripcion" class="control-label" >DESCRIPCION </label>
                                        <span class=""><i class=""></i></span>
                                        <textarea class="form-control" name="descripcion" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group bio-row">
                                      <label for="alumno_id" class="control-label col-sm-2">ID<span class="required"></span></label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="alumno_id"  value="{{ $alumnos->id }}"  minlength="5" type="text" required />
                                </div>
                                </div>


                    </div>

                </div>
                    <div class="btn">

                        <button type="submit" class="btn btn-info" >Guardar</button>
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
    </section>
    <!--main content end-->
</section>
@endsection
