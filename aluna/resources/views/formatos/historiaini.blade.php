@extends('layout')

@section('content')

  <div class="contenido">
     <!-- <img src="img/menu.png" alt="" class="menu-bar">-->

  <nav>
         <div class="col-lg-12">


         <h3> <span class="page-header"><i class="fa fa-medkit"></i> Historia Inicial</span></h3>

         <ol class="breadcrumb">
           <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
           <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
           <li><i class="fa fa-th-list"></i> <a href="{{ route('formatos.salud', $alumnos)}}">Area de salud de: {{ $alumnos->nombres }}{{ $alumnos->apellidos }}</a></li>
           <li><i class="fa fa-th-list"></i>Historia inicial</li>
         </ol>


          </div>
      </nav>
     <br>
     <br>

     <!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
<div class="row">
  <form method="POST" action="{{ route('formatos.saveini') }}" accept-charset="UTF-8" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
   <div class="col-lg-12">
      <section class="panel">
            <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                    <li class="active panel panel-primary">
                        <a data-toggle="tab" href="#parteuno" class="parteuno">
                            <i class="icon-home"></i>
                           Parte uno
                        </a>
                    </li>
                    <li class="panel panel-info">
                        <a data-toggle="tab" href="#partedos" class="partedos">
                            <i class="icon-user"></i>
                            Parte dos
                        </a>
                    </li>
                    <li class="panel panel-warning">
                        <a data-toggle="tab" href="#partetres" class="partetres">
                            <i class="icon-envelope"></i>
                            Parte tres
                        </a>
                    </li>

                    <li class="panel panel-danger">
                        <a data-toggle="tab" href="#partecuatro" class="partecuatro">
                            <i class="icon-envelope"></i>
                            Parte cuatro
                        </a>
                    </li>
                    <li class="panel panel-success">
                        <a data-toggle="tab" href="#partecinco" class="partecinco">
                            <i class="icon-envelope"></i>
                            Parte cinco
                        </a>

                    </li>
                    <li class="panel panel-success">
                        <a data-toggle="tab" href="#parteseis" class="parteseis">
                            <i class="icon-envelope"></i>
                            Parte seis
                        </a>

                    </li>
                    <li class="panel panel-success">
                        <a data-toggle="tab" href="#partesiete" class="partesiete">
                            <i class="icon-envelope"></i>
                            Parte siete
                        </a>

                    </li>
                    <li class="panel panel-success">
                        <a data-toggle="tab" href="#parteocho" class="parteocho">
                            <i class="icon-envelope"></i>
                            Parte ocho
                        </a>

                    </li>
                    <li class="panel panel-success">
                        <a data-toggle="tab" href="#partenueve" class="partenueve">
                            <i class="icon-envelope"></i>
                            Parte nueve
                        </a>

                    </li>
                </ul>

<!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
      <div class="panel-body">
              <div class="tab-content">
  <!-- ---------------------------------------------------- DATOS DE IDENTIFICACION ------------------------------------ -->
   <div id="parteuno" class="tab-pane active">
     <div class="row">
         <div class=" col-lg-12">
              <section class="panel panel-info">
                  <header class="panel-heading">
                        1. DATOS DE IDENTIFICACION
                      </header>
                 <div class="panel-body">
                     <div class="form">
                         <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                              <div class="form-group ">

                                <div class="bio-row">

                                    <p> <span><strong>NOMBRE COMPLETO:</strong></span> {{ $alumnos->nombres}} {{ $alumnos->apellidos}}</p>
                                   </div>

                                <div class="bio-row">
                                    <p><span><strong>FECHA DE NACIMIENTO: </strong></span>{{ $alumnos->fecha_nacimiento}}</p>
                                   </div>

                                <div class="bio-row">
                                    <p><span><strong>EDAD:</strong> </span> {{ $alumnos->edad}}</p>
                                   </div>


                                        <div class="bio-row">
                                            <p><span><strong>DIAGNOSTICO:</strong></span> <input class=" form-control-static " id="diagnostico" name="diagnostico"  type="text"></p>

                                        </div>

                                        <div class="bio-row">
                                            <p><span><strong>PERFIL ALUNA:</strong></span><input class="form-control-static" id="perfil" name="perfil"  type="text"> </p>

                                        </div>

                                        <div class="bio-row">
                                            <p><span><strong>REMITIDO POR:</strong></span><input class="form-control-static" id="remitido" name="remitido" type="text"></p>

                                        </div>

                                     <div class="bio-row">
                                        <p><span><strong>ESCOLARIZACION:</strong></span><input class="form-control-static" id="escolarizacion" name="escolarizacion" type="text"><p>

                                     </div>
                                 </div>

                                <div class="form-group">
                                     <p><span><strong>AFILIACION EN SALUD REGIMEN:</strong></span></p>

                                     <div class="bio-row">

                                         <p><span><strong>SUBSIDIADO:</strong></span>
                                             <select class="form-control-static" type="text" for="subsidio" name="subsidio">
                                                 <option value= "" selected="selected">Subsidio</option>
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                     </div>

                                     <div class="bio-row">
                                         <p><span><strong>NIVEL:</strong></span>
                                             <select class="form-control-static" for="nivel" name="nivel">
                                                 <option value= "1">1</option>
                                                 <option value= "2">2</option>
                                                 <option value= "3">3</option>

                                             </select>
                                         </p>
                                     </div>

                                     <div class="bio-row">
                                         <p><span><strong>CONTRIBUTIVO:</strong></span>
                                             <select class="form-control-static" for="contributivo" name="contributivo">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>


                                     </div>

                                        </div>

                                <div class="form-group">
                                         <div class="bio-row">
                                             <p><span><strong>EPS:</strong></span>
                                              <select class="form-control-static" name="eps">
                                                         <option value= "SI">SI</option>
                                                         <option value= "NO">NO</option>

                                                     </select>
                                             </p>

                                         </div>



                                         <div class="bio-row">
                                             <p><span><strong>CUAL:</strong></span><input class="form-control-static" id="cual_inicial" name="cual_inicial" type="text"></p>

                                         </div>

                                 </div>


                                <div class="form-group">
                                     <p><span><strong>INFORMACION DEL PADRE</strong></span></p>
                                     <br>
                                     <div class="bio-row">
                                         <p><span><strong> NOMBRE COMPLETO</strong></span>: {{ $alumnos->nombre_padre}} {{ $alumnos->apellido_padre}}</p>
                                        </div>

                                     <div class="bio-row">
                                         <p><span><strong>EDAD: </strong></span><input type="number" id="edad_padre" name="edad_padre" min="0" max="100"></p>

                                        </div>





                                       <div class="bio-row">
                                           <p><span><strong>OCUPACION/TRABAJO:</strong> </span><input type="text" class="form-control-static" id="trabajo" name="trabajo"></p>

                                        </div>

                                    <div class="bio-row">
                                        <p><span><strong>TELEFONO:</strong></span> {{ $alumnos->tel_padre}}</p>
                                        </div>

                                </div>

                                <div class="form-group">
                                     <p><span><strong>INFORMACION DEL MADRE</strong></span></p>

                                        <div class="bio-row">
                                            <p><span><strong> NOMBRE COMPLETO:</strong></span> {{ $alumnos->nombre_madre}} {{ $alumnos->apellido_madre}}</p>
                                        </div>

                                     <div class="bio-row">
                                         <p><span><strong>EDAD:</strong> </span><input type="number" name="edad_madre" id="edad_madre" min="0" max="100"></p>

                                        </div>

                                       <div class="bio-row">
                                           <p><span><strong>OCUPACION/TRABAJO:</strong> </span><input type="text" id="trabajo_madre" name="trabajo_madre"class="form-control-static"></p>

                                        </div>
                                    <div class="bio-row">
                                        <p><span><strong>TELEFONO</strong></span>: {{ $alumnos->tel_madre}}</p>
                                        </div>
                                </div>

                                <div class="form-group">
                                         <div class="bio-row">
                                             <p><span><strong>ACUDIENTE: </strong></span>{{ $alumnos->nombre_acudiente}} {{ $alumnos->apellido_acudiente}}</p>

                                        </div>
                                    <div class="bio-row">
                                        <p><span><strong>TELEFONO:</strong></span> {{ $alumnos->tel_acudiente}}</p>
                                        </div>
                                </div>


                                </form>
                                </div>

                                </div>



                                </section>
                                </div>
                                <ul class="pager">

                                <li class="next"><a href="#partedos">Siguiente &rarr;</a></li>
                                </ul>
                                </div>
                                </div>

                                <!-- ---------------------------------------------------- DATOS DE IDENTIFICACION ------------------------------------ -->
                                <!-- ---------------------------------------------------- MOTIVO DE CONSULTA ------------------------------------ -->
                                <div id="partedos" class="tab-pane">

                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                2. MOTIVO DE CONSULTA
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">

                                    <textarea class="form-control" rows="4" id="motivo_consulta" type="text" name="motivo_consulta"></textarea>


                                </div>
                                </form>
                                </div>

                                </div>
                                </section>
                                </div>
                                </div>

                                <ul class="pager">
                                <li class="previous"><a href="#parteuno">&larr; Anterior</a></li>
                                <li class="next"><a href="#partetres">Siguiente &rarr;</a></li>
                                </ul>



                                </div>
                                <!-- ---------------------------------------------------- MOTIVO DE CONSULTA ------------------------------------ -->

                                <!-- ---------------------------------------------------- INICIO, CURSO Y EVOLUCION ------------------------------------ -->
                                <div id="partetres" class="tab-pane">
                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                3. INICIO, CURSO Y EVOLUCION DE LA DISCAPACIDAD
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">


                                    <textarea class="form-control" rows="11" id="inicio_curso_evolucion" type="text" name="inicio_curso_evolucion"></textarea>

                                  </div>


                                </form>
                                </div>

                                </div>
                                </section>
                                </div>
                                <ul class="pager">
                                <li class="previous"><a href="#partedos">&larr; Anterior</a></li>
                                <li class="next"><a href="#partecuatro">Siguiente &rarr;</a></li>
                                </ul>
                                </div>

                                </div>
                                <!-- ---------------------------------------------------- INICIO, CURSO Y EVOLUCION ------------------------------------ -->
                                <!-- ---------------------------------------------------- HISTORIA PERSONAL ------------------------------------ -->
                                <div id="partecuatro" class="tab-pane">


                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                4.  HISTORIA PERSONAL
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">
                                    <div class="form-group">
                                        <p><span><strong>  4.1 DESARROLLO PSICOMOTOR </strong></span></p>

                                        <br>

                                        <div class="bio-row">
                                            <p><span><strong>SOSTEN DE CABEZA:</strong></span>
                                            <select class="form-control-static"id="sosten_cabeza" type="text" name="sosten_cabeza">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                            </p>

                                         </div>

                                        <div class="bio-row">

                                            <p><span><strong>GATEO</strong></span>
                                            <select class="form-control-static" id="gateo" type="text" name=" gateo">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                            </p>

                                    </div>

                                    <div class="bio-row">

                                        <p><span><strong>SEDESTACION</strong></span>
                                        <select class="form-control-static" id="sedestacion" type="text" name=" sedestacion">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                        </p>

                                    </div>

                                        <div class="bio-row">

                                            <p><span><strong>CAMINO</strong></span>
                                                <select class="form-control-static" id="camino" type="text" name=" camino">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                            </p>

                                    </div>


                                        <div class="bio-row">

                                            <p><span><strong>LATERALIDAD</strong></span>
                                                <select class="form-control-static" id="lateralidad" type="text" name="lateralidad">
                                                 <option value= "IZQUIERDA">IZQUIERDA</option>
                                                 <option value= "DERECHA">DERECHA</option>
                                                 <option value= "NO DEFINIDA">NO DEFINIDA</option>

                                             </select>
                                            </p>

                                    </div>

                                    </div>

                                    <div class="form-group">

                                         <div class="bio-row">
                                             <p><span><strong>DESCRIPCION ACTUAL</strong></span> <textarea class="form-control" rows="11" type="text" id="descripcion_actual"name="descripcion_actual"></textarea></p>


                                         </div>


                                </div>

                                    <div class="form-group">
                                        <p><span><strong>4.2 DESARROLLO DEL LENGUAJE </strong></span></p>

                                        <br>
                                        <div class="bio-row">

                                         <p><strong>BALBUCEO</strong>
                                             <select class="form-control-static" id="balbuceo" type="text" name="balbuceo">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                         </p>

                                    </div>

                                         <div class="bio-row">

                                             <p><span><strong>PRIMERA PALABRA</strong></span>
                                                 <select class="form-control-static" id="primera_palabra" type="text" name="primera_palabra">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                             </p>

                                    </div>

                                         <div class="bio-row">

                                             <p><span><strong>PRIMERA FRASE</strong></span>
                                                 <select class="form-control-static" id="primera_frase" type="text" name="primera_frase">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                             </p>

                                    </div>
                                    </div>
                                        <div class="form-group">

                                                <p><span><strong>DESCRIPCION DE CARACTERISTICAS ACTUALES Y PROCESO DE ALIMENTACION</strong></span><textarea class="form-control" rows="3"id="descripcion" name="descripcion"></textarea></p>


                                         </div>

                                    <div class="form-group">
                                        <p><span> <strong>4.3 DESARROLLO PERSONAL </strong></span></p>
                                        <p>(Actividades de agrado, intereses personales, oportunidades de habilitación)
                                            <textarea class="form-control" rows="3" id="desarrollo_personal" type="text" name="desarrollo_personal"></textarea>
                                        </p>


                                    </div>
                                </div>

                                </form>
                                </div>

                                </div>
                                </section>
                                </div>
                                </div>


                                <ul class="pager">
                                <li class="previous"><a href="historialinicial3.html">&larr; Anterior</a></li>
                                <li class="next"><a href="historialinicial5.html">Siguiente &rarr;</a></li>
                                </ul>


                                </div>
                                <!-- ---------------------------------------------------- HISTORIA PERSONAL ------------------------------------ -->
                                <!-- ---------------------------------------------------- INFORMACION FAMILIAR ------------------------------------ -->


                                <div id="partecinco" class="tab-pane">

                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                5. INFORMACION FAMILIAR
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">

                                    <div class="form-group">
                                        <p><span><strong> A) MAPA FAMILIAR </strong></span>

                                            <textarea class="form-control" rows="3" type="text" name="mapa_familiar"></textarea>
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <p><span> <strong> B) DESCRIPCION </strong></span></p>
                                        <p>Personas con quien vive, relaciones y parentesco entre los miembros de la familia, reglas del hogar

                                            <textarea class="form-control" rows="3" id="mapa_familiar" type="text" name="mapa_familiar"></textarea>
                                        </p>
                                    </div>


                                    <div class="form-group">
                                        <p><span> <strong> C) ASPECTOS PSICOSOCIALES Y AMBIENTALES </strong></span></p>
                                        <p>Redes de apoyo, nivel socioeconomico, condiciones de trabajo y vivienda.

                                        <textarea class="form-control" rows="3" id="aspectos_psicosociales_ambientales" type="text" name=" aspectos_ psicosociales_ambientales"></textarea>
                                        </p>
                                    </div>


                                </div>
                                </form>
                                </div>
                                </div>
                                </section>
                                </div>
                                </div>
                                <ul class="pager">
                                <li class="previous"><a href="">&larr; Anterior</a></li>
                                <li class="next"><a href="">Siguiente &rarr;</a></li>
                                </ul>
                                </div>

                                <!-- ---------------------------------------------------- INFORMACION FAMILIAR ------------------------------------ -->

                                <!-- ---------------------------------------------------- ANTECEDENTES ------------------------------------ -->
                                <div id="parteseis" class="tab-pane">
                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                6. ANTECEDENTES
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">


                                       <div class="bio-row">

                                           <p><span><strong>DURACIÓN DE EMBARAZO</strong></span>

                                             <select class="form-control-static" id="duracion_embarazo" type="text" name="duracion_embarazo">
                                                 <option value= "1">1 SEMANA</option>
                                                 <option value= "2" >2 SEMANAS</option>
                                                 <option value= "3">3 SEMANAS</option>
                                                 <option value= "4">4 SEMANAS</option>
                                                 <option value= "5">5 SEMANAS</option>
                                                 <option value= "6">6 SEMANAS</option>
                                                 <option value= "7">7 SEMANAS</option>
                                                 <option value= "8">8 SEMANAS</option>
                                                 <option value= "9">9 SEMANAS</option>
                                                 <option value= "10">10 SEMANAS</option>
                                                 <option value= "11">11 SEMANAS</option>
                                                 <option value= "12">12 SEMANAS</option>
                                                 <option value= "13">13 SEMANAS</option>
                                                 <option value= "14">14 SEMANAS</option>
                                                 <option value= "15">15 SEMANAS</option>
                                                 <option value= "16">16 SEMANAS</option>
                                                 <option value= "17">17 SEMANAS</option>
                                                 <option value= "18">18 SEMANAS</option>
                                                 <option value= "19">19 SEMANAS</option>
                                                 <option value= "20">20 SEMANAS</option>
                                                 <option value= "21">21 SEMANAS</option>
                                                 <option value= "22">22 SEMANAS</option>
                                                 <option value= "23">23 SEMANAS</option>
                                                 <option value= "24">24 SEMANAS</option>
                                                 <option value= "25">25 SEMANAS</option>
                                                 <option value= "26">26 SEMANAS</option>
                                                 <option value= "27">27 SEMANAS</option>
                                                 <option value= "28">28 SEMANAS</option>
                                                 <option value= "29">29 SEMANAS</option>
                                                 <option value= "30">30 SEMANAS</option>
                                                 <option value= "31">31 SEMANAS</option>
                                                 <option value= "32">32 SEMANAS</option>
                                                 <option value= "33">33 SEMANAS</option>
                                                 <option value= "34">34 SEMANAS</option>
                                                 <option value= "35">35 SEMANAS</option>
                                                 <option value= "36">36 SEMANAS</option>
                                                 <option value= "37">37 SEMANAS</option>
                                                 <option value= "38">38 SEMANAS</option>
                                                 <option value= "39">39 SEMANAS</option>
                                                 <option value= "40">40 SEMANAS</option>


                                             </select>
                                         </p>
                                    </div>



                                       <div class="bio-row">

                                           <p><span><strong>CONTROLES</strong></span>

                                               <select class="form-control-static" id="controles" type="text" name="controles">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                         </p>
                                    </div>

                                      <div class="bio-row">

                                          <p><span><strong>ABORTO</strong></span>

                                             <select class="form-control-static" id="aborto" type="text" name="aborto">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                      <div class="bio-row">

                                          <p><span><strong>CAIDAS</strong></span>

                                              <select class="form-control-static" id="caidas" type="text" name="caidas">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                         </p>
                                    </div>

                                      <div class="bio-row">

                                          <p><span><strong>CONSUMO DE ALCOHOL</strong></span>

                                             <select class="form-control-static" id="consumo_alcohol" type="text" name="consumo_alcohol">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                         </p>
                                    </div>

                                      <div class="bio-row">

                                          <p><span><strong>FUMÓ</strong></span>

                                              <select class="form-control-static"id="fumo" type="text" name="fumo">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>


                                             </select>
                                         </p>
                                    </div>


                                    <div class="bio-row">

                                        <p><span><strong>ENFERMEDADES</strong></span>

                                             <select class="form-control-static" id="enfermedades" type="text" name="enfermedades">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span><strong>CUALES?</strong></span><input type="text" type="text" class="form-control-static"id="cuales_enfermedades"  name=" cuales_enfermedades"></p>

                                    </div>

                                   <div class="bio-row">

                                       <p><span><strong>TOMO MEDICAMENTOS:</strong></span>

                                             <select class="form-control-static" id="tomo_medicamentos"  type="text" name="tomo_medicamentos">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                    <div class="bio-row">
                                        <p><span><strong>CUALES?</strong></span>
                                            <input type="text" class="form-control-static" id="cuales_medicamentos" type="text" name="cuales_medicamentos">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p><span><strong> OBSERVACIONES </strong></span></p>

                                        <textarea class="form-control-static" rows="3" id="observaciones" type="text" name="observaciones"></textarea>
                                    </div>


                                     <div class="form-group">
                                         <p><span> <strong> 6.2 ANTECENTES PERINATALES </strong></span></p>


                                        <div class="bio-row">

                                            <p><span><strong>PARTO VAGINAL:</strong></span>

                                             <select class="form-control-static"id="parto_vaginal" type="text" name="parto_vaginal">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>


                                        <div class="bio-row">

                                            <p><span><strong>CESAREA:</strong></span>

                                                <select class="form-control-static" id="cesaria" type="text" name="cesaria">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>


                                        <div class="bio-row">

                                            <p><span><strong>UTILIZACION DE FORCEPS:</strong></span>

                                             <select class="form-control-static"id="forceps" type="text"  name="forceps">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>
                                  </div>

                                        <div class="form-group">
                                        <p>Desarrollo del parto (hubo complicaciones, hemorragias, hipoxia, hospitalizacion, tipo de atencion durando el parto) </p>
                                      <textarea class="form-control" rows="2" id="desarrolo_parto"  type="text" name="desarrolo_parto"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <p><span><strong> OBSERVACIONES </strong></span></p>

                                        <textarea class="form-control" rows="3" id="observaciones_parto" v name="obervaciones_parto"></textarea>
                                    </div>

                                <div class="form-group">
                                      <p><span> <strong> 6.3 ANTECENTES POSNATALES </strong></span></p>
                                       <div class="bio-row">

                                            <p><span><strong>CONVULSIONES:</strong></span>

                                                <select class="form-control-static" id="convulsiones" type="text" name="convulsiones">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                       <div class="bio-row">

                                            <p><span><strong>PRIMERA CRISIS:</strong></span>

                                                <select class="form-control-static" id="primera_crisis" type="text" name="primera_crisis">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>
                                       <div class="bio-row">

                                            <p><span><strong>ULTIMA CRISIS:</strong></span>

                                                <select class="form-control-static" id="ultima_crisis" type="text" name="ultima_crisis">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>
                                       <div class="bio-row">

                                            <p><span><strong>CIRUGIAS:</strong></span>

                                                <select class="form-control-static" id="cirugias"  type="text" name="cirugias">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                      <div class="bio-row">
                                        <p><span><strong>CUALES?</strong></span><input type="text"  type="text" class="form-control-static" id="cuales_cirugias" name="cuales_cirugias"></p>

                                    </div>

                                      <div class="bio-row">

                                            <p><span><strong>FAMILIARES:</strong></span>

                                                <select class="form-control-static" id="familiares" type="text" name="familiares">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                     <div class="bio-row">
                                         <p><span><strong>CUALES?</strong></span><input type="text" type="text" class="form-control-static" id="cuales_familiares" name="cuales_familiares"></p>

                                    </div>

                                    <div class="bio-row">

                                            <p><span><strong>OTROS:</strong></span>

                                                <select class="form-control-static" type="text" id="otros"name="otros">
                                                 <option value= "SI">SI</option>
                                                 <option value= "NO">NO</option>

                                             </select>
                                         </p>
                                    </div>

                                      <div class="bio-row">
                                          <p><span><strong>CUALES?</strong></span><input type="text" class="form-control-static" type="text" row="2" id="cuales_otros" name="cuales_otros"></p>

                                    </div>
                                      <div class="form-group">
                                            <p><span><strong> EXAMENES ESPECIALIZADOS </strong></span></p>

                                            <textarea class="form-control" rows="3" id="examenes_especializados"  type="text" name="examenes_especializados"></textarea>
                                    </div>
                                </div>

                                </div>

                                </div>
                                </form>

                                </div>
                                </div>
                                <ul class="pager">
                                <li class="previous"><a href="">&larr; Anterior</a></li>
                                <li class="next"><a href="">Siguiente &rarr;</a></li>
                                </ul>
                                </div>
                                <!-- ---------------------------------------------------- ANTECEDENTES ------------------------------------ -->
                                <!-- ---------------------------------------------------- TRATAMIENTOS REALIZADOS ------------------------------------ -->
                                <div id="partesiete" class="tab-pane">
                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                7. TRATAMIENTOS REALIZADOS
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">


                                    <div class="form-group">
                                            <p><span><strong> PEDAGOGICOS </strong></span></p>

                                            <textarea class="form-control" rows="3" id="pedagogicos" type="text" name="pedagogicos"></textarea>
                                    </div>


                                    <div class="form-group">
                                            <p><span><strong> TERAPEUTICOS </strong></span></p>

                                            <textarea class="form-control" rows="3" type="text" id="terapeuticos"name="terapeuticos"></textarea>
                                    </div>


                                    <div class="form-group">
                                            <p><span><strong> FARMACOLOGICOS </strong></span></p>

                                            <textarea class="form-control" rows="3" type="text" id="farmacologicos"  name="farmacologicos"></textarea>
                                    </div>




                                </div>
                                </form>
                                </div>
                                </div>
                                </section>
                                </div>
                                </div>
                                <ul class="pager">
                                <li class="previous"><a href="">&larr; Anterior</a></li>
                                <li class="next"><a href="">Siguiente &rarr;</a></li>
                                </ul>

                                </div>
                                <!-- ---------------------------------------------------- TRATAMIENTOS REALIZADOS ------------------------------------ -->

                                <!-- ---------------------------------------------------- EXPECTATIVAS------------------------------------ -->
                                <div id="parteocho" class="tab-pane">
                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                8. EXPECTATIVAS
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal" type="text" id="feedback_form" method="get" action="">
                                <div class="form-group ">

                                    <textarea class="form-control" rows="3" type="text" id="expectativas"  name="expectativas"></textarea>


                                 </div>
                                </form>
                                </div>
                                </div>
                                </section>
                                </div>
                                </div>
                                <ul class="pager">
                                <li class="previous"><a href="">&larr; Anterior</a></li>
                                <li class="next"><a href="">Siguiente &rarr;</a></li>
                                </ul>

                                </div>
                                <!-- ---------------------------------------------------- EXPECTATIVAS ------------------------------------ -->
                                <!-- ---------------------------------------------------- PLAN DE TRABAJO SUGERIDO ------------------------------------ -->

                                <div id="partenueve" class="tab-pane">
                                <div class="row">
                                <div class=" col-lg-12">
                                <section class="panel panel-info">
                                <header class="panel-heading">
                                9. PLAN DE TRABAJO SUGERIDO
                                </header>
                                <div class="panel-body">
                                <div class="form">
                                <form class="form-validate form-horizontal"  id="feedback_form" method="get" action="">
                                <div class="form-group ">

                                    <textarea class="form-control" rows="4" type="text" id="plan_trabajo" name=" plan_trabajo"></textarea>


                                 </div>
                                </form>
                                </div>
                                </div>
                                <div class="btn">

                                <button type="submit" class="btn btn-info" >Guardar </button>
                                </div>
                                </section>
                                </div>
                                </div>
                                <ul class="pager">
                                <li class="previous"><a href="">&larr; Anterior</a></li>

                                </ul>

                                </div>


                                <!-- ---------------------------------------------------- PLAN DE TRABAJO SUGERIDO ------------------------------------ -->

                                </section>
      </div>

</div>


  </div>






      </div>


  </div>
          <script src="js/jquery.slimscroll.min.js"></script>






@endsection
