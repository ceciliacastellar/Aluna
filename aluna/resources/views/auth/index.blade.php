@extends('layout')

@section('content')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Lista de empleados</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="principal">{{ trans('pagination.home') }}</a></li>
      <li><i class="fa fa-table"></i>Lista de personal</li>

    </ol>
  </div>
</div>
        <!-- page start-->



                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_calendar"></i> Nombre</th>
                           <th><i class="icon_profile"></i> Email</th>

                           <th colspan="3"><i class="icon_profile"></i> Password</th>
                        </tr>

                        @foreach($users as $users)
                        <tr>
                           <td>{{ $users->name }}</td>
                           <td>{{ $users->email }}</td>
                            <td>{{ $users->password}}</td>






                        </tr>



                        @endforeach

                     </tbody>



                  </table>
                </section>
            </div>
        </div>

        @endsection
