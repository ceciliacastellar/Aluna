@extends('layout')


@section('content')
<section id="container" class="">
  @include('partials/errors')

  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> FUNDACIÓN ALUNA</h3>
            <ol class="breadcrumb">

              <li><i class="fa fa-home"></i><a href="principal">{{ trans('pagination.home') }}</a></li>
              <li><i class="icon_document_alt"></i>Ficha de matricula</li>
              <li><i class="fa fa-files-o"></i>Información del niño, niña o joven</li>
            </ol>
          </div>
        </div>
    <!-- -------------------------------------- LOS NOMBRES DE LOS FORMULARIOS ------------------------------------------ -->


    <!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
    <div class="row">
                   <div class="col-lg-12">
                      <section class="panel">
                            <header class="panel-heading tab-bg-info">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#alumno">
                                            <i class="icon-home"></i>
                                            Alumno
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#padres">
                                            <i class="icon-user"></i>
                                            Padres
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#acudiente">
                                            <i class="icon-envelope"></i>
                                            Acudiente
                                        </a>
                                    </li>

                                    <li class="">
                                        <a data-toggle="tab" href="#emergencia">
                                            <i class="icon-envelope"></i>
                                            Emergencia
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#fundacion">
                                            <i class="icon-envelope"></i>
                                            Fundación
                                        </a>

                                    </li>
                                </ul>

    <!-- --------------------------------------- PESTAÑAS------------------------------------------------- -->
    <!-- --------------------------------------- ALUMNO --------------------------------------------------- -->
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="alumno" class="tab-pane active">
                                        <div class="alumno">
                                             <div class="row">
                                  <div class="col-lg-12">
                                      <section class="panel">
                                          <header class="panel-heading">
                                              Información del niño, niña o joven
                                          </header>
                                          <div class="panel-body">
                                              <div class="form">
                                                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                <!-- ------------------------------------- SUBIR IMAGEN -------------------------------------------------- -->
                           <div class="form-group">
                                      <input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                         </div>
                        <div class="form-group">
                                  <button class="btn btn-primary" type="submit">Subir</button>
                                  <button class="btn btn-default" type="button">Reset</button>
                         </div>

            <!-- ------------------------------------- SUBIR IMAGEN -------------------------------------------------- -->




    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                                      <div class="form-group ">
                                                           <label for="cname" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                                           <div class="col-lg-10">
                                                               <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                                           </div>
                                                       </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                                          <div class="form-group ">
                                                              <label for="cname" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                                              <div class="col-lg-10">
                                                                  <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                                              </div>
                                                          </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

                                                          <div class="form-group">
                                                            <label for="cname" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                                              <div class="col-xs-3">
                                                                  <select class="form-control">
                                                                      <option>Tipo de documento</option>
                                                                      <option>R.C.</option>
                                                                      <option>T.I.</option>
                                                                      <option>C.C.</option>
                                                                  </select>
                                                              </div>

                                                              <label for="cname" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                                              <div class="col-lg-3">
                                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                                              </div>

                                                          </div>






    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
              <!-- ------------------------------------------ -------- PEDIR FECHA DE NACIMIENTO ------------------------------------------------------ -->
                                                   <div class="form-group">
                                                       <label for="cname" class="control-label col-xs-3">FECHA DE NACIMIENTO:<span class="required">*</span> </label>
                                                         <div class="col-xs-3">
                                                             <select class="form-control">
                                                                 <option>Dia</option>
                                                                 <option>1</option>
                                                                 <option>2</option>
                                                                 <option>3</option>
                                                                 <option>4</option>
                                                                 <option>5</option>
                                                                 <option>6</option>
                                                                 <option>7</option>
                                                                 <option>8</option>
                                                                 <option>9</option>
                                                                 <option>10</option>
                                                                 <option>11</option>
                                                                 <option>12</option>
                                                                 <option>13</option>
                                                                 <option>14</option>
                                                                 <option>15</option>
                                                                 <option>16</option>
                                                                 <option>17</option>
                                                                 <option>18</option>
                                                                 <option>19</option>
                                                                 <option>20</option>
                                                                 <option>21</option>
                                                                 <option>22</option>
                                                                 <option>23</option>
                                                                 <option>24</option>
                                                                 <option>25</option>
                                                                 <option>26</option>
                                                                 <option>27</option>
                                                                 <option>28</option>
                                                                 <option>29</option>
                                                                 <option>30</option>
                                                                 <option>31</option>

                                                             </select>
                                                         </div>

                                                         <div class="col-xs-3">
                                                             <select class="form-control">
                                                                 <option>Mes</option>
                                                                 <option>Enero</option>
                                                                 <option>Febrero</option>
                                                                 <option>Marzo</option>
                                                                 <option>Abril</option>
                                                                 <option>Mayo</option>
                                                                 <option>Junio</option>
                                                                 <option>Julio</option>
                                                                 <option>Agosto</option>
                                                                 <option>Septiembre</option>
                                                                 <option>Octubre</option>
                                                                 <option>Noviembre</option>
                                                                 <option>Diciembre</option>

                                                             </select>
                                                         </div>
                                                         <div class="col-xs-3">
                                                             <select class="form-control">
                                                                 <option>Año</option>
                                                                 <option>1950</option>
                                                                 <option>1951</option>
                                                                 <option>1952</option>
                                                                 <option>1953</option>
                                                                 <option>1954</option>
                                                                 <option>1955</option>
                                                                 <option>1956</option>
                                                                 <option>1957</option>
                                                                 <option>1958</option>
                                                                 <option>1959</option>
                                                                 <option>1960</option>
                                                                 <option>1961</option>
                                                                 <option>1962</option>
                                                                 <option>1963</option>
                                                                 <option>1964</option>
                                                                 <option>1965</option>
                                                                 <option>1966</option>
                                                                 <option>1967</option>
                                                                 <option>1968</option>
                                                                 <option>1969</option>
                                                                 <option>1970</option>
                                                                 <option>1971</option>
                                                                 <option>1972</option>
                                                                 <option>1973</option>
                                                                 <option>1974</option>
                                                                 <option>1975</option>
                                                                 <option>1976</option>
                                                                 <option>1977</option>
                                                                 <option>1978</option>
                                                                 <option>1979</option>
                                                                 <option>1980</option>
                                                                 <option>1981</option>
                                                                 <option>1982</option>
                                                                 <option>1983</option>
                                                                 <option>1984</option>
                                                                 <option>1985</option>
                                                                 <option>1986</option>
                                                                 <option>1987</option>
                                                                 <option>1988</option>
                                                                 <option>1989</option>
                                                                 <option>1990</option>
                                                                 <option>1991</option>
                                                                 <option>1992</option>
                                                                 <option>1993</option>
                                                                 <option>1994</option>
                                                                 <option>1995</option>
                                                                 <option>1996</option>
                                                                 <option>1997</option>
                                                                 <option>1998</option>
                                                                 <option>1999</option>
                                                                 <option>2000</option>
                                                                 <option>2001</option>
                                                                 <option>2002</option>
                                                                 <option>2003</option>
                                                                 <option>2004</option>
                                                                 <option>2005</option>
                                                                 <option>2005</option>
                                                                 <option>2006</option>
                                                                 <option>2007</option>
                                                                 <option>2008</option>
                                                                 <option>2009</option>
                                                                 <option>2010</option>
                                                                 <option>2011</option>
                                                                 <option>2012</option>
                                                                 <option>2013</option>
                                                                 <option>2014</option>
                                                                 <option>2015</option>
                                                                 <option>2016</option>
                                                                 <option>2017</option>
                                                                 <option>2018</option>
                                                                 <option>2019</option>
                                                                 <option>2020</option>
                                                                 <option>2021</option>
                                                                 <option>2022</option>
                                                                 <option>2023</option>
                                                                 <option>2024</option>
                                                                 <option>2025</option>
                                                                 <option>2026</option>
                                                                 <option>2027</option>
                                                                 <option>2028</option>
                                                                 <option>2029</option>
                                                                 <option>2030</option>
                                                                 <option>2031</option>
                                                                 <option>2032</option>
                                                                 <option>2033</option>
                                                                 <option>2034</option>
                                                                 <option>2035</option>
                                                                 <option>2036</option>
                                                                 <option>2037</option>
                                                                 <option>2038</option>
                                                                 <option>2039</option>
                                                                 <option>2040</option>
                                                                 <option>2041</option>
                                                                 <option>2042</option>
                                                                 <option>2043</option>
                                                                 <option>2044</option>
                                                                 <option>2045</option>
                                                                 <option>2046</option>
                                                                 <option>2047</option>
                                                                 <option>2048</option>
                                                                 <option>2049</option>
                                                                 <option>2050</option>
                                                                 <option>2051</option>
                                                                 <option>2052</option>
                                                                 <option>2053</option>
                                                                 <option>2054</option>
                                                                 <option>2055</option>
                                                                 <option>2056</option>
                                                                 <option>2057</option>
                                                                 <option>2058</option>
                                                                 <option>2059</option>
                                                                 <option>2060</option>
                                                                 <option>2061</option>
                                                                 <option>2062</option>
                                                                 <option>2063</option>
                                                                 <option>2064</option>
                                                                 <option>2065</option>
                                                                 <option>2066</option>
                                                                 <option>2067</option>
                                                                 <option>2068</option>
                                                                 <option>2069</option>
                                                                 <option>2070</option>
                                                                 <option>2071</option>
                                                                 <option>2072</option>
                                                                 <option>2073</option>
                                                                 <option>2074</option>
                                                                 <option>2075</option>
                                                                 <option>2076</option>
                                                                 <option>2077</option>
                                                                 <option>2078</option>
                                                                 <option>2079</option>
                                                                 <option>2080</option>
                                                                 <option>2081</option>
                                                                 <option>2082</option>
                                                                 <option>2083</option>
                                                                 <option>2084</option>
                                                                 <option>2085</option>
                                                                 <option>2086</option>
                                                                 <option>2087</option>
                                                                 <option>2088</option>
                                                                 <option>2089</option>
                                                                 <option>2090</option>
                                                                 <option>2091</option>
                                                                 <option>2092</option>
                                                                 <option>2093</option>
                                                                 <option>2093</option>
                                                                 <option>2094</option>
                                                                 <option>2095</option>
                                                                 <option>2096</option>
                                                                 <option>2097</option>
                                                                 <option>2098</option>
                                                                 <option>2099</option>
                                                                 <option>2100</option>
                                                                 <option>2101</option>
                                                                 <option>2102</option>
                                                                 <option>2103</option>
                                                                 <option>2104</option>
                                                                 <option>2105</option>
                                                                 <option>2106</option>
                                                                 <option>2107</option>
                                                                 <option>2108</option>
                                                                 <option>2109</option>
                                                                 <option>2110</option>

                                                             </select>
                                                         </div>
                                                     </div>
    <!-- -------------------------------------------------- PEDIR FECHA DE NACIMIENTO ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR LUGAR DE NACIMIENTO ------------------------------------------------------ -->
                                                      <div class="form-group">
                                                        <label for="cname" class="control-label col-xs-3">LUGAR DE NACIMIENTO:<span class="required">*</span> </label>
                                                          <div class="col-xs-3">
                                                              <select class="form-control">
                                                                  <option>Municipio</option>
                                                              </select>
                                                          </div>
                                                          <div class="col-xs-3">
                                                              <select class="form-control">
                                                                  <option>Departamento</option>
                                                              </select>
                                                          </div>

                                                      </div>

    <!-- -------------------------------------------------- PEDIR LUGAR DE NACIMIENTO ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR EDAD DEL ALUMNO ------------------------------------------------------ -->
                                                      <div class="form-group">
                                                        <label for="cname" class="control-label col-xs-3">EDAD:<span class="required">*</span> </label>
                                                          <div class="col-xs-3">
                                                              <select class="form-control">
                                                                  <option>Edad</option>
                                                              </select>
                                                          </div>

                                                      </div>

    <!-- -------------------------------------------------- PEDIR EDAD DEL ALUMNO ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                                      <div class="form-group ">
                                                        <label for="address" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                                        <div class="col-lg-10">
                                                            <input class=" form-control" id="address" name="address" type="text" />
                                                        </div>
                                                    </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
    <!--

                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="cemail" type="email" name="email" required />
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label for="curl" class="control-label col-lg-2">Website</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="curl" type="url" name="url" />
                                            </div>
                                        </div>



                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                            </div>
                                        </div> -->


                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button class="btn btn-primary" type="submit">Save</button>
                                                          <button class="btn btn-default" type="button">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>

                                      </div>
                                  </section>
                              </div>
                             </div>
                                            <div class="row">
                          <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Información de la persona con quien vive
                                  </header>
                                  <div class="panel-body">
                                      <div class="form">
                                          <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PARENTESCO ------------------------------------------------------ -->
                                         <div class="form-group">
                                              <label for="cname" class="control-label col-lg-2">PARENTESCO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>

                                           </div>


    <!-- -------------------------------------------------- PARENTESCO ------------------------------------------------------ -->




                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>


                                        </div>
                                    </div>
    <!-- --------------------------------------- ALUMNO --------------------------------------------------- -->
    <!--  ------------------------------------- PADRES------------------------------------------------------ -->
                              <div id="padres" class="tab-pane">
                                      <section class="panel">

        <!-- ------------------------------------------------  FORMULARIOS 3 -------------------------------------------------- -->
                <!-- Form validations -->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                            <header class="panel-heading">
                                Información del padre
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
                                           <div class="form-group">
                                            <label for="cname" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">
                                                  <select class="form-control">
                                                      <option>Tipo de documento</option>
                                                      <option>R.C.</option>
                                                      <option>T.I.</option>
                                                      <option>C.C.</option>
                                                  </select>
                                              </div>

                                              <label for="cname" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                            <div class="col-lg-3">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                          </div>





    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN DEL TRABAJO ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN DEL TRABAJO --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </section>
                        </div>
                        </div>





    <!-- ------------------------------------------------------  FORMULARIOS 3 ------------------------------------------------------------- -->
    <!-- ------------------------------------------------------  FORMULARIOS 4 ------------------------------------------------------------ -->
                <!-- Form validations -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Información de la madre
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
                                           <div class="form-group">
                                            <label for="cname" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">
                                                  <select class="form-control">
                                                      <option>Tipo de documento</option>
                                                      <option>R.C.</option>
                                                      <option>T.I.</option>
                                                      <option>C.C.</option>
                                                  </select>
                                              </div>

                                              <label for="cname" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                            <div class="col-lg-3">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>

                                          </div>




    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN DEL TRABAJO ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN DEL TRABAJO --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>


    <!-- -----------------------------------------------------------  FORMULARIOS 4 ----------------------------------------------------------------- -->



                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>

    <!-- --------------------------------------- PADRES----------------------------------------------------- -->
    <!--  -------------------------------------- ACUDIENTE ------------------------------------------------- -->
                                  <div id="acudiente" class="tab-pane">
                                      <section class="panel">

                                          <!-- -----------------------------------------------------------  FORMULARIOS 5 ----------------------------------------------------------------- -->
                <!-- Form validations -->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Información del acudiente
                                  </header>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->
                                           <div class="form-group">
                                            <label for="cname" class="control-label col-xs-3">TIPO DE DOCUMENTO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">
                                                  <select class="form-control">
                                                      <option>Tipo de documento</option>
                                                      <option>R.C.</option>
                                                      <option>T.I.</option>
                                                      <option>C.C.</option>
                                                  </select>
                                              </div>

                                              <label for="cname" class="control-label col-lg-2">NUMERO DEL DOCUMENTO <span class="required">*</span></label>
                                            <div class="col-lg-3">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>

                                          </div>



    <!-- -------------------------------------------------- PEDIR DOCUMENTO DE IDENTIDAD ------------------------------------------------------ -->

    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->
    <!-- -------------------------------------------------- PEDIR DIRECCIÓN DEL TRABAJO ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN DEL TRABAJO --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>


    <!-- ------------------------------------------------------  FORMULARIOS 5 ------------------------------------------------------------- -->



                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>
    <!-- --------------------------------------- ACUDIENTE ------------------------------------------------- -->
    <!-- --------------------------------------- EMERGENCIA ------------------------------------------------- -->
                                  <div id="emergencia" class="tab-pane">
                                      <section class="panel">

    <!-- ------------------------------------------------  FORMULARIOS 6 -------------------------------------------------- -->
                <!-- Form validations -->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Información de otro familiar o persona de confianza para casos de emergencia
                                </header>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->

                                       <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">NOMBRES <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------- PEDIR NOMBRES ------------------------------------------------------ -->
    <!-- -------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">APELLIDOS <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------- PEDIR APELLIDOS ------------------------------------------------------ -->


    <!-- -------------------------------------------------- PEDIR DIRECCIÓN RESIDENCIA ------------------------------------------------------ -->

                                          <div class="form-group ">
                                            <label for="address" class="control-label col-lg-2">DIRECCIÓN DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="address" name="address" type="text" />
                                            </div>
                                        </div>
    <!-- ------------------------------------------------------ PEDIR DIRECCIÓN RESIDENCIA --------------------------------------------------------- -->
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE RESIDENCIA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO RESIDENCIA --------------------------------------------------------- -->

     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">TELEFONO DE TRABAJO <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
     <!-- ------------------------------------------------------ PEDIR TELEFONO TRABAJO --------------------------------------------------------- -->




                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>



                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>

    <!-- --------------------------------------- EMERGENCIA ------------------------------------------------- -->
    <!-- --------------------------------------- FUNDACION ----------------------------------------------------->
                                  <div id="fundacion" class="tab-pane">
                                      <section class="panel">

                                          <!-- ------------------------------------------------  FORMULARIO 7 -------------------------------------------------- -->
                <!-- Form validations -->


                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                          Información para la fundación
                                      </header>
                                  <div class="panel-body">
                                      <div class="form">
                                          <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">

    <!-- ------------------------------------------------  FECHA DE MATRICULA -------------------------------------------------- -->
                               <div class="form-group">
                                            <label for="cname" class="control-label col-xs-3">FECHA DE MATRICULA:<span class="required">*</span> </label>
                                              <div class="col-xs-3">
                                                  <select class="form-control">
                                                      <option>Dia</option>
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                      <option>6</option>
                                                      <option>7</option>
                                                      <option>8</option>
                                                      <option>9</option>
                                                      <option>10</option>
                                                      <option>11</option>
                                                      <option>12</option>
                                                      <option>13</option>
                                                      <option>14</option>
                                                      <option>15</option>
                                                      <option>16</option>
                                                      <option>17</option>
                                                      <option>18</option>
                                                      <option>19</option>
                                                      <option>20</option>
                                                      <option>21</option>
                                                      <option>22</option>
                                                      <option>23</option>
                                                      <option>24</option>
                                                      <option>25</option>
                                                      <option>26</option>
                                                      <option>27</option>
                                                      <option>28</option>
                                                      <option>29</option>
                                                      <option>30</option>
                                                      <option>31</option>

                                                  </select>
                                              </div>

                                              <div class="col-xs-3">
                                                  <select class="form-control">
                                                      <option>Mes</option>
                                                      <option>Enero</option>
                                                      <option>Febrero</option>
                                                      <option>Marzo</option>
                                                      <option>Abril</option>
                                                      <option>Mayo</option>
                                                      <option>Junio</option>
                                                      <option>Julio</option>
                                                      <option>Agosto</option>
                                                      <option>Septiembre</option>
                                                      <option>Octubre</option>
                                                      <option>Noviembre</option>
                                                      <option>Diciembre</option>

                                                  </select>
                                              </div>


                                              <div class="col-xs-3">
                                                  <select class="form-control">
                                                      <option>Año</option>
                                                      <option>1950</option>
                                                      <option>1951</option>
                                                      <option>1952</option>
                                                      <option>1953</option>
                                                      <option>1954</option>
                                                      <option>1955</option>
                                                      <option>1956</option>
                                                      <option>1957</option>
                                                      <option>1958</option>
                                                      <option>1959</option>
                                                      <option>1960</option>
                                                      <option>1961</option>
                                                      <option>1962</option>
                                                      <option>1963</option>
                                                      <option>1964</option>
                                                      <option>1965</option>
                                                      <option>1966</option>
                                                      <option>1967</option>
                                                      <option>1968</option>
                                                      <option>1969</option>
                                                      <option>1970</option>
                                                      <option>1971</option>
                                                      <option>1972</option>
                                                      <option>1973</option>
                                                      <option>1974</option>
                                                      <option>1975</option>
                                                      <option>1976</option>
                                                      <option>1977</option>
                                                      <option>1978</option>
                                                      <option>1979</option>
                                                      <option>1980</option>
                                                      <option>1981</option>
                                                      <option>1982</option>
                                                      <option>1983</option>
                                                      <option>1984</option>
                                                      <option>1985</option>
                                                      <option>1986</option>
                                                      <option>1987</option>
                                                      <option>1988</option>
                                                      <option>1989</option>
                                                      <option>1990</option>
                                                      <option>1991</option>
                                                      <option>1992</option>
                                                      <option>1993</option>
                                                      <option>1994</option>
                                                      <option>1995</option>
                                                      <option>1996</option>
                                                      <option>1997</option>
                                                      <option>1998</option>
                                                      <option>1999</option>
                                                      <option>2000</option>
                                                      <option>2001</option>
                                                      <option>2002</option>
                                                      <option>2003</option>
                                                      <option>2004</option>
                                                      <option>2005</option>
                                                      <option>2005</option>
                                                      <option>2006</option>
                                                      <option>2007</option>
                                                      <option>2008</option>
                                                      <option>2009</option>
                                                      <option>2010</option>
                                                      <option>2011</option>
                                                      <option>2012</option>
                                                      <option>2013</option>
                                                      <option>2014</option>
                                                      <option>2015</option>
                                                      <option>2016</option>
                                                      <option>2017</option>
                                                      <option>2018</option>
                                                      <option>2019</option>
                                                      <option>2020</option>
                                                      <option>2021</option>
                                                      <option>2022</option>
                                                      <option>2023</option>
                                                      <option>2024</option>
                                                      <option>2025</option>
                                                      <option>2026</option>
                                                      <option>2027</option>
                                                      <option>2028</option>
                                                      <option>2029</option>
                                                      <option>2030</option>
                                                      <option>2031</option>
                                                      <option>2032</option>
                                                      <option>2033</option>
                                                      <option>2034</option>
                                                      <option>2035</option>
                                                      <option>2036</option>
                                                      <option>2037</option>
                                                      <option>2038</option>
                                                      <option>2039</option>
                                                      <option>2040</option>
                                                      <option>2041</option>
                                                      <option>2042</option>
                                                      <option>2043</option>
                                                      <option>2044</option>
                                                      <option>2045</option>
                                                      <option>2046</option>
                                                      <option>2047</option>
                                                      <option>2048</option>
                                                      <option>2049</option>
                                                      <option>2050</option>
                                                      <option>2051</option>
                                                      <option>2052</option>
                                                      <option>2053</option>
                                                      <option>2054</option>
                                                      <option>2055</option>
                                                      <option>2056</option>
                                                      <option>2057</option>
                                                      <option>2058</option>
                                                      <option>2059</option>
                                                      <option>2060</option>
                                                      <option>2061</option>
                                                      <option>2062</option>
                                                      <option>2063</option>
                                                      <option>2064</option>
                                                      <option>2065</option>
                                                      <option>2066</option>
                                                      <option>2067</option>
                                                      <option>2068</option>
                                                      <option>2069</option>
                                                      <option>2070</option>
                                                      <option>2071</option>
                                                      <option>2072</option>
                                                      <option>2073</option>
                                                      <option>2074</option>
                                                      <option>2075</option>
                                                      <option>2076</option>
                                                      <option>2077</option>
                                                      <option>2078</option>
                                                      <option>2079</option>
                                                      <option>2080</option>
                                                      <option>2081</option>
                                                      <option>2082</option>
                                                      <option>2083</option>
                                                      <option>2084</option>
                                                      <option>2085</option>
                                                      <option>2086</option>
                                                      <option>2087</option>
                                                      <option>2088</option>
                                                      <option>2089</option>
                                                      <option>2090</option>
                                                      <option>2091</option>
                                                      <option>2092</option>
                                                      <option>2093</option>
                                                      <option>2093</option>
                                                      <option>2094</option>
                                                      <option>2095</option>
                                                      <option>2096</option>
                                                      <option>2097</option>
                                                      <option>2098</option>
                                                      <option>2099</option>
                                                      <option>2100</option>
                                                      <option>2101</option>
                                                      <option>2102</option>
                                                      <option>2103</option>
                                                      <option>2104</option>
                                                      <option>2105</option>
                                                      <option>2106</option>
                                                      <option>2107</option>
                                                      <option>2108</option>
                                                      <option>2109</option>
                                                      <option>2110</option>
                                                  </select>
                                              </div>
                                          </div>

    <!-- ------------------------------------------------  FECHA DE MATRICULA -------------------------------------------------- -->
    <!-- -------------------------------------------------------  CONVENIO -------------------------------------------------------- -->

                                         <div class="form-group">
                                            <label for="cname" class="control-label col-xs-3">CONVENIO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">

                                                      <select class="form-control">
                                                          <option>Convenio</option>
                                                          <option>Particular</option>
                                                          <option>Exito</option>
                                                          <option>Ferrocarriles</option>
                                                          <option>ICBF</option>


                                                      </select>
                                                  </div>


                                              </div>



    <!-- -------------------------------------------------------  CONVENIO ---------------------------------------------------- -->

    <!-- -------------------------------------------------------  MODULO -------------------------------------------------------- -->

                                          <div class="form-group">
                                            <label for="cname" class="control-label col-xs-3">MODULO:<span class="required">*</span> </label>
                                              <div class="col-xs-3">

                                                      <select class="form-control">
                                                          <option>Modulo</option>
                                                          <option>Esmeralda</option>
                                                          <option>Azul</option>
                                                          <option>Rojo</option>
                                                          <option>Japon</option>


                                                      </select>
                                              </div>


                                          </div>


    <!-- -------------------------------------------------------  MODULO ---------------------------------------------------- -->
    <!-- -------------------------------------------------------  PROGRAMA -------------------------------------------------------- -->

                                          <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">PROGRAMA <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                            </div>
                                        </div>
    <!-- -------------------------------------------------------  PROGRAMA ---------------------------------------------------- -->

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                      </div>
                                  </div>
                                </section>
                            </div>
                        </div>
    <!-- ------------------------------------------------------  FORMULARIOS 7 ------------------------------------------------------------- -->




                                      </section>
                                        <section>
                                            <div class="row">
                                            </div>
                                        </section>
                                    </div>

    <!-- --------------------------------------- FUNDACION ----------------------------------------------------->
                                </div>
                            </div>
                      </section>
                   </div>
    </div>

      </section>
  </section>
  <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js" ></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script>

  //knob
  $(function() {
    $(".knob").knob({
      'draw' : function () {
        $(this.i).val(this.cv + '%')
      }
    })
  });

  //carousel
  $(document).ready(function() {
      $("#owl-slider").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true

      });
  });

  //custom select box

  $(function(){
      $('select.styled').customSelect();
  });

/* ---------- Map ---------- */
$(function(){
$('#map').vectorMap({
  map: 'world_mill_en',
  series: {
    regions: [{
      values: gdpData,
      scale: ['#000', '#000'],
      normalizeFunction: 'polynomial'
    }]
  },
backgroundColor: '#eef3f7',
  onLabelShow: function(e, el, code){
    el.html(el.html()+' (GDP - '+gdpData[code]+')');
  }
});
});



</script>
</section>
@endsection
