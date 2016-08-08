@extends('layout')
@section('content')


<div class="contenido">
   <!-- <img src="img/menu.png" alt="" class="menu-bar">-->

    <nav>
       <div class="col-lg-12">


       <h3> <span class="page-header"><i class="fa fa-file-text-o"></i> Evaluación psicologica</span></h3>

       <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
            <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
            <li><i class="fa fa-user-md"></i> <a href="{{ route('formatos.salud', $alumnos)}}">Area de salud de: {{ $alumnos->nombres }}{{ $alumnos->apellidos }}</a></li>
            <li><i class="fa fa-th-list"></i><a href="{{ route('formatos.index', $alumnos)}}">Formatos de terapias</a></li>
            <li><i class="fa fa-th-list"></i>Evaluacion de psicologia</li>

       </ol>


        </div>
    </nav>
   <br>
   <br>


   <div class="row">
       <div class=" col-lg-12">
            <section class="panel panel-info">
                <header class="panel-heading">
                      Examen mental
                    </header>
               <div class="panel-body">
                   <div class="form">

                           <div class="form-group ">


                             <div class="form-group ">
                                 <p><span><strong>Porte y actitud:</strong></span></p>
                                     <p>{{ $alumnos->psicologia->porte_actitud }} </p>
                             </div>

                               <div class="form-group ">
                                 <p><span><strong>Conciencia:</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->conciencia }}</p>
                             </div>

                               <p><span><h4><strong><ins>Sensorio</ins></strong></h4></span></p>
                               <br>
                           <div class="form-group">
                                 <p><span><strong>1. Orientación</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->orientacion }}</p>
                           </div>

                               <div class="form-group">
                                <p><span><strong>2. Atención</strong></span> </p>
                                  <p>{{ $alumnos->psicologia->atencion }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>3. Memoria</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->memoria }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>4. Inteligencia</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->inteligencia }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Psicomotora</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->psicomotora }}</p>
                           </div>

                               <div class="form-group"> </p>
                                 <p><span><strong>Afecto</strong></span></p>
                                     <p>{{ $alumnos->psicologia->afecto }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Pensamiento</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->pensamiento }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Lenguaje y comunicación</strong></span> </p>
                                    <p>{{ $alumnos->psicologia->lenguaje_comunicacion }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Sensopercepción</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->sensopercepcion }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Juicio</strong></span> </p>
                              <p>{{ $alumnos->psicologia->juicio }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Prospección</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->prospeccion }}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Introspección</strong></span> </p>
                                     <p>{{ $alumnos->psicologia->introspeccion }}</p>
                           </div>


                               </div>



                   </div>

               </div>
            </section>
       </div>
   </div>

<!-- ------------------------------------------------------------------------------------------------------------------------>

   <div class="row">
       <div class=" col-lg-12">
            <section class="panel panel-info">
                <header class="panel-heading">
                      Desarrollo cognitivo y socioafectivo
                    </header>
               <div class="panel-body">
                   <div class="form">

                           <div class="form-group ">


                             <div class="form-group ">
                                 <p><span><strong>Procesos cognitivos/ cognitivo</strong></span></p>
                                    <p>{{ $alumnos->psicologia->procesos_cognitivos }}</p>
                             </div>

                               <div class="form-group ">
                                 <p><span><strong>Conocimientos académicos</strong></span></p>
                                     <p>{{ $alumnos->psicologia->conocimientos_academicos }}</p>
                             </div>



                           <div class="form-group">
                                 <p><span><strong>Socialización y juego</strong></span></p>
                                    <p>{{ $alumnos->psicologia->socializacion_juego}}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Sexualidad y desarrollo psicosexual</strong></span></p>
                                     {{ $alumnos->psicologia->sexualidad_desarrollo}}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Repertorio conductual</strong></span></p>
                                     <p>{{ $alumnos->psicologia->repertorio_conductal}}</p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Recomendaciones</strong></span></p>
                                     <p>{{ $alumnos->psicologia->recomendaciones}}</p>
                           </div>







                               </div>



                   </div>

               </div>
            </section>
       </div>
   </div>


<!-------------------------------------------------------------------------------------------------------------------------------------->


</div>


@endsection
