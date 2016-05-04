@extends('layout')


@section('content')
<section id="container" class="">
  @include('partials/errors')

  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
          <!--overview start-->
    <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i> {{ trans('pagination.home') }}</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="principal">{{ trans('pagination.home') }}</a></li>
        <li><i class="fa fa-laptop"></i>Home</li>
      </ol>
    </div>
  </div>

        <div class="row">

<!-- Comienzo-->

<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<div class="info-box blue-bg">
<!--<a href="LINK"><img src="LINK IMAGEN"></a>-->

                                    <a href="nuevo" img src="img/azulver.jpg">Inscripcion</a>

</div><!--/.info-box-->

<div class="info-box blue-bg">
<!--<a href="LINK"><img src="LINK IMAGEN"></a>-->

                                    <a href="alumno/index" img src="img/azulver.jpg">Alumno</a>

</div><!--/.info-box-->

</div><!--/.col-->








    </div><!--/col-->






          </div>



            <!-- statics end -->




          <!-- project team & activity start -->





          <!-- project team & activity end -->

      </section>
  </section>
  <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->




@endsection
