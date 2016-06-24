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



                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_documents_alt"></i> Numero Documento</th>
                           <th><i class="icon_calendar"></i> Nombres</th>
                           <th><i class="icon_profile"></i> Apellidos</th>
                           <th><i class="icon_document"></i> Convenio</th>
                           <th colspan="4"><center><i class="icon_cogs"></i>Accion</center></th>
                        </tr>

                        @foreach($alumnos as $alumnos)
                        <tr>
                          <td>{{ $alumnos->numero_documento }}</td>
                           <td>{{ $alumnos->nombres }}</td>
                           <td>{{ $alumnos->apellidos }}</td>
                           <td>{{ $alumnos->convenio }}</td>


                             <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="{{ route('alumno.show', $alumnos)}}"><i class="fa fa-eye"></i></a>
                              </div>
                              </td>
                              @role('administrativo')
                              <td>
                               <div class="btn-group">
                                   <a class="btn btn-primary"  href="{{ route('alumno.edit', $alumnos)}}"><i class="fa fa-edit"></i></a>
                               </div>
                               </td>
                               @endrole
                               @role('salud')
                               <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary"  href="{{ route('cita.index', $alumnos)}}">Citas</a>
                                </div>
                                </td>
                                @endrole





                        </tr>



                        @endforeach

                     </tbody>



                  </table>
</div>

        @endsection
