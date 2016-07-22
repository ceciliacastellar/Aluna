@extends('layout')

@section('content')

<!--main content start-->
<div class="contenido">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> LISTADO DE ALUMNOS</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
      <li><i class="fa fa-table"></i>Listado de alumnos</li>

    </ol>
  </div>
</div>
        <!-- page start-->

  {!! Form::open(['route' => 'alumno.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-left', 'role' => 'search']) !!}
<div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombres']) !!}
</div>
<button type="submit" class="btn btn-primary">Buscar</button>

  {!! Form::close() !!}
  <a href="{{ route('pdf.invoice') }}" class="btn btn-primary pull-right"><i class="fa fa-cloud-download"></i></a>


                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_documents_alt"></i> Numero Documento</th>
                           <th><i class="icon_calendar"></i> Nombres</th>
                           <th><i class="icon_profile"></i> Apellidos</th>
                           <th><i class="icon_document"></i> Convenio</th>
                           <th colspan="4"><i class="icon_cogs"></i>Accion</th>
                        </tr>

                        @foreach($alumnos as $alumno)
                        <tr>
                          <td>{{ $alumno->numero_documento }}</td>
                           <td>{{ $alumno->nombres }}</td>
                           <td>{{ $alumno->apellidos }}</td>
                           <td>{{ $alumno->convenio }}</td>
                           <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="{{ route('alumno.show', $alumno)}}"><i class="fa fa-eye"></i></a>
                              </div>
                           </td>
                              @role('administrativo')
                           <td>
                               <div class="btn-group">
                                   <a class="btn btn-primary"  href="{{ route('alumno.edit', $alumno)}}"><i class="fa fa-edit"></i></a>
                               </div>
                           </td>
                           @endrole
                           @role('salud')
                           <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary"  href="{{ route('cita.index', $alumno)}}">Citas</a>
                                </div>
                           </td>
                           @endrole
                           @role('salud')
                           <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary"  href="{{ route('formatos.salud', $alumno)}}">Otros</a>
                                </div>
                           </td>
                           @endrole
                        </tr>
                        @endforeach

                     </tbody>
                  </table>
                  <center>{!! $alumnos->render() !!}</center>

</div>


        @endsection
