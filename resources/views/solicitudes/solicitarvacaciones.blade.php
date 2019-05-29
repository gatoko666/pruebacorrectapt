 
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
                            <h4 class="tittle-w3-agileits mb-4">Solicitud Vacaciones </h4>
                            <div class="container">
                                    <form>
                                            <div class="form-group row">
                                              <label for="staticEmail" class="col-sm-2 col-form-label">Trabajador</label>
                                              <div class="col-sm-5">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Trabajador1">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="inputlocalizacion" class="col-sm-2 col-form-label">Localización</label>
                                              <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputlocalizacion" placeholder="Localización">
                                              </div>
                                            </div>

                                              <div class="form-group row">
                                              <label for="inputdesde" class="col-sm-2 col-form-label">Desde</label>
                                              <div class="col-sm-10">
                                                    <input id="datepicker1" width="276" />
                                                                <script>
                                                                    $('#datepicker1').datepicker({
                                                                        uiLibrary: 'bootstrap4'
                                                                    });
                                                </script>
                                            </div>
                                              </div>
                                              <div class="form-group row">
                                              <label for="inputhasta" class="col-sm-2 col-form-label">Hasta</label>
                                              <div class="col-sm-10">
                                                    <input id="datepicker2" width="276" />
                                                    <script>
                                                        $('#datepicker2').datepicker({
                                                            uiLibrary: 'bootstrap4'
                                                        });
                                                    </script>
                                               
                                              </div>
                                              </div>
                                              <div class="form-group row">
                                              <label for="inputcomentario" class="col-sm-2 col-form-label">Comentario</label>
                                              <div class="col-sm-5">
                                                <input type="text" class="form-control" id="inputcomentario" placeholder="Comentario">
                                              </div>
                                              </div>
                                               

                                              
                                            </div>
                                            <button type="submit" class="btn btn-primary ">Enviar</button>
                                          </form>
                                       
                            </div>
                            @include('partials/footer')
                            
                        </div>
                       
                    </div>
              
                </section>
               
            </div>
            
            
                <!--// Countdown -->
                <!-- Copyright -->
                 
            </div>

                
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
    
 