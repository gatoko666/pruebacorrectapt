
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
                    <div class="container">
                           

                                        
    
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
                                            <p align="justify"><select name="Semana" size="1">
                                                    <option value="valor 1"selected>1</option>
                                                    <option value="valor 2" >2</option>
                                                    <option value="valor 3">3  </option>
                                                    <option value="valor 4">4</option>
                                                    </select> </p>
                                      </div>
                                    </div>
                                  </div>

                      
                            <br>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Trabajadores</th>
                                <th class="text-center">
                                    Lunes
                                    <br>
                                    
                                </th>
                                <th class="text-center">
                                    Martes
                                    <br>
                                    
                                </th>
                                <th class="text-center">
                                    Miercoles
                                    <br>
                                   
                                </th>
                                <th class="text-center">
                                    Jueves
                                    <br>
                                     
                                </th>
                                <th class="text-center">
                                    Viernes
                                    <br>
                                     
                                </th>
                                <th class="text-center">
                                    Sábado
                                    <br>
                                   
                                </th>
                                <th class="text-center">
                                    Domingo
                                    <br>
                                   
                                </th>
                            </tr>
                        </thead>


                    <tbody>
                            <tr>                           
                                    @foreach($detalleoperador as $op)                                   
                                        <th class="text-nowrap" scope="row">{{$op->NombreOperador}}</th>                                                                                 
                                    </tr>  
                                    
                                    <?php 
                                    for ($x = 1; $x <= 7; $x++) {                                             
                                        ?>                                            
                                        <td>
                                                <p align="justify"><select name="nombre" size="1">
                                                        @foreach($detalletiposdeturnos as $dtt)
                                                        <option value="v1"selected>{{$dtt->AbreviacionTurno}}</option> 
                                                        @endforeach     
                                                        </select> 
                                                </p>    
                                           </td>
                             <?php 

                                    } 
                             ?>         
                                    @endforeach 

                    </tbody>

                        <tbody>
                           <tr>
                               <td>
                                   fdgfdg
                               </td>
                               <?php 
                                        for ($x = 1; $x <= 7; $x++) {                                             
                                            ?>                                            
                                            <td>
                                                    <p align="justify"><select name="nombre" size="1">
                                                            @foreach($detalletiposdeturnos as $dtt)
                                                            <option value="v1"selected>{{$dtt->AbreviacionTurno}}</option> 
                                                            @endforeach     
                                                            </select> 
                                                    </p>    
                                               </td>
                                 <?php 

                                        } 
                                 ?>                             
                               
                           </tr>
                             </tr>
                        </tbody>                    
                    </table>
                    <button type="button" class="btn btn-primary">Publicar turnos</button>
                    <button type="button" class="btn btn-primary">Guardar Borrador turnos</button>

                </div>

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
    
 