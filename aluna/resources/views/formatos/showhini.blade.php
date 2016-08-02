@extends('layout')
@section('content')
<body>

   <div class="contenido">
      <!-- <img src="img/menu.png" alt="" class="menu-bar">-->

      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> DATOS DEL ALUMNO</h3>
          <ol class="breadcrumb">

            <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
            <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
            <li><i class="fa fa-files-o"><a href="{{ route('alumno.show', $alumnos)}}"></i>Información de: {{ $alumnos->nombres}} {{ $alumnos->apellidos }} </a></li>
            <li><i class="fa fa-files-o"></i>Historia inicial</li>
          </ol>
        </div>
      </div>
      <br>
      <br>

      <!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
<div class="row">
    <div class="col-lg-12">
       <section class="panel">
             <header class="panel-heading tab-bg-info">

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

                                  <p> <span><strong>NOMBRE COMPLETO:</strong></span> {{ $alumnos->nombres}} {{ $alumnos->apellidos }}</p>
                                 </div>

                              <div class="bio-row">
                                  <p><span><strong>FECHA DE NACIMIENTO: {{ $alumnos->fecha }} 05 Mayo 1988</p>
                                 </div>

                              <div class="bio-row">
                                  <p><span><strong>EDAD:</strong> </span> {{ $alumnos->edad }}</p>
                                 </div>


                                      <div class="bio-row">
                                          <p><span><strong>DIAGNOSTICO:</strong></span> {{ $alumnos->historiaini->diagnostico }}</p>

                                      </div>

                                      <div class="bio-row">
                                          <p><span><strong>PERFIL ALUNA:</strong></span>{{ $alumnos->historiaini->perfil }}</p>

                                      </div>

                                      <div class="bio-row">
                                          <p><span><strong>REMITIDO POR:</strong></span>{{ $alumnos->historiaini->remitido }} </p>
                                      </div>

                                   <div class="bio-row">
                                      <p><span><strong>ESCOLARIZACION:</strong></span>{{ $alumnos->historiaini->escolarizacion }}<p>

                                   </div>
                               </div>

                              <div class="form-group">
                                   <p><span><strong>AFILIACION EN SALUD REGIMEN:</strong></span></p>

                                   <div class="bio-row">

                                       <p><span><strong>SUBSIDIADO:</strong></span>{{ $alumnos->historiaini->subsidio }}</p>
                                   </div>

                                   <div class="bio-row">
                                       <p><span><strong>NIVEL:</strong></span>{{ $alumnos->historiaini->nivel }}</p>
                                   </div>

                                   <div class="bio-row">
                                       <p><span><strong>CONTRIBUTIVO:</strong></span>{{ $alumnos->historiaini->contributivo }}</p>


                                   </div>

                                      </div>

                              <div class="form-group">
                                       <div class="bio-row">
                                           <p><span><strong>EPS:</strong></span>{{ $alumnos->historiaini->eps }}</p>

                                       </div>


                                       <div class="bio-row">
                                           <p><span><strong>CUAL:</strong></span>{{ $alumnos->historiaini->cual_inicial }}</p>

                                       </div>

                               </div>


                              <div class="form-group">
                                   <p><span><strong>INFORMACION DEL PADRE</strong></span></p>
                                   <br>
                                   <div class="bio-row">
                                       <p><span><strong> NOMBRE COMPLETO</strong></span>: {{ $alumnos->nombre_padre }} {{ $alumnos->apellido_padre }}</p>
                                      </div>

                                   <div class="bio-row">
                                       <p><span><strong>EDAD: </strong></span>{{ $alumnos->historiaini->edad_padre }}</p>

                                      </div>

                                     <div class="bio-row">
                                         <p><span><strong>OCUPACION/TRABAJO:</strong>{{ $alumnos->historiaini->trabajo }}</p>

                                      </div>

                                  <div class="bio-row">
                                      <p><span><strong>TELEFONO:</strong></span> {{ $alumnos->tel_padre }}</p>
                                      </div>

                              </div>

                              <div class="form-group">
                                   <p><span><strong>INFORMACION DEL MADRE</strong></span></p>

                                      <div class="bio-row">
                                          <p><span><strong> NOMBRE COMPLETO:</strong></span> {{ $alumnos->nombre_madre }} {{ $alumnos->apellido_madre }}</p>
                                      </div>

                                   <div class="bio-row">
                                       <p><span><strong>EDAD:</strong> </span>{{ $alumnos->historiaini->edad_madre }}</p>

                                      </div>

                                     <div class="bio-row">
                                         <p><span><strong>OCUPACION/TRABAJO:</strong>{{ $alumnos->historiaini->trabajo_madre }}</p>

                                      </div>
                                  <div class="bio-row">
                                      <p><span><strong>TELEFONO</strong></span>: {{ $alumnos->tel_madre }}</p>
                                      </div>
                              </div>

                              <div class="form-group">
                                       <div class="bio-row">
                                           <p><span><strong>ACUDIENTE: </strong></span>{{ $alumnos->nombre_acudiente }} {{ $alumnos->apellido_acudiente }}</p>

                                      </div>
                                  <div class="bio-row">
                                      <p><span><strong>TELEFONO:</strong></span> {{ $alumnos->tel_acudiente }}</p>
                                      </div>
                              </div>


                          </form>
                      </div>

                  </div>



              </section>
          </div>

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

                                  <p>{{ $alumnos->historiaini->motivo_consulta }}</p>


                              </div>
                          </form>
                      </div>

                  </div>
               </section>
          </div>
      </div>





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


                                  <p>{{ $alumnos->historiaini->inicio_curso_evolucion }}</p>

                                </div>


                          </form>
                      </div>

                  </div>
               </section>
          </div>

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
                                          <p><span><strong>SOSTEN DE CABEZA:</strong></span>{{ $alumnos->historiaini->sosten_cabeza }}</p>

                                       </div>

                                      <div class="bio-row">

                                          <p><span><strong>GATEO</strong></span>{{ $alumnos->historiaini->gateo }}</p>

                                  </div>

                                  <div class="bio-row">

                                      <p><span><strong>SEDESTACION</strong></span>{{ $alumnos->historiaini->sedestacion }}</p>

                                  </div>

                                      <div class="bio-row">

                                          <p><span><strong>CAMINO</strong></span>{{ $alumnos->historiaini->camino }}</p>

                                  </div>


                                      <div class="bio-row">

                                          <p><span><strong>LATERALIDAD</strong></span>{{ $alumnos->historiaini->lateralidad }}</p>

                                  </div>

                                  </div>

                                  <div class="form-group">

                                       <div class="bio-row">
                                           <p><span><strong>DESCRIPCION ACTUAL</strong></span> {{ $alumnos->historiaini->descripcion_actual }}</p>


                                       </div>


                              </div>

                                  <div class="form-group">
                                      <p><span><strong>4.2 DESARROLLO DEL LENGUAJE </strong></span></p>

                                      <br>
                                      <div class="bio-row">

                                       <p><strong>BALBUCEO</strong>{{ $alumnos->historiaini->balbuceo }}</p>

                                  </div>

                                       <div class="bio-row">

                                           <p><span><strong>PRIMERA PALABRA</strong></span>{{ $alumnos->historiaini->primera_palabra }}</p>


                                  </div>

                                       <div class="bio-row">

                                           <p><span><strong>PRIMERA FRASE</strong></span>{{ $alumnos->historiaini->primera_frase }}</p>


                                  </div>
                                  </div>
                                      <div class="form-group">

                                              <p><span><strong>DESCRIPCION DE CARACTERISTICAS ACTUALES Y PROCESO DE ALIMENTACION</strong></span><textarea class="form-control" rows="3"></textarea></p>


                                       </div>

                                  <div class="form-group">
                                      <p><span> <strong>4.3 DESARROLLO PERSONAL </strong></span></p>
                                      <p>(Actividades de agrado, intereses personales, oportunidades de habilitación)</p>
                                      <p>{{ $alumnos->historiaini->desarrollo_personal }}</p>


                                  </div>
                              </div>

                          </form>
                      </div>

                  </div>
               </section>
          </div>
      </div>





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
                                      <p><span><strong> A) MAPA FAMILIAR </strong></span></p>
                                      <p> {{ $alumnos->historiaini->mapa_familiar }}</p>
                                  </div>

                                  <div class="form-group">
                                      <p><span> <strong> B) DESCRIPCION </strong></span></p>
                                      <p>Personas con quien vive, relaciones y parentesco entre los miembros de la familia, reglas del hogar</p>

                                      <p>{{ $alumnos->historiaini->descripcion_familiar }}</p>
                                  </div>


                                  <div class="form-group">
                                      <p><span> <strong> C) ASPECTOS PSICOSOCIALES Y AMBIENTALES </strong></span></p>
                                      <p>Redes de apoyo, nivel socioeconomico, condiciones de trabajo y vivienda.</p>

                                      <p>{{ $alumnos->historiaini->aspectos_psicosociales_ambientales }} </p>
                                  </div>


                              </div>
                           </form>
                      </div>
                  </div>
              </section>
          </div>
      </div>

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

                                         <p><span><strong>DURACIÓN DE EMBARAZO</strong></span>{{ $alumnos->historiaini->duracion_embarazo }}</p>

                                  </div>



                                     <div class="bio-row">

                                         <p><span><strong>CONTROLES</strong></span>{{ $alumnos->historiaini->controles }}</p>


                                  </div>

                                    <div class="bio-row">

                                        <p><span><strong>ABORTO</strong></span>{{ $alumnos->historiaini->aborto }}</p>


                                  </div>

                                    <div class="bio-row">

                                        <p><span><strong>CAIDAS</strong></span>{{ $alumnos->historiaini->caidas }}</p>


                                  </div>

                                    <div class="bio-row">

                                        <p><span><strong>CONSUMO DE ALCOHOL</strong></span>{{ $alumnos->historiaini->consumo_alcohol }}</p>


                                  </div>

                                    <div class="bio-row">

                                        <p><span><strong>FUMÓ</strong></span>{{ $alumnos->historiaini->fumo }}</p>

                                  </div>


                                  <div class="bio-row">

                                      <p><span><strong>ENFERMEDADES</strong></span>{{ $alumnos->historiaini->enfermedades }}</p>

                                  </div>

                                  <div class="bio-row">
                                      <p><span><strong>CUALES?</strong></span>{{ $alumnos->historiaini->cuales_enfermedades }}</p>

                                  </div>

                                 <div class="bio-row">

                                     <p><span><strong>TOMO MEDICAMENTOS:</strong></span>{{ $alumnos->historiaini->tomo_medicamentos }}</p>

                                  </div>

                                  <div class="bio-row">
                                      <p><span><strong>CUALES?</strong></span>
                                          {{ $alumnos->historiaini->cuales_medicamentos }}
                                      </p>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <p><span><strong> OBSERVACIONES </strong></span></p>

                                  <p>{{ $alumnos->historiaini->observaciones }}</p>
                                  </div>


                                   <div class="form-group">
                                       <p><span> <strong> 6.2 ANTECENTES PERINATALES </strong></span></p>


                                      <div class="bio-row">

                                          <p><span><strong>PARTO VAGINAL:</strong></span>{{ $alumnos->historiaini->parto_vaginal }}</p>



                                  </div>


                                      <div class="bio-row">

                                          <p><span><strong>CESAREA:</strong></span>{{ $alumnos->historiaini->cesaria }}</p>


                                  </div>


                                      <div class="bio-row">

                                          <p><span><strong>UTILIZACION DE FORCEPS:</strong></span>{{ $alumnos->historiaini->forceps }}</p>

                                  </div>
                                </div>

                                      <div class="form-group">
                                      <p>Desarrollo del parto (hubo complicaciones, hemorragias, hipoxia, hospitalizacion, tipo de atencion durando el parto) </p>
                                      </div>

                                      <div class="form-group">
                                          <p><span><strong> OBSERVACIONES </strong></span></p>

                                          <p>{{ $alumnos->historiaini->observaciones_parto }}</p>
                                  </div>

                              <div class="form-group">
                                    <p><span> <strong> 6.3 ANTECENTES POSNATALES </strong></span></p>
                                     <div class="bio-row">

                                          <p><span><strong>CONVULSIONES:</strong></span>{{ $alumnos->historiaini->convulsiones }}</p>


                                  </div>

                                     <div class="bio-row">

                                          <p><span><strong>PRIMERA CRISIS:</strong></span>{{ $alumnos->historiaini->primera_crisis }}</p>


                                  </div>
                                     <div class="bio-row">

                                          <p><span><strong>ULTIMA CRISIS:</strong></span>{{ $alumnos->historiaini->ultima_crisis }}</p>

                                  </div>
                                     <div class="bio-row">

                                          <p><span><strong>CIRUGIAS:</strong></span>{{ $alumnos->historiaini->cirugias }}</p>


                                  </div>

                                    <div class="bio-row">
                                      <p><span><strong>CUALES?</strong></span>{{ $alumnos->historiaini->cuales_cirugias }}</p>

                                  </div>

                                    <div class="bio-row">

                                          <p><span><strong>FAMILIARES:</strong></span>{{ $alumnos->historiaini->familiares }}</p>


                                  </div>

                                   <div class="bio-row">
                                       <p><span><strong>CUALES?</strong></span>{{ $alumnos->historiaini->cuales_familiares }}</p>

                                  </div>

                                  <div class="bio-row">

                                          <p><span><strong>OTROS:</strong></span>{{ $alumnos->historiaini->otros }}</p>

                                  </div>

                                    <div class="bio-row">
                                        <p><span><strong>CUALES?</strong></span>{{ $alumnos->historiaini->cuales_otros }}</p>

                                  </div>
                                    <div class="form-group">
                                          <p><span><strong> EXAMENES ESPECIALIZADOS </strong></span></p>

                                          <p>{{ $alumnos->historiaini->examenes_especializados }}</p>
                                  </div>
                              </div>

          </div>

                              </div>
                          </form>

                      </div>
                  </div>

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

                                          <p>{{ $alumnos->historiaini->pedagogicos }}</p>
                                  </div>


                                  <div class="form-group">
                                          <p><span><strong> TERAPEUTICOS </strong></span></p>

                                          <p>{{ $alumnos->historiaini->terapeuticos }}</p>
                                  </div>


                                  <div class="form-group">
                                          <p><span><strong> FARMACOLOGICOS </strong></span></p>

                                          <p>{{ $alumnos->historiaini->farmacologicos }}</p>
                                  </div>




                              </div>
                          </form>
                      </div>
                  </div>
              </section>
          </div>
</div>


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
                          <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                              <div class="form-group ">

                                  <p>{{ $alumnos->historiaini->expectativas }}</p>


                               </div>
                          </form>
                      </div>
                  </div>
              </section>
          </div>
</div>


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
                          <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                              <div class="form-group ">

                                  <p>{{ $alumnos->historiaini->plan_trabajo }}</p>


                               </div>
                          </form>
                      </div>
                  </div>

              </section>
          </div>
</div>


</div>


<!-- ---------------------------------------------------- PLAN DE TRABAJO SUGERIDO ------------------------------------ -->

              </section>
       </div>

</div>


   </div>






       </div>


   </div>

</body>

@endsection
