@extends('layout')


@section('content')
<section id="container" class="">
  @include('partials/errors')

  <!--main content start-->
<div class="contenido">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-files-o"></i> DATOS DEL ALUMNO</h3>
      <ol class="breadcrumb">

        <li><i class="fa fa-home"></i>Principal</li>
        <li><i class="fa fa-table"></i>Tabla de alumnos</li>
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
                                  <a data-toggle="tab" href="#padres" class="padres">
                                      <i class="icon-user"></i>
                                      Padres
                                  </a>
                              </li>
                              <li class="panel panel-warning">
                                  <a data-toggle="tab" href="#acudiente" class="acudiente">
                                      <i class="icon-envelope"></i>
                                      Acudiente
                                  </a>
                              </li>

                              <li class="panel panel-danger">
                                  <a data-toggle="tab" href="#emergencia" class="emergencia">
                                      <i class="icon-envelope"></i>
                                      Emergencia
                                  </a>
                              </li>
                              <li class="panel panel-success">
                                  <a data-toggle="tab" href="#fundacion" class="fundacion">
                                      <i class="icon-envelope"></i>
                                      Fundación
                                  </a>

                              </li>
                          </ul>

<!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
                <div class="panel-body">
                        <div class="tab-content">
<!-- --------------------------------------- ALUMNO --------------------------------------------------- -->
                            <div id="alumno" class="tab-pane active">

                                 <!--<section class="panel panel-primary">
                                  <div class="panel-body bio-graph-info">
                                       <div class="panel-heading">
                                      <center> <h1>Foto Alumno</h1></center>
                                       </div>
                                      <div class="row">
                                          <div  align=center>
                                             <img src="img/estudiante.png" border= 0>

                                              </div>

                                      </div>
                                  </div>
                                </section>-->

                                <section class="panel panel-primary">
                                  <div class="panel-body bio-graph-info">
                                       <div class="panel-heading">
                                           <h1>Datos del alumno</h1>
                                       </div>
                                      <div class="row">
                                          <div class="bio-row">

                                              <p><span>NOMBRES</span>: {{ $alumnos->nombres }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>APELLIDOS</span>: {{ $alumnos->apellidos }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TIPO DE DOCUMENTO</span>: {{ $alumnos->tipo_documento}}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>NUMERO DEL DOCUMENTO </span>: {{ $alumnos->numero_documento }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>FECHA DE NACIMIENTO </span>: {{ $alumnos->fecha_nacimiento }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>LUGAR DE NACIMIENTO </span>:{{ $alumnos->municipio }}, {{ $alumnos->departamento }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>EDAD </span>: {{ $alumnos->edad }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECCIÓN DE RESIDENCIA </span>: {{ $alumnos->direccion_residencia }}</p>
                                          </div>
                                      </div>
                                  </div>
                                </section>


                                <section class="panel panel-primary">
                                  <div class="panel-body bio-graph-info">
                                      <div class="panel-heading">
                                      <h1>Información de la persona con quien vive</h1>
                                      </div>
                                      <div class="row">
                                          <div class="bio-row">
                                              <p><span>NOMBRES</span>: {{ $alumnos->nombre_persona }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>APELLIDOS</span>: {{ $alumnos->apellido_persona }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>PARENTESCO</span>:{{ $alumnos->parentesco }}</p>
                                          </div>

                                      </div>
                                  </div>
                                </section>
                                  <section>
                                      <div class="row">
                                      </div>
                                  </section>
                              </div>



<!-- --------------------------------------- ALUMNO --------------------------------------------------- -->
<!--  ------------------------------------- PADRES------------------------------------------------------ -->
                        <div id="padres" class="tab-pane">
                                <section class="panel panel-info">
                                  <div class="panel-body bio-graph-info">
                                      <div class="panel-heading">
                                          <h1>Datos del padre</h1>
                                      </div>
                                      <div class="row">
                                          <div class="bio-row">
                                              <p><span>NOMBRES</span>: {{ $alumnos->nombre_padre }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>APELLIDOS</span>: {{ $alumnos->apellido_padre }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TIPO DE DOCUMENTO</span>: {{ $alumnos->tipo_documentop  }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>NUMERO DEL DOCUMENTO </span>: {{ $alumnos->numero_documentop }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECIÓN DE RESIDENCIA </span>: {{ $alumnos->direccion_padre }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE RESIDENCIA </span>:{{ $alumnos->tel_padre }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECCIÓN DE TRABAJO</span>: {{ $alumnos->dir_trabajop }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE TRABAJO </span>: {{ $alumnos->tel_trabajop }}</p>
                                          </div>
                                      </div>
                                  </div>
                                </section>


                             <section class="panel panel-info">
                                  <div class="panel-body bio-graph-info">
                                      <div class="panel-heading">
                                          <h1>Datos del madre</h1>
                                      </div>
                                      <div class="row">
                                          <div class="bio-row">
                                              <p><span>NOMBRES</span>: {{ $alumnos->nombre_madre }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>APELLIDOS</span>: {{ $alumnos->apellido_madre }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TIPO DE DOCUMENTO</span>: {{ $alumnos->tipo_documentom }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>NUMERO DEL DOCUMENTO </span>: {{ $alumnos->numero_documentom }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECIÓN DE RESIDENCIA </span>: {{ $alumnos->direccion_madre }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE RESIDENCIA </span>: {{ $alumnos->tel_madre }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECCIÓN DE TRABAJO</span>: {{ $alumnos->dir_trabajom }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE TRABAJO </span>: {{ $alumnos->tel_trabajom }}</p>
                                          </div>
                                      </div>
                                  </div>
                                </section>
                                  <section>
                                      <div class="row">
                                      </div>
                                  </section>
                              </div>


<!-- --------------------------------------- PADRES----------------------------------------------------- -->
<!--  -------------------------------------- ACUDIENTE ------------------------------------------------- -->
                             <div id="acudiente" class="tab-pane">
                                <section class="panel panel-warning">
                                  <div class="panel-body bio-graph-info">
                                       <div class="panel-heading">
                                           <h1>Datos del acudiente</h1>
                                       </div>
                                      <div class="row">
                                          <div class="bio-row">
                                              <p><span>NOMBRES</span>: {{ $alumnos->nombre_acudiente }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>APELLIDOS</span>: {{ $alumnos->apellido_acudiente }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TIPO DE DOCUMENTO</span>: {{ $alumnos->tipo_documentopa }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>NUMERO DEL DOCUMENTO </span>: {{ $alumnos->numero_documentoa }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECIÓN DE RESIDENCIA </span>: {{ $alumnos->direccion_acudiente }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE RESIDENCIA </span>: {{ $alumnos->tel_acudiente }}</p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>DIRECCIÓN DE TRABAJO</span>: {{ $alumnos->dir_trabajoa }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE TRABAJO </span>: {{ $alumnos->tel_trabajoa }} </p>
                                          </div>
                                      </div>
                                  </div>
                                </section>



                                  <section>
                                      <div class="row">
                                      </div>
                                  </section>
                              </div>
<!-- --------------------------------------- ACUDIENTE ------------------------------------------------- -->
<!-- --------------------------------------- EMERGENCIA ------------------------------------------------- -->
                    <div id="emergencia" class="tab-pane">
                                <section class="panel panel-danger">
                                  <div class="panel-body bio-graph-info">
                                       <div class="panel-heading">
                                      <h1>Información de otro familiar o persona de confianza en casos de emergencia</h1>
                                       </div>
                                      <div class="row">
                                          <div class="bio-row">
                                              <p><span>NOMBRES</span>: {{ $alumnos->nombre_emergencia }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>APELLIDOS</span>: {{ $alumnos->apellido_emergencia }} </p>
                                          </div>

                                          <div class="bio-row">
                                              <p><span>DIRECIÓN DE RESIDENCIA </span>: {{ $alumnos->direccion_emergencia }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>TELEFONO DE RESIDENCIA </span>: {{ $alumnos->tel_emergencia }}</p>
                                          </div>

                                          <div class="bio-row">
                                              <p><span>TELEFONO DE TRABAJO </span>: {{ $alumnos->tel_trabajoe }} </p>
                                          </div>
                                      </div>
                                  </div>
                                </section>



                                  <section>
                                      <div class="row">
                                      </div>
                                  </section>
                              </div>

<!-- --------------------------------------- EMERGENCIA ------------------------------------------------- -->
<!-- --------------------------------------- FUNDACION ----------------------------------------------------->


                      <div id="fundacion" class="tab-pane">
                                <section class="panel panel-success">
                                  <div class="panel-body bio-graph-info">
                                       <div class="panel-heading">
                                           <h1>Datos de la fundación</h1>
                                       </div>
                                      <div class="row">
                                          <div class="bio-row">
                                            <p><span>FECHA DE MATRICULA</span>: {{ $alumnos->fecha_matricula }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>CONVENIO</span>: {{ $alumnos->convenio }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>MODULO</span>: {{ $alumnos->modulo }} </p>
                                          </div>
                                          <div class="bio-row">
                                              <p><span>PROGRAMA </span>: {{ $alumnos->programa }} </p>
                                          </div>

                                      </div>
                                  </div>
                                </section>



                                  <section>
                                      <div class="row">
                                      </div>
                                  </section>
                              </div>

<!-- --------------------------------------- FUNDACION ----------------------------------------------------->
                          </div>
                      </div>
                </section>
             </div>
</div>
      </section>





          <!-- page end-->
</div>
@endsection
