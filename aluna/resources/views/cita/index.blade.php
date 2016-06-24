@extends('layout')

@section('content')

<!--main content start-->
<div class="contenido">
<div class="row">
  <div class="col-lg-12 ">
    <h3 class="page-header"><i class="fa fa-table"></i> Listado de citas </h3>
    <a class="btn btn-primary" style="position:absolute; left:85%; top:5%" href="{{ route('cita.seecreate', $alumnos)}}">Crear Cita</a>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
      <li><i class="fa fa-table"><a href="/alumno"></i>Listado de alumnos</a></li>
      <li><i class="fa fa-th-list"></i>Listado de citas de: {{ $alumnos->nombres }}</li>
    </ol>
  </div>
</div>
        <!-- page start-->
                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_documents_alt"></i> Nombre medico o especialista</th>
                           <th><i class="icon_calendar"></i> Area</th>
                           <th><i class="icon_profile"></i> Fecha</th>
                           <th><i class="icon_document"></i> Hora</th>
                           <th colspan="4"><center><i class="icon_cogs"></i>Acción</center></th>
                        </tr>
                        @foreach($citas as $citas)
                        <tr>
                           <td>{{ $citas->nombre_medico }}</td>
                           <td>{{ $citas->area }}</td>
                           <td>{{ $citas->fecha }}</td>
                           <td>{{ $citas->hora }}</td>
                           <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="{{ route('cita.edit', $citas)}}">Ver</a>
                              </div>
                            </td>
                              <!--<td>
                               <div class="btn-group">
                                   <a class="btn btn-primary"  href="">Editar</a>
                               </div>
                             </td>-->
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
        </div>
@endsection
