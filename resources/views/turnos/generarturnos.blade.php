
    @include('partials/header')
    
    <body>
        <div class="se-pre-con"></div>
        <div class="wrapper">


            <!-- Sidebar Holder -->
           
            @include('partials/sidebar')
            <!-- Page Content Holder -->


            @include('partials/menu')
                <!--// top-bar -->


         <section class="grids-section bd-content">
                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Turnos</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                      <br>
                      @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif     
                    <div class="container">
                           
                            <form action="{{ route('generarturnos.store') }}" method="POST">
                                    @csrf
                                        
    
                            </div>
                            <div class="container">
                                    <div class="row">
                                      <div class="col-sm">
                                            Fecha
    
                                            <input id="datepicker1"  onfocus="this.value=' '"  width="276" />
                                            <script>
                                                $('#datepicker1').datepicker({
                                                    uiLibrary: 'bootstrap4'
                                                });
                                            </script>
                                            <button type="button" class="btn btn-primary">
                                                    Buscar
                                                       
                                                    </button> 
                                      </div>
                                      <div class="col-sm">
                                        Semana
                                      </div>
                                      
                                      <div class="col-sm">
                                            <p align="justify"><select name="NumeroSemana[]" >
                                                       
                                                    <option value="Semana1"selected>1</option>
                                                    <option value="Semana2" >2</option>
                                                    <option value="Semana3">3  </option>
                                                    <option value="Semana4">4</option>
                                                    </select> </p>
                                      </div>
                                      <div class="col-sm">
                                            Semana
                                          </div>
                                          
                                          <div class="col-sm">
                                                <p align="justify"><select name="MesDeLaSemanaAsignado[]" >
                                                           
                                                        <option value="Enero"selected>Enero</option>
                                                        <option value="Febrero" >Febrero</option>
                                                        <option value="Marzo">Marzo</option>
                                                        <option value="Abril">Abril</option>
                                                        <option value="Mayo">Mayo</option>
                                                        <option value="Junio">Junio</option>
                                                        <option value="Julio">Julio</option>
                                                        <option value="Agosto">Agosto</option>
                                                        <option value="Septiembre">Septiembre</option>
                                                        <option value="Octubre">Octubre</option>
                                                        <option value="Noviembre">Noviembre</option>
                                                        <option value="Diciembre">Diciembre</option>
                                                        </select> </p>
                                          </div>
                                          <div class="col-sm">
                                                Semana
                                              </div>
                                              
                                              <div class="col-sm">
                                                    <p align="justify"><select name="AnoDeLaSemanaAsignado[]" >                                                               
                                                            <option value="2019"selected>2019</option>                                                           
                                                            </select> </p>
                                              </div>
                                    </div>
                                  </div>

                      
                            <br>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Trabajadores</th>
                                <input   name="DiaSemana[]"  value="lunes"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]" value="lunes" class="text-center">
                                    Lunes
                                    
                                    <br>
                                    
                                </th><input   name="DiaSemana[]"  value="martes"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]" value="martes" class="text-center">
                                    Martes
                                
                                    <br>
                                    
                                </th><input   name="DiaSemana[]"  value="miercoles"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]" value="miercoles" class="text-center">
                                    Miercoles
                                    
                                    <br>
                                   
                                </th>
                                <input   name="DiaSemana[]"  value="jueves"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]" value="jueves" class="text-center">
                                    Jueves
                                    
                                    <br>
                                     
                                </th>
                                <input   name="DiaSemana[]"  value="viernes"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]" value="viernes" class="text-center">
                                    Viernes
                                    
                                    <br>
                                     
                                </th>
                                <input   name="DiaSemana[]"  value="sabado"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]"  value="sabado" class="text-center">
                                    Sábado
                                    
                                    <br>
                                   
                                </th>
                                <input   name="DiaSemana[]"  value="domingo"  type="hidden"  >
                                <th name="DiaDeLaSemanaAsignado[]" value="domingo"  class="text-center">
                                    
                                    
                                    Domingo
                                    
                                    <br>
                                   
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                                          
                                        @foreach($detalleoperador as $op) 
                                        <tr>       <input   name="NombreTrabajadori[]"  value="{{$op->NombreOperador}}"  type="hidden"  >  
                                            <th class="text-nowrap" name="NombreTrabajador"   scope="row">{{$op->NombreOperador}}</th>                                                                                      
                                            
                                            <?php                                    
                                            for ($x = 0; $x <= 6; $x++) {                                             
                                                ?>                                                                                      
                                                <td>
                                                        <p align="justify"><select name="nombreturno[]" >
                                                                @foreach($detalletiposdeturnos as $dtt)
                                                                                                            
                                                                      

                                                                <option value="{{$dtt->AbreviacionTurno}}"selected>{{$dtt->AbreviacionTurno}}</option> 
                                                                
                                                                @endforeach    
                                                            
                                                                </select> 
                                                        </p>                                                        
                                                   </td>
                                                    
                                     <?php 
        
                                            } 
                                     ?>         

                                        </tr> 
                                        @endforeach                            
                        </tbody>
                      
                    </table>
                    <button type="submit"class="btn btn-primary">Publicar turnos</button>                   
                </form>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Borrador turnos</button>          
         </section>         
                <!--// Countdown -->
                <!-- Copyright -->

                @include('partials/footer')



                <!--// Copyright -->
            </div>
        </div>
    
    
        <!-- Required common Js -->
        <script src='js/jquery-2.2.3.min.js'></script>
        <!-- //Required common Js -->
        
        <!-- loading-gif Js -->
        <script src="js/modernizr.js"></script>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function () {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
        <!--// loading-gif Js -->
    
        <!-- Sidebar-nav Js -->
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <!--// Sidebar-nav Js -->
    
     
        <!-- Bar-chart -->
        <script src="js/rumcaJS.js"></script>
        <script src="js/example.js"></script>
        <!--// Bar-chart -->
        <!-- Calender -->
        <script src="js/moment.min.js"></script>
        <script src="js/pignose.calender.js"></script>
     
    
        <!-- profile-widget-dropdown js-->
        <script src="js/script.js"></script>
        <!--// profile-widget-dropdown js-->
     
    
        <!-- dropdown nav -->
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                    function () {
                        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function () {
                        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
        <!-- //dropdown nav -->
    
        <!-- Js for bootstrap working-->
        <script src="js/bootstrap.min.js"></script>
        <!-- //Js for bootstrap working -->
    
    </body>
    
 