<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <title>ALUNA</title>

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css">
    <link href="/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	  <link href="/css/widgets.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet" />
	<link href="/css/xcharts.min.css" rel=" stylesheet">
	<link href="/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  </head>

  <body >
  <!-- container section start -->
  <section id="container" class="">


        <header class="main-header blue-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="principal" class="logo"><strong>Sistema de información de la fundacion </strong><span class="litea">A</span><span class="litel">L</span><span class="liteu">U</span><span class="liten">N</span><span class="liteaa">A</span>


            </a>

            <div class="top-nav notification-row">

                    <!-- user login dropdown start-->
										<ul class="nav navbar-nav navbar-right">

															<li class="dropdown">
																			<a class="dropdown-toggle username" data-toggle="dropdown"  aria-expanded="false">{{ Auth::user()->name }} <span role="button" class="caret"></span>
																				<span class="profile-ava">
						                                <img alt="" src="img/avatar1_small.png">
						                            </span>
																			</a>
																				<ul class="dropdown-menu extended logout">
																						<div class="log-arrow-up"></div>
																						<li class="eborder-top">
																						<li>
																								<a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
																						</li>
																				</ul>
															</li>

										</ul>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
            <!--logo end-->


      </header>
      <!--header end-->


	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>
