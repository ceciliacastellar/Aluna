@extends('layout')


@section('content')

<section id="container" class="">
  @include('partials/errors')
<form method="PATCH" action="{{ route('alumno/index', $alumnos->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token()}}">

  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> FUNDACIÓN ALUNA</h3>
            <ol class="breadcrumb">

              <li><i class="fa fa-home"></i><a href="principal">{{ trans('pagination.home') }}</a></li>
              <li><i class="icon_document_alt"></i>Ficha de matricula</li>
              <li><i class="fa fa-files-o"></i>Información del niño, niña o joven</li>
            </ol>
          </div>
        </div>
    <!-- -------------------------------------- LOS NOMBRES DE LOS FORMULARIOS ------------------------------------------ -->


    <!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
    <div class="row">

                         <div class="col-lg-12">

                      <section class="panel">
                            <header class="panel-heading tab-bg-info">
                                <ul class="nav nav-tabs">
                                    <li class="active panel panel-primary">
                                        <a data-toggle="tab" href="#alumno" class="alumno">
                                            <i class="icon-home"></i>
                                            Alumno
                                        </a>
                                    </li>
                                    <li class="panel panel-info">
                                        <a data-toggle="tab" href="#padres" class="alumno">
                                            <i class="icon-user"></i>
                                            Padres
                                        </a>
                                    </li>
                                    <li class="panel panel-warning">
                                        <a data-toggle="tab" href="#acudiente" class="alumno">
                                            <i class="icon-envelope"></i>
                                            Acudiente
                                        </a>
                                    </li>

                                    <li class="panel panel-danger">
                                        <a data-toggle="tab" href="#emergencia" class="alumno">
                                            <i class="icon-envelope"></i>
                                            Emergencia
                                        </a>
                                    </li>
                                    <li class="panel panel-success">
                                        <a data-toggle="tab" href="#fundacion" class="alumno">
                                            <i class="icon-envelope"></i>
                                            Fundación
                                        </a>

                                    </li>
                                </ul>

    <!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
    <!-- --------------------------------------- ALUMNO --------------------------------------------------- -->
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="alumno" class="tab-pane active">
                                        <div class="alumno">
                                             <div class="row">
                                  <div class="col-lg-12">
                                      <section class="panel">

                                          <header class="panel-heading">
                                              Información del niño, niña o joven
                                          </header>
                                          <div class="panel-body">
                                              <div class="form">
                                                  <form class="form-horizontal" method="get">
                <!-- ------------------------------------- SUBIR IMAGEN -------------------------------------------------- -->
                           <!--<div class="form-group">
                                      <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                         </div>
                        <div class="form-group">
                                  <button class="btn btn-primary" type="submit">Subir</button>
                                  <button class="btn btn-default" type="button">Reset</button>
                         </div>-->

            <!-- ------------------------------------- SUBIR IMAGEN -------------------------------------------------- -->




    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                                      <div class="form-group ">
                                                           <label for="nombres" class="control-label col-sm-2">NOMBRES <span class="required">*</span></label>
                                                           <div class="col-sm-10">

                                                               <input class="form-control" name="nombres"  value="{{ $alumnos->nombres }}"  minlength="5" type="text" required />

                                                           </div>
                                                       </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                                          <div class="form-group ">
                                                              <label for="apellidos" class="control-label col-sm-2">APELLIDOS <span class="required">*</span></label>
                                                              <div class="col-sm-10">
                                                                  <input class="form-control" name="apellidos" value="{{ $alumnos->apellidos }}"  minlength="5" type="text" required />
                                                              </div>
                                                          </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

                                                          <div class="form-group">
                                                            <label for="tipo_documento" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                                              <div class="col-xs-3">
                                                                  <select class="form-control" name="tipo_documento" >
                                                                      <option value= "{{ $alumnos->tipo_documento }}">{{ $alumnos->tipo_documento }}</option>
                                                                      <option value= "R.C" >R.C.</option>
                                                                      <option value= "T.I" >T.I.</option>
                                                                      <option value= "C.C" >C.C.</option>
                                                                  </select>
                                                              </div>

                                                              <label for="numero_documento" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                                              <div class="col-lg-3">
                                                                <input class="form-control"  name="numero_documento" value="{{ $alumnos->numero_documento }}" minlength="5" type="text" required />
                                                              </div>

                                                          </div>






    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
              <!-- ------------------------------------------ -------- PEDIR FECHA DE NACIMIENTO ------------------------------------------------------ -->
              <div class="form-group ">
                   <label for="fecha_nacimiento" class="control-label col-lg-2">FECHA DE NACIMIENTO<span class="required">*</span></label>
                   <div class="col-lg-10">
                       <input class="form-control"  name="fecha_nacimiento" value="{{ $alumnos->fecha_nacimiento }}" placeholder="Dia/Mes/Año" minlength="5" type="text" required />
                   </div>
               </div>
    <!-- -------------------------------------------------- PEDIR FECHA DE NACIMIENTO ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR LUGAR DE NACIMIENTO ------------------------------------------------------ -->
                                                      <div class="form-group">
                                                        <label for="cname" class="control-label col-xs-3">LUGAR DE NACIMIENTO:<span class="required">*</span> </label>
                                                          <div class="col-xs-3">
                                                            <div class="form-group ">

                                                                 <div class="col-lg-10">
                                                                     <input class="form-control" name="departamento" value="{{ $alumnos->departamento }}" placeholder="Departamento" minlength="5" type="text" required />
                                                                 </div>
                                                             </div>
                                                          </div>
                                                          <div class="col-xs-3">
                                                            <div class="form-group ">

                                                                 <div class="col-lg-10">
                                                                     <input class="form-control" name="municipio" value="{{ $alumnos->municipio }}"placeholder="Municipio" minlength="5" type="text" required />
                                                                 </div>
                                                             </div>
                                                          </div>

                                                      </div>

    <!-- -------------------------------------------------- PEDIR LUGAR DE NACIMIENTO ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR EDAD DEL ALUMNO ------------------------------------------------------ -->


                                                      <div class="form-group">
                                                        <label for="edad" class="control-label col-lg-2">EDAD:<span class="required">*</span></label>
                                                        <div class="col-sm-2">
                                                        <input class="form-control" name="edad" min="0" max="60" value="{{ $alumnos->edad }}" onkeyup="if(this.value>60){this.value='60';}else if(this.value<0){this.value='0';}">
                                                      </div>
                                                          <!--<div class="col-xs-3">
                                                              <select class="form-control" name="edad">
                                                                <option value= "1" >1</option>
                                                                <option value= "2" >2</option>
                                                                <option value= "3" >3</option>
                                                                <option value= "4" >4</option>
                                                                <option value= "5" >5</option>
                                                                <option value= "6" >6</option>
                                                                <option value= "7" >7</option>
                                                                <option value= "8" >8</option>
                                                                <option value= "9" >9</option>
                                                                <option value= "10" >0</option>
                                                                <option value= "11" >1</option>
                                                                <option value= "12" >2</option>
                                                                <option value= "13" >3</option>
                                                                <option value= "14" >4</option>
                                                                <option value= "15" >5</option>
                                                                <option value= "16" >6</option>
                                                                <option value= "17" >7</option>
                                                                <option value= "18" >8</option>
                                                                <option value= "19" >9</option>
                                                                <option value= "20" >0</option>
                                                                <option value= "21" >1</option>
                                                                <option value= "22" >2</option>
                                                                <option value= "23" >3</option>
                                                                <option value= "24" >4</option>
                                                                <option value= "25" >5</option>
                                                                <option value= "26" >6</option>
                                                                <option value= "27" >7</option>
                                                                <option value= "28" >8</option>
                                                                <option value= "29" >9</option>
                                                                <option value= "30" >3</option>
                                                                <option value= "31" >1</option>
                                                                <option value= "32" >2</option>
                                                                <option value= "33" >3</option>


                                                              </select>
                                                          </div>-->

                                                      </div>

    <!-- -------------------------------------------------- PEDIR EDAD DEL ALUMNO ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                                      <div class="form-group ">
                                                        <label for="direccion_residencia" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" name="direccion_residencia" value="{{ $alumnos->direccion_residencia }}" type="text" />
                                                        </div>
                                                    </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
    <!--

                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="cemail" type="email" name="email" required />
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label for="curl" class="control-label col-lg-2">Website</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="curl" type="url" name="url" />
                                            </div>
                                        </div>



                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                            </div>
                                        </div> -->


                                                  <div class="form-group">

                                                  </div>
                                              </form>
                                          </div>

                                      </div>
                                  </section>
                              </div>
                             </div>
                                            <div class="row">
                          <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Información de la persona con quien vive
                                  </header>
                                  <div class="panel-body">
                                      <div class="form">

    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="nombre_persona" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="nombre_persona" value="{{ $alumnos->nombre_persona }}"  type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="apellido_persona" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="apellido_persona" value="{{ $alumnos->apellido_persona }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PARENTESCO ------------------------------------------------------ -->
                                         <div class="form-group">
                                              <label for="parentesco" class="control-label col-lg-2">PARENTESCO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="parentesco" value="{{ $alumnos->parentesco }}" minlength="3" type="text" required />
                                            </div>

                                           </div>


    <!-- -------------------------------------------------- PARENTESCO ------------------------------------------------------ -->




                                        <div class="form-group">

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>


                                        </div>
                                    </div>
    <!-- --------------------------------------- ALUMNO --------------------------------------------------- -->
    <!--  ------------------------------------- PADRES------------------------------------------------------ -->
                              <div id="padres" class="tab-pane">
                                      <section class="panel">

        <!-- ------------------------------------------------  FORMULARIOS 3 -------------------------------------------------- -->
                <!-- Form validations -->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                            <header class="panel-heading">
                                Información del padre
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <!--<form class="form-horizontal" method="get" >-->
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="nombre_padre" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="nombre_padre" value="{{ $alumnos->nombre_padre }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="apellido_padre" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="apellido_padre" value="{{ $alumnos->apellido_padre }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
                                        <div class="form-group">
                                          <label for="tipo_documentop" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                          <div class="col-xs-3">
                                            <select class="form-control" name="tipo_documentop">
                                              <option value= "{{ $alumnos->tipo_documentop }}">{{ $alumnos->tipo_documentop }}</option>
                                              <option value= "R.C" >R.C.</option>
                                              <option value= "T.I" >T.I.</option>
                                              <option value= "C.C" >C.C.</option>
                                            </select>
                                          </div>

                                              <label for="numero_documentop" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                            <div class="col-lg-3">
                                                <input class="form-control" name="numero_documentop" value="{{ $alumnos->numero_documentop }}" minlength="5" type="text" required />
                                            </div>
                                          </div>





    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="direccion_padre" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" name="direccion_padre" value="{{ $alumnos->direccion_padre }}" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_padre" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" type="tel_padre" name="tel_padre" value="{{ $alumnos->tel_padre }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN DEL TRABAJO ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="dir_trabajop" class="control-label col-lg-2">DIRECCIÓN DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" type="dir_trabajop" name="dir_trabajop" value="{{ $alumnos->dir_trabajop }}" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN DEL TRABAJO --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_trabajop" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="tel_trabajop" value="{{ $alumnos->tel_trabajop }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">

                                        </div>
                                    </form>
                                </div>


                            </div>
                        </section>
                        </div>
                        </div>





    <!-- ------------------------------------------------------  FORMULARIOS 3 ------------------------------------------------------------- -->
    <!-- ------------------------------------------------------  FORMULARIOS 4 ------------------------------------------------------------ -->
                <!-- Form validations -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Información de la madre
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <!--<form class="form-validate form-horizontal" id="feedback_form" method="get" action="">-->
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="nombre_madre" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" type="nombre_madre" name="nombre_madre" value="{{ $alumnos->nombre_madre }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="apellido_madre" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="apellido_madre" value="{{ $alumnos->apellido_madre }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
                                           <div class="form-group">
                                            <label for="tipo_documentom" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">
                                                  <select class="form-control" name="tipo_documentom">
                                                    <option value= "{{ $alumnos->tipo_documentom }}">{{ $alumnos->tipo_documentom }}</option>
                                                    <option value= "T.I" >T.I.</option>
                                                    <option value= "C.C" >C.C.</option>
                                                  </select>
                                              </div>

                                              <label for="numero_documentom" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                            <div class="col-lg-3">
                                                <input class="form-control" name="numero_documentom" value="{{ $alumnos->numero_documentom }}" minlength="5" type="text" required />
                                            </div>

                                          </div>




    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="direccion_madre" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" name="direccion_madre" value="{{ $alumnos->direccion_madre }}" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_madre" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" type="tel_madre" name="tel_madre" value="{{ $alumnos->tel_madre }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN DEL TRABAJO ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="dir_trabajom" class="control-label col-lg-2">DIRECCIÓN DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" type="dir_trabajom" value="{{ $alumnos->dir_trabajom }}" name="dir_trabajom" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN DEL TRABAJO --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_trabajom" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="tel_trabajom" value="{{ $alumnos->tel_trabajom }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>


    <!-- -----------------------------------------------------------  FORMULARIOS 4 ----------------------------------------------------------------- -->



                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>

    <!-- --------------------------------------- PADRES----------------------------------------------------- -->
    <!--  -------------------------------------- ACUDIENTE ------------------------------------------------- -->
                                  <div id="acudiente" class="tab-pane">
                                      <section class="panel">

                                          <!-- -----------------------------------------------------------  FORMULARIOS 5 ----------------------------------------------------------------- -->
                <!-- Form validations -->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Información del acudiente
                                  </header>
                            <div class="panel-body">
                                <div class="form">
                                    <!--<form class="form-validate form-horizontal" id="feedback_form" method="get" action="">-->
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="nombre_acudiente" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" type="nombre_acudiente" name="nombre_acudiente" value="{{ $alumnos->nombre_acudiente }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="apellido_acudiente" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="apellido_acudiente" value="{{ $alumnos->apellido_acudiente }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
                                           <div class="form-group">
                                             <label for="tipo_documentopa" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                               <div class="col-xs-3">
                                                   <select class="form-control" name="tipo_documentopa">
                                                     <option value= "{{ $alumnos->tipo_documentopa }}">{{ $alumnos->tipo_documentopa }}</option>
                                                     <option value= "R.C" >R.C.</option>
                                                     <option value= "T.I" >T.I.</option>
                                                     <option value= "C.C" >C.C.</option>
                                                   </select>
                                               </div>

                                               <label for="numero_documentoa" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                             <div class="col-lg-3">
                                                 <input class="form-control" name="numero_documentoa" value="{{ $alumnos->numero_documentoa }}" minlength="5" type="text" required />
                                             </div>

                                          </div>



    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="direccion_acudiente" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" name="direccion_acudiente" value="{{ $alumnos->direccion_acudiente }}" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_acudiente" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="tel_acudiente" value="{{ $alumnos->tel_acudiente }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN DEL TRABAJO ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="dir_trabajoa" class="control-label col-lg-2">DIRECCIÓN DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" name="dir_trabajoa" value="{{ $alumnos->dir_trabajoa }}" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN DEL TRABAJO --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_trabajoa" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="tel_trabajoa" value="{{ $alumnos->tel_trabajoa }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>


    <!-- ------------------------------------------------------  FORMULARIOS 5 ------------------------------------------------------------- -->



                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>
    <!-- --------------------------------------- ACUDIENTE ------------------------------------------------- -->
    <!-- --------------------------------------- EMERGENCIA ------------------------------------------------- -->
                                  <div id="emergencia" class="tab-pane">
                                      <section class="panel">

    <!-- ------------------------------------------------  FORMULARIOS 6 -------------------------------------------------- -->
                <!-- Form validations -->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Información de otro familiar o persona de confianza para casos de emergencia
                                </header>
                            <div class="panel-body">
                                <div class="form">
                                  <!--  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">-->
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="nombre_emergencia" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="nombre_emergencia" value="{{ $alumnos->nombre_emergencia }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="apellido_emergencia" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="apellido_emergencia" value="{{ $alumnos->apellido_emergencia }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->


    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="direccion_emergencia" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" name="direccion_emergencia" value="{{ $alumnos->direccion_emergencia }}" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_emergencia" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" type="tel_emergencia" name="tel_emergencia" value="{{ $alumnos->tel_emergencia }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="tel_trabajoe" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="tel_trabajoe" value="{{ $alumnos->tel_trabajoe }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>



                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>

    <!-- --------------------------------------- EMERGENCIA ---------------------------------------------------->
    <!-- --------------------------------------- FUNDACION ----------------------------------------------------->
                                  <div id="fundacion" class="tab-pane">
                                      <section class="panel">

                                          <!-- ------------------------------------------------  FORMULARIO 7 -------------------------------------------------- -->
                <!-- Form validations -->


                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                          Información para la fundación
                                      </header>
                                  <div class="panel-body">
                                      <div class="form">
                                          <!--<form class="form-validate form-horizontal" id="feedback_form" method="get" action="">-->

    <!-- ------------------------------------------------  FECHA DE MATRICULA -------------------------------------------------- -->
                                    <div class="form-group ">
                                        <label for="fecha_matricula" class="control-label col-lg-2">FECHA DE MATRICULA<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="fecha_matricula" value="{{ $alumnos->fecha_matricula }}" placeholder="Dia/Mes/Año" minlength="5" type="text" required />
                                        </div>
                                    </div>

    <!-- ------------------------------------------------  FECHA DE MATRICULA -------------------------------------------------- -->
    <!-- -------------------------------------------------------  CONVENIO -------------------------------------------------------- -->

                                         <div class="form-group">
                                            <label for="convenio" class="control-label col-xs-3">CONVENIO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">

                                                      <select class="form-control" name="convenio">
                                                          <option value= "{{ $alumnos->convenio }}">{{ $alumnos->convenio }}</option>
                                                          <option value="Particular">Particular</option>
                                                          <option value="Exito">Exito</option>
                                                          <option value="Ferrocarril">Ferrocarriles</option>
                                                          <option value="ICBF">ICBF</option>


                                                      </select>
                                                  </div>


                                              </div>



    <!-- -------------------------------------------------------  CONVENIO ---------------------------------------------------- -->

    <!-- -------------------------------------------------------  MODULO -------------------------------------------------------- -->

                                          <div class="form-group">
                                            <label for="modulo" class="control-label col-xs-3">MODULO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">

                                                      <select class="form-control" name="modulo">
                                                          <option value= "{{ $alumnos->modulo }}">{{ $alumnos->modulo }}</option>
                                                          <option value="Esmeralda">Esmeralda</option>
                                                          <option value="Azul">Azul</option>
                                                          <option value="Rojo">Rojo</option>
                                                          <option value="Japon">Japon</option>


                                                      </select>
                                              </div>


                                          </div>


    <!-- -------------------------------------------------------  MODULO ---------------------------------------------------- -->
    <!-- -------------------------------------------------------  PROGRAMA -------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="programa" class="control-label col-lg-2">PROGRAMA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" name="programa" value="{{ $alumnos->programa }}" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------  PROGRAMA ---------------------------------------------------- -->

                                        <div class="form-group">
                                            <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                        </div>
                                    </form>
                                      </div>
                                  </div>
                                </section>
                            </div>
                        </div>


    <!-- ------------------------------------------------------  FORMULARIOS 7 ------------------------------------------------------------- -->




                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>

                                    </div>

    <!-- --------------------------------------- FUNDACION ----------------------------------------------------->
                                </div>

                      </section>
                      <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-primary" type="submit">Save</button>
                              <button class="btn btn-default" type="button">Cancel</button>
                          </div>
                      </div>
                   </div>

    </div>
    <!-- ---------------------------------------Fin Cuadro principal -------------------------------------------->

      </section>
  </section>
  <!--main content end-->
</section>

@endsection
