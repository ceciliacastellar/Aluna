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
            <li><i class="fa fa-th-list"></i>Formato de psicologia</li>

       </ol>



        </div>
    </nav>
   <br>
   <br>

<form method="POST" action="{{ route('formatos.storepsico', $alumnos->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token()}}">
   <div class="row">

       <div class=" col-lg-12">
            <section class="panel panel-info">
                <header class="panel-heading">
                      Examen mental
                    </header>
               <div class="panel-body">
                   <div class="form">

                           <div class="form-group ">
                             <div class="form-group">
                                         <input type="hidden" class="form-control" name="alumno_id"  value="{{ $alumnos->id }}"  minlength="5" type="text" required />
                             </div>

                             <div class="form-group ">
                                 <p><span><strong>Porte y actitud</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="porte_actitud" name="porte_actitud"></textarea>
                             </div>

                               <div class="form-group ">
                                 <p><span><strong>Conciencia</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="conciencia" name="conciencia"></textarea>
                             </div>

                               <p><span><h4><strong><ins>Sensorio</ins></strong></h4></span></p>
                               <br>
                           <div class="form-group">
                                 <p><span><strong>1. Orientación</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="orientacion" name="orientacion"></textarea>
                           </div>

                               <div class="form-group">
                                <p><span><strong>2. Atención</strong></span> </p>
                                    <textarea class="form-control" rows="3" id="atencion" name="atencion"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>3. Memoria</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="memoria" name="memoria"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>4. Inteligencia</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="inteligencia" name="inteligencia"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Psicomotora</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="psicomotora" name="psicomotora"></textarea>
                           </div>

                               <div class="form-group"> </p>
                                 <p><span><strong>Afecto</strong></span></p>
                                     <textarea class="form-control" rows="3" id="afecto"name="afecto"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Pensamiento</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="pensamiento" name="pensamiento"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Lenguaje y comunicación</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="lenguaje_comunicacion" name="lenguaje_comunicacion"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Sensopercepción</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="sensopercepcion" name="sensopercepcion"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Juicio</strong></span> </p>
                               <textarea class="form-control" rows="3" id="juicio" name="juicio"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Prospección</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="prospeccion" name="prospeccion"></textarea>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Introspección</strong></span> </p>
                                     <textarea class="form-control" rows="3" id="introspeccion" name="introspeccion"></textarea>
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
                                 <p><span><strong>Procesos cognitivos/ cognitivo</strong></span>
                                     <textarea class="form-control" rows="4" id="procesos_cognitivos" name="procesos_cognitivos"></textarea></p>
                             </div>

                               <div class="form-group ">
                                 <p><span><strong>Conocimientos académicos</strong></span>
                                     <textarea class="form-control" rows="3" id="conocimientos_academicos" name="conocimientos_academicos"></textarea></p>
                             </div>



                           <div class="form-group">
                                 <p><span><strong>Socialización y juego</strong></span>
                                     <textarea class="form-control" rows="3" id="socializacion_juego" name="socializacion_juego"></textarea></p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Sexualidad y desarrollo psicosexual</strong></span>
                                     <textarea class="form-control" rows="3" id="sexualidad_desarrollo" name="sexualidad_desarrollo"></textarea></p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Repertorio conductual</strong></span>
                                     <textarea class="form-control" rows="3" id="repertorio_conductal" name="repertorio_conductal"></textarea></p>
                           </div>

                               <div class="form-group">
                                 <p><span><strong>Recomendaciones</strong></span>
                                     <textarea class="form-control" rows="3" id="recomendaciones" name="recomendaciones"></textarea></p>
                           </div>







                               </div>



                   </div>
                 </form>
                 <center>   <div class="btn">
                   <button type="submit" class="btn btn-info" >Guardar </button>
                   </div></center>

               </div>
            </section>
       </div>
   </div>



<!-------------------------------------------------------------------------------------------------------------------------------------->


</div>


@endsection
