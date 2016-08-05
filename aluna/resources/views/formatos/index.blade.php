@extends('layout')
@section('content')
<div class="contenido">
   <!-- <img src="img/menu.png" alt="" class="menu-bar">-->

    <nav>
       <div class="col-lg-12">

 <h3> <span class="page-header"><i class="fa fa-medkit"></i> Formatos de terapias</span></h3>
         <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
              <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
              <li><i class="fa fa-user-md"></i> <a href="{{ route('formatos.salud', $alumnos)}}">Area de salud de: {{ $alumnos->nombres }}{{ $alumnos->apellidos }}</a></li>
              <li><i class="fa fa-th-list"></i>Formatos de terapias</li>
         </ol>



        </div>
    </nav>
   <br>
   <br>




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
            <div class="h-serviceuno " >

                <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                    <i class="fa fa-folder-open fa-lg"></i>
                </div>
                <div class="h-service-content wow fadeInUp">
                    <br> <center> <h3 id="tittlebox"> Fisioterapia<br></h3><br>
                      @if($alumnos->fisioterapia == false)
                        <a class="btn btn-info" href="{{ route('formatos.fisioterapia', $alumnos)}}"><span>Crear</span></a>
                      @endif
                      @if($alumnos->fisioterapia == true)
                        <a class="btn btn-info" href="{{ route('formatos.verfisio', $alumnos)}}"><span>Ver</span></a><br>
                      @endif
                        <br>
                    </center>
                </div>
            </div>
        </div>

            <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="h-servicedos" >
                <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                    <i class="fa fa-folder-open fa-lg" ></i>
                </div>
                <div class="h-service-content wow fadeInUp">
                    <br> <center> <h3 id="tittlebox">Fonoaudiologia  </h3><br>
                        <a class="btn btn-danger" href="fonodiologia.html"><span>Crear</span></a><br>
                        <br>
                    </center>
                </div>
            </div>
        </div>-->

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="h-servicetres" >
                <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                    <i class="fa fa-folder-open fa-lg"></i>
                </div>
                <div class="h-service-content wow fadeInUp">
                    <br> <center> <h3 id="tittlebox">Equinoterapia</h3><br>
                      @if($alumnos->equinoterapia == false)
                        <a class="btn btn-success" href="{{ route('formatos.equinoterapia', $alumnos)}}"><span>Crear</span></a>
                      @endif
                      @if($alumnos->equinoterapia == true)
                        <a class="btn btn-success" href="{{ route('formatos.verequino', $alumnos)}}"><span>Ver</span></a><br>
                      @endif
                        <br>
                    </center>
                </div>
            </div>
        </div>



        </div>


        <div class="widget-foot">
            <!-- Footer goes here -->
        </div>
    </div>



</div>

@endsection
