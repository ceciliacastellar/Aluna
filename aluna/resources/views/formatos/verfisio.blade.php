@extends('layout')
@section('content')

  <div class="contenido">
     <!-- <img src="img/menu.png" alt="" class="menu-bar">-->

      <nav>
         <div class="col-lg-12">


         <h3> <span class="page-header"><i class="fa fa-file-text-o"></i> Evaluación fisioterapia</span></h3>
         <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/principal">{{ trans('pagination.home') }}</a></li>
              <li><i class="fa fa-table"></i><a href="/alumno">Listado de alumnos</a></li>
              <li><i class="fa fa-user-md"></i> <a href="{{ route('formatos.salud', $alumnos)}}">Area de salud de: {{ $alumnos->nombres }}{{ $alumnos->apellidos }}</a></li>
              <li><i class="fa fa-th-list"></i><a href="{{ route('formatos.index', $alumnos)}}">Formatos de terapias</a></li>
              <li><i class="fa fa-th-list"></i>Evaluacion de fisioterapia</li>

         </ol>



          </div>
      </nav>
     <br>
     <br>


     <div class="row">
         <div class=" col-lg-12">
              <section class="panel panel-info">
                  <header class="panel-heading">
                         Evaluación
                      </header>
                 <div class="panel-body">
                     <div class="form">
                         <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                             <div class="form-group ">
                                 <div class="form-group">

                                   <div class="bio-row">
                                      <p ><span><strong>1. Alerta</strong></span> {{ $alumnos->fisioterapia->alerta }}</p>




                                  </div>
                                  <div class="bio-row">
                                      <p ><span><strong>2. Orientado</strong></span>{{ $alumnos->fisioterapia->orientado }} </p>




                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>3. Lenguaje</strong></span>{{ $alumnos->fisioterapia->lenguaje }} </p>



                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>4. Sensopercepción</strong></span>{{ $alumnos->fisioterapia->sensopercepcion }}</p>




                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>5. Alteración de pares craneales</strong></span>{{ $alumnos->fisioterapia->alteracion_pares_craneales }}</p>




                                  </div>
                                     <div class="bio-row">
                                      <p><span><strong>¿Cual?</strong></span> </p>
                                      <p>{{ $alumnos->fisioterapia->cual_pares }}</p>



                                  </div>
                                 </div>
                                  <div class="form-group">
                                      <p><span><strong>6. Fuerza muscular</strong></span>{{ $alumnos->fisioterapia->fuerza_muscular }}</p>


                                  </div>
                                 <div class="form-group">

                                   <div class="bio-row">
                                      <p><span><strong>7. Trofismo</strong></span>{{ $alumnos->fisioterapia->trofismo }} </p>




                                  </div>


                                  <div class="bio-row">
                                      <p><span><strong>8. Tono</strong></span> {{ $alumnos->fisioterapia->tono }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>Distribución</strong></span> </p>
                                      <p>{{ $alumnos->fisioterapia->distribucion }}</p>



                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>9. Reflejos</strong></span>{{ $alumnos->fisioterapia->reflejos }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>Signos patologicos:</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->signos }}</p>



                                  </div>
                                 </div>
                                 <div class="form-group">
                                 <div class="bio-row">
                                      <p><span><strong>10. Sensibilidad superficial</strong></span>{{ $alumnos->fisioterapia->sensibilidad_superficial }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>11. Sensibilidad profunda</strong></span>{{ $alumnos->fisioterapia->sensibilidad_profunda }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>12. Control de cabeza</strong></span>{{ $alumnos->fisioterapia->control_cabeza }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>13. Control de tronco</strong></span>control_tronco</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>14. Realiza progresiones posicionales</strong></span>{{ $alumnos->fisioterapia->progresiones_posicionales }}</p>




                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>15. Realiza rolados</strong></span>{{ $alumnos->fisioterapia->rolados }}</p>




                                  </div>

                                  <div class="bio-row">
                                      <p><span><strong>16. Patrones de mov. selectivo</strong></span>{{ $alumnos->fisioterapia->patrones_mov_selectivo }}</p>




                                  </div>
                                 </div>
                                 <div class="form-group">
                                  <div class="bio-row">
                                      <p><span><strong>17. Presenta reacciones</strong></span>{{ $alumnos->fisioterapia->reacciones }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Cuales?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->cuales_reaccioness }}</p>



                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>18. Se desplaza</strong></span>{{ $alumnos->fisioterapia->desplaza }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Como lo hace?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->como_hace_desplaza }}</p>



                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>19. Caracteristicas de la pelvis</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->pelvis }}</p>



                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>20. Altración en pelvis</strong></span>{{ $alumnos->fisioterapia->alteracion_pelvis }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Cual?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->cual_alteracion_pelvis }}</p>



                                  </div>

                                  <div class="bio-row">
                                      <p><span><strong>21. Altración de postura</strong></span>{{ $alumnos->fisioterapia->alteracion_postura }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Cual?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->cual_alteracion_postura }}</p>



                                  </div>


                                  <div class="bio-row">
                                      <p><span><strong>22. Presenta restricciones</strong></span>{{ $alumnos->fisioterapia->restricciones }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Donde?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->donde_restricciones }}</p>



                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>23. Se aplicaron pruebas especialess</strong></span>{{ $alumnos->fisioterapia->pruebas_especiales }}</p>

                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Cuales?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->cuales_pruebas_especiales }}</p>

                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>24. Presenta deformidades</strong></span>{{ $alumnos->fisioterapia->deformaciones }}</p>

                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>¿Cuales?</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->cuales_deformaciones }}</p>



                                  </div>
                                 </div>

                                 <div class="form-group">
                                 <div class="bio-row">
                                      <p><span><strong>25. Longitud real del MID</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->mid }}</p>



                                  </div>


                                 <div class="bio-row">
                                      <p><span><strong>26. Longitud real MII</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->mii }}</p>



                                  </div>

                                    <div class="bio-row">
                                      <p><span><strong>27. Componente de torsión tibial</strong></span>{{ $alumnos->fisioterapia->torsion_tibial }}, {{ $alumnos->fisioterapia->torsion_tibial2 }}</p>




                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>28. Patrón respiratorio</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->patron_respiratorio }}</p>



                                  </div>
                                  <div class="bio-row">
                                      <p><span><strong>29. A la auscultación</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->auscultacion }}</p>



                                  </div>
                                 </div>
                                 <div class="form-group">
                                 <div class="bio-row">
                                      <p><span><strong>30. Camina en punta de pie</strong></span>{{ $alumnos->fisioterapia->camina_punta }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>31. Camina sobre talones</strong></span>{{ $alumnos->fisioterapia->camina_talones }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>32. Camina hacia atras</strong></span>{{ $alumnos->fisioterapia->camina_atras }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>33. Camina hacia los lados</strong></span>{{ $alumnos->fisioterapia->camina_lados }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>34. Camina en cuclillas</strong></span>{{ $alumnos->fisioterapia->camina_cuclillas }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>35. Camina en barra de equilibrio</strong></span>{{ $alumnos->fisioterapia->camina_equilibrio }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>36. Se sostiene en un solo pie</strong></span>{{ $alumnos->fisioterapia->sostiene_pie }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>37. Sube y baja escaleras</strong></span>{{ $alumnos->fisioterapia->escaleras }}</p>




                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>38. Sube y baja rampa</strong></span>{{ $alumnos->fisioterapia->rampa }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>39. Corre</strong></span>{{ $alumnos->fisioterapia->corre }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>40. Salta </strong></span>{{ $alumnos->fisioterapia->salta }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>41. Sortea obstaculos</strong></span>{{ $alumnos->fisioterapia->obstaculos }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>42. Lanza</strong></span>{{ $alumnos->fisioterapia->lanza }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>43. Atrapa</strong></span>{{ $alumnos->fisioterapia->atrapa }}</p>




                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>44. Patea</strong></span>{{ $alumnos->fisioterapia->patea }}</p>



                                  </div>

                                 <div class="bio-row">
                                      <p><span><strong>Nivel de funcionalidad</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->nivel }}</p>



                                  </div>
                                 </div>
                                 <div class="bio-row">
                                      <p><span><strong>Dx Fisioterapéutico</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->fisioterapia }}</p>



                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>Principal problema motor</strong></span></p>
                                      <p>{{ $alumnos->fisioterapia->motor }}</p>



                                  </div>
                                 <div class="bio-row">
                                      <p><span><strong>Recomendaciones</strong></span></p>
                                      1. <p>{{ $alumnos->fisioterapia->recomendaciones1 }}</p>
                                      2. <p>{{ $alumnos->fisioterapia->recomendaciones2 }}</p>
                                      3. <p>{{ $alumnos->fisioterapia->recomendaciones3 }}</p>



                                  </div>




                                 </div>
                             </div>


                         </form>
                     </div>

                 </div>
              </section>
         </div>
     </div>


@endsection
