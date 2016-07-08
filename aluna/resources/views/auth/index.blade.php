  @extends('layout')

@section('content')
  <section id="container" class="">
    @include('partials/errors')

<!--main content start-->
<div class="contenido">

<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Lista de empleados</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
      <li><i class="fa fa-table"></i>Lista de personal</li>

    </ol>
  </div>
</div>
        <!-- page start-->


<div class="container-box">
                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_calendar"></i> Nombre</th>
                           <th><i class="icon_profile"></i> Email</th>
                        </tr>

                        @foreach($users as $user)
                        <tr>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                        </tr>



                        @endforeach


                     </tbody>



                  </table>
<center>{!! $users->render() !!}</center>
            </div>

          </div>
          </section>


        @endsection
