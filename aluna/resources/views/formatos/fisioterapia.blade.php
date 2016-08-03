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
            <li><i class="fa fa-th-list"></i>Formato de fisioterapia</li>

       </ol>



        </div>
    </nav>
   <br>
   <br>


   <div class="row">
     <form method="POST" action="{{ route('formatos.storefisio', $alumnos->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{ csrf_token()}}">
       <div class=" col-lg-12">
            <section class="panel panel-info">
                <header class="panel-heading">
                       Evaluación
                    </header>
               <div class="panel-body">
                   <div class="form">

                           <div class="form-group ">

                             <div class="form-group">
                                         <input type="hidden" class="form-control" name="alumno_id"  value="{{ $alumnos->id }}"  minlength="5" type="text" required />
                             </div>
                               <div class="form-group">

                                 <div class="bio-row">
                                    <p ><span><strong>1. Alerta</strong></span></p>
                                        <select class="form-control-static" id="alerta" name="alerta">
                                          <option value="" selected="selected">--------</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="N.A">N.A</option>

                                        </select>



                                </div>
                                <div class="bio-row">
                                    <p ><span><strong>2. Orientado</strong></span> </p>
                                        <select class="form-control-static" id="orientado" name="orientado">
                                          <option value="" selected="selected">--------</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="N.A">N.A</option>
                                        </select>



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>3. Lenguaje</strong></span> </p>
                                    <select class="form-control-static"  id="lenguaje" name="lenguaje">
                                      <option value="" selected="selected">--------</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="N.A">N.A</option>
                                        </select>


                                </div>
                                <div class="bio-row">
                                    <p><span><strong>4. Sensopercepción</strong></span> </p>
                                    <select class="form-control-static" id="sensopercepcion" name="sensopercepcion">
                                      <option value="" selected="selected">--------</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="N.A">N.A</option>
                                        </select>



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>5. Alteración de pares craneales</strong></span> </p>
                                        <select class="form-control-static"id="alteracion_pares_craneales" name="alteracion_pares_craneales" onchange="if(this.value=='si') {document.getElementById('cual_pares').disabled = false} else{document.getElementById('cual_pares').disabled = true} ">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                                   <div class="bio-row">
                                    <p><span><strong>¿Cual?</strong></span> </p>
                                        <input class=" form-control-static " id="cual_pares_fisio" name="cual_pares"  type="text">



                                </div>
                               </div>
                                <div class="bio-row">
                                    <p><span><strong>6. Fuerza muscular</strong></span></p>
                                    <select class="form-control-static" id="fuerza_muscular" name="fuerza_muscular">
                                      <option value="" selected="selected">--------</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4-">4-</option>
                                        <option value="4+">4+</option>
                                        <option value="5">5</option>
                                        </select>

                                </div>
                               <div class="form-group">

                                 <div class="bio-row">
                                    <p><span><strong>7. Trofismo</strong></span> </p>
                                        <select class="form-control-static" id="trofismo" name="trofismo">
                                          <option value="" selected="selected">--------</option>
                                            <option value="hipotrofico">Hipotrófico</option>
                                            <option value="eutrofico">Eutrófico</option>
                                            <option value="atrofia">Atrofia</option>
                                            <option value="hipertrofia">Hipertrofia</option>
                                            <option value="pseudohipertrofia">Pseudohipertrofia</option>
                                        </select>



                                </div>


                                <div class="bio-row">
                                    <p><span><strong>8. Tono</strong></span> </p>
                                    <select class="form-control-static" id="tono" name="tono">
                                      <option value="" selected="selected">--------</option>
                                        <option value="normo-tonico">Normo-tónico</option>
                                            <option value="hipotonico">Hipotónico</option>
                                             <option value="atonia">Atonía</option>
                                             <option value="hipertonia">Hipertonía</option>
                                             <option value="espasticidad">Espasticidad</option>
                                             <option value="rigidez">Rigidez</option>
                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>Distribución</strong></span> </p>
                                        <input class=" form-control-static " id="distribucion" name="distribucion"  type="text">



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>9. Reflejos</strong></span> </p>
                                        <select class="form-control-static" id="reflejos" name="reflejos">
                                          <option value="" selected="selected">--------</option>
                                            <option value="normoreflexia">Normoreflexia</option>
                                            <option value="arreflexia">Arreflexia</option>
                                            <option value="hiporreflexia">Hiporreflexia</option>
                                            <option value="hiperreflexia">Hiperreflexia</option>
                                            <option value="clonus">Clonus</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>Signos patologicos:</strong></span></p>
                                        <input class=" form-control-static " id="signos" name="signos"  type="text">



                                </div>
                               </div>
                               <div class="form-group">
                               <div class="bio-row">
                                    <p><span><strong>10. Sensibilidad superficial</strong></span></p>
                                    <select class="form-control-static" id="sensibilidad_superfical" name=" sensibilidad_superficial">
                                      <option value="" selected="selected">--------</option>
                                        <option value="c">C</option>
                                        <option value="alt">Alt</option>
                                        <option value="n.e">N.E</option>
                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>11. Sensibilidad profunda</strong></span></p>
                                        <select class="form-control-static" id="sensibilidad_profunda" name="sensibilidad_profunda">
                                          <option value="" selected="selected">--------</option>
                                            <option value="c">C</option>
                                            <option value="alt">Alt</option>
                                            <option value="n.e">N.E</option>
                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>12. Control de cabeza</strong></span></p>
                                        <select class="form-control-static" id="control_cabeza" name="control_cabeza">
                                          <option value="" selected="selected">--------</option>
                                            <option value="b">B</option>
                                            <option value="r">R</option>
                                            <option value="m">M</option>
                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>13. Control de tronco</strong></span></p>
                                        <select class="form-control-static" id="control_tronco" name="control_tronco">
                                          <option value="" selected="selected">--------</option>
                                            <option value="b">B</option>
                                            <option value="r">R</option>
                                            <option value="m">M</option>
                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>14. Realiza progresiones posicionales</strong></span></p>
                                        <select class="form-control-static" id="progresiones_posicionales" name="progresiones_posicionales">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>15. Realiza rolados</strong></span></p>
                                        <select class="form-control-static" id="rolados" name="rolados">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                                <div class="bio-row">
                                    <p><span><strong>16. Patrones de mov. selectivo</strong></span></p>
                                        <select class="form-control-static" id="patrones_mov_selectivo" name="patrones_mov_selectivo">
                                          <option value="" selected="selected">--------</option>
                                          <option value="b">B</option>
                                            <option value="r">R</option>
                                            <option value="m">M</option>
                                        </select>



                                </div>
                               </div>
                               <div class="form-group">
                                <div class="bio-row">
                                    <p><span><strong>17. Presenta reacciones</strong></span></p>
                                        <select class="form-control-static" id="reacciones" name="reacciones" onchange="if(this.value=='si') {document.getElementById('cuales_reacciones').disabled = false} else{document.getElementById('cuales_reacciones').disabled = true} ">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Cuales?</strong></span></p>
                                        <input class=" form-control-static " id="cuales_reaccioness" name="cuales_reaccioness"  type="text">



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>18. Se desplaza</strong></span></p>
                                    <select class="form-control-static" id="desplaza" name="desplaza" onchange="if(this.value=='si') {document.getElementById('como_hace_desplaza').disabled = false} else{document.getElementById('como_hace_desplaza').disabled = true} ">
                                      <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Como lo hace?</strong></span></p>
                                        <input class=" form-control-static " id="como_hace_desplaza" name="como_hace_desplaza"  type="text">



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>19. Caracteristicas de la pelvis</strong></span></p>
                                        <input class=" form-control-static " id="pelvis" name="pelvis"  type="text">



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>20. Altración en pelvis</strong></span></p>
                                    <select class="form-control-static" id="alteracion_pelvis" name="alteracion_pelvis" onchange="if(this.value=='si') {document.getElementById('cual_alteracion_pelvis').disabled = false} else{document.getElementById('cual_alteracion_pelvis').disabled = true} ">
                                      <option value="" selected="selected">--------</option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Cual?</strong></span></p>
                                        <input class=" form-control-static " id="cual_alteracion_pelvis" name="cual_alteracion_pelvis"  type="text">



                                </div>

                                <div class="bio-row">
                                    <p><span><strong>21. Altración de postura</strong></span></p>
                                        <select class="form-control-static" id="alteracion_postura" name="alteracion_postura" onchange="if(this.value=='si') {document.getElementById('cual_alteracion_postura').disabled = false} else{document.getElementById('cual_alteracion_postura').disabled = true} ">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Cual?</strong></span></p>
                                        <input class=" form-control-static " id="cual_alteracion_postura" name="cual_alteracion_postura"  type="text">



                                </div>


                                <div class="bio-row">
                                    <p><span><strong>22. Presenta restricciones</strong></span></p>
                                    <select class="form-control-static" id="restricciones" name="restricciones" onchange="if(this.value=='si') {document.getElementById('donde_restricciones').disabled = false} else{document.getElementById('donde_restricciones').disabled = true} ">
                                      <option value="" selected="selected">--------</option>
                                        <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Donde?</strong></span></p>
                                        <input class=" form-control-static " id="donde_restricciones" name="donde_restricciones"  type="text">



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>23. Se aplicaron pruebas especialess</strong></span></p>
                                    <select class="form-control-static" id="pruebas_especiales" name="pruebas_especiales" onchange="if(this.value=='si') {document.getElementById('cuales_pruebas_especiales').disabled = false} else{document.getElementById('cuales_pruebas_especiales').disabled = true} ">
                                      <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Cuales?</strong></span></p>
                                        <input class=" form-control-static " id="cuales_pruebas_especiales" name="cuales_pruebas_especiales"  type="text">

                                </div>
                                <div class="bio-row">
                                    <p><span><strong>24. Presenta deformidades</strong></span></p>
                                        <select class="form-control-static" id="deformaciones" name="deformaciones" onchange="if(this.value=='si') {document.getElementById('cuales_deformaciones').disabled = false} else {document.getElementById('cuales_deformaciones').disabled = true} ">
                                          <option value="" selected="selected">--------</option>
                                          <option value="si" selected="selected">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>¿Cuales?</strong></span></p>
                                        <input class=" form-control-static " id="cuales_deformaciones" name="cuales_deformaciones"  type="text">



                                </div>
                               </div>

                               <div class="form-group">
                               <div class="bio-row">
                                    <p><span><strong>25. Longitud real del MID</strong></span></p>
                                        <input class=" form-control-static " id="mid" name="mid"  type="text">



                                </div>


                               <div class="bio-row">
                                    <p><span><strong>26. Longitud real MII</strong></span></p>
                                        <input class=" form-control-static " id="mii" name="mii"  type="text">



                                </div>

                                  <div class="bio-row">
                                    <p><span><strong>27. Componente de torsión tibial</strong></span></p>
                                    <select class="form-control-static" id="torsion_tibial" name="torsion_tibial">
                                      <option value="" selected="selected">--------</option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>

                                        </select>
                                        <select class="form-control-static" id="torsion_tibial2" name="torsion_tibial2">
                                          <option value="" selected="selected">--------</option>
                                            <option value="torsión tibial izquierda">Torsión tibial izquierda</option>
                                            <option value="torsión tibial derecha">Torsión tibial derecha</option>

                                        </select>



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>28. Patrón respiratorio</strong></span></p>
                                        <input class=" form-control-static " id="patron_respiratorio" name="patron_respiratorio"  type="text">



                                </div>
                                <div class="bio-row">
                                    <p><span><strong>29. A la auscultación</strong></span></p>
                                        <input class=" form-control-static " id="auscultacion" name="auscultacion"  type="text">



                                </div>
                               </div>
                               <div class="form-group">
                               <div class="bio-row">
                                    <p><span><strong>30. Camina en punta de pie</strong></span></p>
                                        <select class="form-control-static" id="camina_punta" name="camina_punta">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>31. Camina sobre talones</strong></span></p>
                                        <select class="form-control-static" id="camina_talones" name="camina_talones">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>32. Camina hacia atras</strong></span></p>
                                    <select class="form-control-static" id="camina_atras" name="camina_atras">
                                      <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>33. Camina hacia los lados</strong></span></p>
                                        <select class="form-control-static" id="camina_lados" name="camina_lados">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>34. Camina en cuclillas</strong></span></p>
                                        <select class="form-control-static" id="camina_cuclillas" name="camina_cuclillas">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>35. Camina en barra de equilibrio</strong></span></p>
                                        <select class="form-control-static" id="camina_equilibrio" name="camina_equilibrio">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>36. Se sostiene en un solo pie</strong></span></p>
                                        <select class="form-control-static" id="sostine_pie" name="sostiene_pie">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>37. Sube y baja escaleras</strong></span></p>
                                        <select class="form-control-static" id="escaleras" name="escaleras">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>38. Sube y baja rampa</strong></span></p>
                                        <select class="form-control-static" id="rampa" name="rampa">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>39. Corre</strong></span></p>
                                    <select class="form-control-static" id="corre" name="corre">
                                      <option value="" selected="selected">--------</option>
                                        <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>40. Salta </strong></span></p>
                                    <select class="form-control-static"  id="salta" name="salta">
                                      <option value="" selected="selected">--------</option>
                                        <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>41. Sortea obstaculos</strong></span></p>
                                        <select class="form-control-static" id="obstaculos" name="obstaculos">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>42. Lanza</strong></span></p>
                                        <select class="form-control-static" id="lanza" name="lanza">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>43. Atrapa</strong></span></p>
                                        <select class="form-control-static" id="atrapa" name="atrapa">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>44. Patea</strong></span></p>
                                        <select class="form-control-static" id="patea" name="patea">
                                          <option value="" selected="selected">--------</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>

                                        </select>



                                </div>

                               <div class="bio-row">
                                    <p><span><strong>Nivel de funcionalidad</strong></span></p>
                                        <input class=" form-control-static " id="nivel" name="nivel"  type="text">



                                </div>
                               </div>
                               <div class="bio-row">
                                    <p><span><strong>Dx Fisioterapéutico</strong></span></p>
                                        <input class=" form-control-static " id="fisioterapeutico" name="fisioterapeutico"  type="text">



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>Principal problema motor</strong></span></p>
                                        <input class=" form-control-static " id="motor" name="motor"  type="text">



                                </div>
                               <div class="bio-row">
                                    <p><span><strong>Recomendaciones</strong></span></p>
                                       1. <input class="form-control-static" id="recomendaciones1" name="recomendaciones1"  type="text">
                                       2. <input class=" form-control-static " id="recomendaciones2" name="recomendaciones2"  type="text">
                                       3. <input class=" form-control-static " id="recomendaciones3" name="recomendaciones3"  type="text">



                                </div>




                               </div>
                           </div>


                       </form>

                   </div>
                 <center>   <div class="btn">
                   <button type="submit" class="btn btn-info" >Guardar </button>
                   </div></center>

               </div>

            </section>
       </div>
   </div>

   @endsection
