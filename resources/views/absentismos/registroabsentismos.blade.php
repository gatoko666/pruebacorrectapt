
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
                    <h4 class="tittle-w3-agileits mb-4">Registro de absentismos


                        </h4>
                    <div class="container">
                        Desde

                            <input id="datepicker1" width="276" />
                            <script>
                                $('#datepicker1').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            Hasta
                            <input id="datepicker2" width="276" />
                            <script>
                                $('#datepicker2').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <button type="button" class="btn btn-primary">
                                    Buscar
                                       
                                    </button> 

                        </div>
                  
                        <br>

                        <div >

                                <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tabla</a>
                                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Gráfico</a>
                                          
                                        </div>
                                      </nav>
                                      <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                                <table class="table table-bordered table-striped">
                                                        <thead>
                                                                <tr>
                                                                        <th class="text-center">
                                                                            Trabajadores
                                                                            <br>
                                                                           
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Fecha 
                                                                            <br>
                                                                           
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Horas
                                                                            <br>
                                                                            
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Descripción
                                                                            <br>
                                                                         
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Tipo
                                                                            <br>
                                                                         
                                                                        </th>
                                                                        <th class="text-center">
                                                                           Acciones
                                                                        </th>
                                                                       
                                                                            
                                        
                                                                    </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th class="text-nowrap" scope="row">Trabajador 1</th>
                                                                <td>Rob</td>
                                                                <td>6</td>
                                                                <td>Dentista</td>
                                                                <td>Visita médica</td>
                                                                <td>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                                                                <a href="#fee-details1" data-toggle="modal">Editar</a>
                                    
                                                                                
                                                                              </button>  
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                                                            Eliminar
                                                                          </button>
                                                                </td>
                                                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                          <div class="modal-content">
                                                                            <div class="modal-header">
                                                                              <h5 class="modal-title" id="exampleModalLabel2">Confirmación</h5>
                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                              </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                              Eliminar
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                              
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                      
                                      
                                                               
                                                               
                                                                 
                                                            </tr>


                                                            <tr>
                                                                <th class="text-nowrap" scope="row">Trabajador 2</th>
                                                                <td>Rob</td>
                                                                <td>6</td>
                                                                <td>Dentista</td>
                                                                <td>Visita médica</td>
                                                                <td>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                                                                <a href="#fee-details1" data-toggle="modal">Editar</a>
                                    
                                                                                
                                                                              </button>  
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                                                            Eliminar
                                                                          </button>
                                                                </td>
                                                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                          <div class="modal-content">
                                                                            <div class="modal-header">
                                                                              <h5 class="modal-title" id="exampleModalLabel2">Confirmación</h5>
                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                              </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                              Eliminar
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                              
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                      
                                      
                                                               
                                                               
                                                                 
                                                            </tr>
                                                           
                                
                                                            
                                                           
                                                           
                                                        </tbody>
                                                    </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                            
                                            
                                                     <!--// Bar-Chart -->
                                                            <div class="outer-w3-agile mt-3">
                                                                <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
                                                                <div id="chart-1"></div>
                                                            </div>

                                        </div>                                         
                                      </div>
                        </div> 
                </div>
         </section>   
         
        
                <!--Modale Editar -->


                <!-- Modal -->
                <div class="modal fade" id="fee-details1" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-xl">
                        <div class="modal-content">
                            
                            <div class="modal-body">
                              
                                    <section class="grids-section bd-content">
                                            <!-- Grids Info -->
                                         




                                            <table class="table table-bordered table-striped">
                                                    <thead>
                                                            <tr>
                                                                    <th class="text-center">
                                                                        Trabajadores
                                                                        <br>
                                                                       
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Fecha 
                                                                        <br>
                                                                       
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Horas
                                                                        <br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Descripción
                                                                        <br>
                                                                     
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Tipo
                                                                        <br>
                                                                     
                                                                    </th>
                                                                    <th class="text-center">
                                                                       Acciones
                                                                    </th>
                                                                   
                                                                        
                                    
                                                                </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-nowrap" scope="row">Trabajador 1</th>
                                                            <td>None (auto)</td>
                                                            <td>540px</td>
                                                            <td>720px</td>
                                                            <td>960px</td>
                                                            <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                                                            Guardar Cambio
                                                                    </button>
                            
                                                                  
                                                            </td>
                                                          
                                  
                                                           
                                                           
                                                             
                                                        </tr>
                                                        <tr>
                                                            <th class="text-nowrap" scope="row">Trabajador 2</th>
                                                            <td>
                                                                <code>.col-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-sm-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-md-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-lg-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-xl-</code>
                                                            </td>
                                                            
                                                        
                                                               
                                                            
                                                        </tr>
                            
                                                        <tr>
                                                            <th class="text-nowrap" scope="row">Trabajador 3</th>
                                                            <td>None (auto)</td>
                                                            <td>540px</td>
                                                            <td>720px</td>
                                                            <td>960px</td>
                                                            <td>1140px</td>
                                                       
                                                       
                                                            
                                                             
                                                        </tr>
                                                        <tr>
                                                            <th class="text-nowrap" scope="row">Trabajador 4</th>
                                                            <td>
                                                                <code>.col-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-sm-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-md-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-lg-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-xl-</code>
                                                            </td>
                                                           
                                                         
                                                                
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th class="text-nowrap" scope="row">Trabajador 5</th>
                                                            <td>None (auto)</td>
                                                            <td>540px</td>
                                                            <td>720px</td>
                                                            <td>960px</td>
                                                            <td>1140px</td>
                                                          
                                                             
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th class="text-nowrap" scope="row">Totales</th>
                                                            <td>
                                                                <code>.col-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-sm-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-md-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-lg-</code>
                                                            </td>
                                                            <td>
                                                                <code>.col-xl-</code>
                                                            </td>
                                                           
                                                     
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>















                            
                                     </section>      
                                     <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                         
                                          </div>

                            
                            
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


    
                <!--// three-grids -->
                


         




   
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
    
 