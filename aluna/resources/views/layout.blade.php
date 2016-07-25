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

    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>

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


    <!--header end-->
    <header class="main-header blue-bg">

<!-- LOGO -->
<div class="logo navbar-form">
<i href="#navigation-main" class="btn btn-purple menu-bar fa fa-bars" ></i>
<span ></span>
<a href="/principal" id="logo">  <strong>FUNDACION </strong><span class="litea">A</span><span class="litel">L</span><span class="liteu">U</span><span class="liten">N</span><span class="liteaa">A</span></a>
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
</div>

            <!--logo end-->


            <div class="top-nav notification-row">

                    <!-- user login dropdown start-->
						login dropdown end -->

                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
        <div class="sidebar">

                    <h2><a href= "/principal">Menú</a></h2>
                    <ul>
                    @role('administrativo')
                    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Registrar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="" href="/create">Alumnos</a></li>
                            <li><a class="" href="/auth/register">Empleados</a></li>
                        </ul>
                    </li>
                    @endrole
                    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Listados<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="" href="/alumno">Alumnos</a></li>
                                @role('administrativo')
                                <li><a class="" href="/auth/index">Empleados</a></li>
                                @endrole
                            </ul>
                     </li>
                    </ul>
                </div>

      </aside>
      <!--sidebar end-->
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="/js/abrir.js"></script>
  <script src="/js/jquery-1.11.3.min.js"></script>
  <script src="/js/jquery.slimscroll.min.js"></script>

	@yield('scripts')
</body>
</html>
