<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>ALUNA</title>

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles -->

	<link href="/css/widgets.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet" />
	<link href="/css/xcharts.min.css" rel=" stylesheet">
	<link href="/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">


      <header class="header">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo"><strong>Sistema de información de la fundacion </strong> <span class="litea">A</span><span class="litel">L</span><span class="liteu">U</span><span class="liten">N</span><span class="liteaa">A</span>
                <span class="profile-ava">

                </span>
            </a>
            <!--logo end-->


            <div class="top-nav notification-row">

                    <!-- user login dropdown start-->
										<ul class="nav navbar-nav navbar-right">
												@if (Auth::guest())
															<li><a href="{{ route('home') }}">Login</a></li>
															<li><a href="{{ route('register') }}">Register</a></li>
												@else
															<li class="dropdown">
																			<a class="dropdown-toggle username" data-toggle="dropdown"  aria-expanded="false">{{ Auth::user()->name }} <span role="button" class="caret"></span>

																			</a>
																				<ul class="dropdown-menu extended logout">
																						<div class="log-arrow-up"></div>
																						<li class="eborder-top">
																						<li>
																								<a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
																						</li>
																				</ul>
															</li>
											 @endif
										</ul>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="">
                      <a  href="/principal">
                          <i class="icon_house_alt"></i>
                          <span>{{ trans('pagination.home') }}</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="/alumno/create">
                          <i class="icon_pencil-edit"></i>
                          <span>Registrar Alumno</span>

                      </a>

                  </li>
                  <li>
                      <a class="" href="/alumno">
                          <i class="icon_documents_alt"></i>
                          <span>Listar Alumnos</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="/auth/register">
                          <i class="icon_pencil-edit"></i>
                          <span>Registrar personal</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="/auth/index">
                          <i class="icon_documents_alt"></i>
                          <span>Listar personal</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('scripts')
</body>
</html>
