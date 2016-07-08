@extends('layout')


@section('content')
<section id="container" class="">
  @include('partials/errors')

  <!--main content start-->
<div class="contenido">
          <!--overview start-->
    <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i> {{ trans('pagination.home') }}</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
      </ol>
    </div>
  </div>

        <div class="row">

<!-- Comienzo-->

<div class="container-box">
                          @role('administrativo')
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="h-serviceuno " >
                                  <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                                      <i class="fa fa-pencil fa-lg"></i>
                                  </div>
                                  <div class="h-service-content wow fadeInUp">
                                      <br> <center> <h3 id="tittlebox"> Registro de <strong>alumnos</strong> </h3><br>
                                          <a class="btn btn-info" href="create"><span>Inscribir</span></a><br>
                                          <br>
                                      </center>
                                  </div>
                              </div>
                          </div>
                          @endrole
                          @role('administrativo')
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <div class="h-servicedos" >
                              <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                                  <i class="fa fa-folder-open fa-lg"></i>
                              </div>
                              <div class="h-service-content wow fadeInUp">
                                  <br> <center> <h3 id="tittlebox"> Listar <strong>alumnos</strong> </h3><br>
                                      <a class="btn btn-primary" href="alumno"><span>Ver</span></a><br>
                                      <br>
                                  </center>
                              </div>

                          </div>
                      </div>
                      @endrole
                      @role('educador')
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="h-servicedos" >
                          <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                              <i class="fa fa-folder-open fa-lg"></i>
                          </div>
                          <div class="h-service-content wow fadeInUp">
                              <br> <center> <h3 id="tittlebox"> Listar <strong>alumnos</strong> </h3><br>
                                  <a class="btn btn-primary" href="alumno"><span>Ver</span></a><br>
                                  <br>
                              </center>
                          </div>

                      </div>
                  </div>
                  @endrole
                      @role('salud')
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="h-servicetres" >
                          <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                              <i class="fa fa-folder-open fa-lg"></i>
                          </div>
                          <div class="h-service-content wow fadeInUp">
                              <br> <center> <h3 id="tittlebox"> Citas <strong>medicas</strong> </h3><br>
                                  <a class="btn btn-primary" href="alumno"><span>Ver</span></a><br>
                                  <br>
                              </center>
                          </div>

                      </div>
                  </div>
                  @endrole
                      @role('administrativo')
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <div class="h-servicetres" >
                              <div class="icon-wrap ico-bg round-fifty wow fadeInDown ">
                                  <i class="fa fa-pencil-square-o fa-lg" ></i>
                              </div>
                              <div class="h-service-content wow fadeInUp">
                                  <br> <center> <h3 id="tittlebox"> Registro de <strong>empleados</strong> </h3><br>
                                      <a class="btn btn-danger" href="auth/register"><span>Registrar</span></a><br>
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
                                    <br> <center> <h3 id="tittlebox"> Lista de <strong>empleados</strong> </h3><br>
                                        <a class="btn btn-success" href="auth/index"><span>Ver</span></a><br>
                                        <br>
                                    </center>
                                </div>
                            </div>
                        </div>
                        @endrole







    </div><!--/col-->






          </div>



            <!-- statics end -->




          <!-- project team & activity start -->





          <!-- project team & activity end -->

</div>
  <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->




@endsection
