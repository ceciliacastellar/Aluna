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

                                    <a href="inscripcion" img src="img/azulver.jpg">Inscripcion</a>
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
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->

<!-- custom select -->
<script src="js/jquery.customSelect.min.js" ></script>
<script src="assets/chart-master/Chart.js"></script>


@endsection
