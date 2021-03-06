@extends('layout')
@section('content')
<div class="contenido">
   <!-- <img src="img/menu.png" alt="" class="menu-bar">-->

<nav>
       <div class="col-lg-12">


       <h3> <span class="page-header"><i class="fa fa-laptop"></i> Area de salud de: {{ $alumnos->nombres }} {{ $alumnos->apellidos }}</span></h3>
  <ol class="breadcrumb">
       <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
       <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
       <li><i class="fa fa-user-md"></i>Area de salud de: {{ $alumnos->nombres }} {{ $alumnos->apellidos }}</li>
  </ol>

        </div>
    </nav>
         <div class="row ">
        <!--<div class="col-md-3 col-xs-3 col-sm-12 col-xs-12">
                <div class="info-box carpetas " align="center"  >
        <!--<a href="LINK"><img src="LINK IMAGEN"></a>-->

        <!-- <a href="Inscripcion.html"> <img src="img/icons/GenericBlue.png"></a>
         <h4>Inscripcion Alumnos</h4>
 </div>--><!--/.info-box-->
        <!--</div>--><!--/.col-->
        <div class="container-box">

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="h-servicedos" >
                <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                    <i class="fa fa-pencil-square-o fa-lg" ></i>
                </div>
                <div class="h-service-content wow fadeInUp">
                    <br> <center> <h3 id="tittlebox"> Historial<strong> Inicial</strong> </h3><br>

                      @if($alumnos->historiaini==false)
                        <a class="btn btn-danger" href="{{ route('formatos.historiaini', $alumnos)}}"><span>Crear</span></a>
                      @endif
                      @if($alumnos->historiaini==true)
                        <a class="btn btn-danger" href="{{ route('formatos.showhini', $alumnos)}}"><span>Ver</span></a>
                      @endif
                        <br>
                    </center>
                </div>
            </div>
        </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="h-servicetres" >
                <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                    <i class="fa fa-folder-open fa-lg"></i>
                </div>
                <div class="h-service-content wow fadeInUp">
                    <br> <center> <h3 id="tittlebox"> Citas <strong>medicas</strong></h3><br>
                        <a class="btn btn-success"  href="{{ route('cita.index', $alumnos)}}"><span>Ver</span></a>
                        <br>
                    </center>
                </div>
            </div>


        </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="h-servicecuatro" >
                <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                    <i class="fa fa-folder-open fa-lg"></i>
                </div>
                <div class="h-service-content wow fadeInUp">
                    <br> <center> <h3 id="tittlebox"> Formatos de<strong> Terapias</strong> </h3><br>
                        <a class="btn btn-primary" href="{{ route('formatos.index', $alumnos)}}"><span>Ver</span></a>
                        <br>
                    </center>
                </div>
            </div>
        </div>
        </div>





        <!-- --------------------------- calendario ------------------------------------------------------------- -->
        <!--<div class="row">
                <div class="col-md-6 portlets">
    <div class="panel panel-default">
                        <div class="panel-heading">
          <h2><strong>Calendar</strong></h2>
                        <div class="panel-actions">
            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
        </div>

        </div><br><br><br>
        <div class="panel-body">
        <!-- Widget content -->

        <!-- Below line produces calendar. I am using FullCalendar plugin. -->
        <!-- <div id="calendar"></div>

     </div>
   </div>

 </div>




       </div>-->
        <div class="widget-foot">
            <!-- Footer goes here -->
        </div>
    </div>





</div>

@endsection
