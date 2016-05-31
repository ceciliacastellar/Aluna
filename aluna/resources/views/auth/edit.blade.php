@extends('layout')

@section('content')



					<body>

				<!--    <div class="container">

				      <form class="login-form" role="form" method="POST" action="{{ route('register') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        <div class="login-wrap">
				            <p class="login-img"><i class="icon_lock_alt"></i></p>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="icon_profile"></i></span>
				              <input type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}" autofocus>
				            </div>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="icon_profile"></i></span>
				              <input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
				            </div>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
				                <input type="password" class="form-control" placeholder="Password" name="password">
				            </div>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="icon_key_alt"></i></span>
				              <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
				            </div>

				            <button class="btn btn-primary btn-lg btn-block" type="submit">send</button>


				        </div>
				      </form>

				    </div>-->







						<section id="main-content">
					                <section class="wrapper">
					                    <!--overview start-->
					                    <div class="row">
					                        <div class="col-lg-12">
					                            <h3 class="page-header"><i class="fa fa-pencil-square-o"></i> Registrar empleados</h3>
					                            <ol class="breadcrumb">
					                                <li><i class="fa fa-home"></i><a href="index.html">Principal</a></li>
					                                <li><i class="fa fa-pencil-square-o"></i><a href="registro.html">Registro de empleados</a></li>
					                            </ol>
					                        </div>
					                    </div>

					                    <div class="row">
                                <form method="POST" action="{{route('auth.update', $users->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                  <input type="hidden" name="_method" value="PATCH" >
                                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
					                        <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
					                            <div class="panel panel-info registro">
					                                <div class="panel-heading ">
					                                    Registro de empleados
					                                </div>
					                                    <div class="panel-body">
					                                        <div class="form">



																										<form  role="form" method="POST" action="{{ route('register') }}">
																											<input type="hidden" name="_token" value="{{ csrf_token() }}">

					                                                <div class="form-group col-md-5 bio-row ">
					                                                    <div class="input-group col-md-9">
					                                                        <label for="nombre_completo"class=" control-label">Nombre</label>
					                                                        <span class=""><i class=""></i></span>
					                                                        <input type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}" autofocus>
					                                                    </div>
					                                                </div>


					                                            <!--  <div class="form-group col-md-5 bio-row">
																														<label for="area_de_trabajo" class="control-label">Area de trabajo<span class="required"></span></label>
					                                                    <div class="input-group">
					                                                        <select class="form-control" name="area_de_trabajo">
																																			<option value= "" selected="selected">Area de trabajo</option>
					                                                            <option value="Personal administrativo">Personal administrativo</option>
					                                                            <option value="Personal educativo">Personal educativo</option>
					                                                            <option value="Personal de salud">Personal de salud</option>
					                                                        </select>
					                                                    </div>
					                                                </div>-->

					                                                <div class="form-group col-md-5 bio-row">
					                                                    <div class="input-group">
					                                                        <label for="email" class="control-label">E-mail</label>
					                                                        <span class=""><i class=""></i></span>
					                                                        <input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
					                                                    </div>
					                                                </div>

					                                                <div class="form-group col-md-5 bio-row">
					                                                    <div class="input-group">
					                                                        <label for="contaseña" class="control-label">Contraseña</label>
					                                                        <span class=""><i class=""></i></span>
					                                                        <input type="password" class="form-control" placeholder="Password" name="password">
					                                                    </div>
					                                                </div>


					                                                <div class="form-group col-md-5 bio-row">
					                                                    <div class="input-group">
					                                                        <label for="confirmar_contraseña" class="control-label">Confirmar contraseña</label>
					                                                        <span class=""><i class="" ></i></span>
					                                                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
					                                                    </div>
					                                                </div>
					                                            <div>
					                                                  <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
					                                            </div>

					                                        </div>


					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </section>
					    </section>





				  </body>


@endsection
