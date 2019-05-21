
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
                            <h4 class="tittle-w3-agileits mb-4">Días Festivos </h4>
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
                              <br>
                            <table class="table table-bordered table-striped">
        
                                    <thead>
                                            <tr>                                        
                                                <th class="text-center">                                             
                                                    <br>                                           
                                                </th>
                                                <th class="text-center"> 
                                                    <br>                                          
                                                </th>
                                                <th class="text-center">                                             
                                                    <br>                                           
                                                </th>                                       
                                                <th class="text-center">                                             
                                                    <br>                                        
                                                </th>
                                                <th class="text-center">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                                                <a href="#fee-details2" data-toggle="modal">Agregar</a>    
                                                              </button> 
                                                        <br>
                                                    
                                                    </th>
                                            </tr>
                                        </thead>
                                <thead>
                                    <tr>                                
                                        <th class="text-center">
                                            Fecha
                                            <br>                                   
                                        </th>
                                        <th class="text-center">
                                            Descripción
                                            <br>                                  
                                        </th>
                                        <th class="text-center">
                                            Especial
                                            <br>                                   
                                        </th>                               
                                        <th class="text-center">
                                            Año
                                            <br>                                
                                        </th>
                                        <th class="text-center">
                                                Acción
                                                <br>                                   
                                            </th>                              
                                    </tr>
                                </thead>
                              
                                <tbody>
                                        @foreach($detalleferiado as $feriado)
                                    <tr>
                                        <th class="text-nowrap" scope="row">{{$feriado->FechaDiaFeriado}}</th>
                                        <td>{{$feriado->DescripcionFeriado}}</td>
                                        <td>                                            

                                                <?php
                                                $t = $feriado->TipoDetalleEspecial;
                                                
                                                if ($t < "2") {
                                                    echo "si";
                                                } else {
                                                    echo "no";
                                                }
                                                ?>
                                           

                                        </td>
                                        <td> 
                                                <?php
                                                $t = $feriado->RepetirFeriado;
                                                
                                                if ($t < "2") {
                                                    echo "si";
                                                } else {
                                                    echo "no";
                                                }
                                                ?>


                                        </td>
                                        <td>
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">
                                                    
                                                        <a href="#fee-details1" data-toggle="modal">Editar</a>   
                                                        <a href="{{ route('feriados.edit',$feriado ?? 0)}})}}" class="btn btn-secondary">Editar</a> 

                                                      </button>  
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">
                                                    Eliminar
                                                  </button>
                                        </td>                                               
                                    </tr>                                   
                                    @endforeach                                          
                                </tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Modal 1
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Modal 2 -->
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

                                            <p>Desea eliminar  este festivo.</p>

                                        
                                      </div>
                                      <div class="modal-footer">
                                            <form action="{{ route('feriados.destroy', $feriado)}}" method="post">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                                  </form>

                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                               
                            </table>
                            {{ $detalleferiado->links() }}
                        </div>
                  
                 </section>        


                 

                                <!-- Modal -->
                                <div class="modal fade" id="fee-details1" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-xl">
                                        <div class="modal-content">
                                            
                                            <div class="modal-body">
                                              
                                                    <section class="grids-section bd-content">
                                                            <!-- Grids Info -->
                                                            <div class="outer-w3-agile mt-3">
                                                                <h4 class="tittle-w3-agileits mb-4">Festivo</h4>
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th class="text-center">
                                                                                Fecha
                                                                                <br>
                                                                               
                                                                            </th>
                                                                            <th class="text-center">
                                                                                Descripción
                                                                                <br>
                                                                              
                                                                            </th>
                                                                            <th class="text-center">
                                                                                Especial
                                                                                <br>
                                                                               
                                                                            </th>
                                                                           
                                                                            <th class="text-center">
                                                                                Año
                                                                                <br>
                                                                            
                                                                            </th>
                                                                            <th class="text-center">
                                                                                    Acción
                                                                                    <br>                                                                        
                                                                                </th>                                                                   
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            
                                                                            <th class="text-nowrap" scope="row">25/12/2018</th>
                                                                            <td>Navidad</td>
                                                                            <td>Si</td>
                                                                            <td>Año</td>
                                                                            <td>
                                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                                                                            Guardar Cambio
                                                                                    </button>
                                            
                                                                            </td>
                                                                             
                                                                        </tr>
                                                                       
                                                                       
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                            
                                                     </section>
                                                     <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                                                 
                                                          </div>        
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <div class="modal fade" id="fee-details2" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-xl">
                                            <div class="modal-content">                                        
                                                <div class="modal-body">
                                                        <section class="grids-section bd-content">
                                                                <!-- Grids Info -->
                                                                <div class="outer-w3-agile mt-3">
                                                                    <h4 class="tittle-w3-agileits mb-4">Festivos</h4>
        
                                                                    <div class="container">
                                                                            <form action="{{ route('feriados.store') }}" method="POST">
                                                                                    @csrf
                                                  
                                                                                    <div class="form-group row">
                                                                                      <label for="inputdescripcion" class="col-sm-2 col-form-label">Descripción</label>
                                                                                      <div class="col-sm-5">
                                                                                        <input type="text" onfocus="this.value=' '"  class="form-control" name="DescripcionFeriado"  id="inputdescripcion" placeholder="Descripción">
                                                                                      </div>
                                                                                    </div>                                        
                                                                                      <div class="form-group row">
                                                                                      <label for="inputdesde" class="col-sm-2 col-form-label">Fecha</label>
                                                                                      <div class="col-sm-10">                                                                                        
        
                                                                                        <input id="datepicker" type="date" name="FechaDiaFeriado"   onfocus="this.value=' '"  width="276" />                                                                                                      
                                                                                    </div>
                                                                                      </div>
                                                                                       <div class="form-group row">
                                                                                            <label for="inputcomentario" class="col-sm-2 col-form-label">Repetir anualmente</label>
                                                                                            <div class="col-sm-5">        
                                                                                              <p align="justify"><select   size="1" name="RepetirFeriado"> 
                                                                                                    <option value="1"selected>Si</option>
                                                                                                    <option value="2" >No</option>                                                                                                    
                                                                                                    </select> </p>                    
                                                                                            </div>
                                                                                            </div>                                                                                       
                                                                                      <div class="form-group row">
                                                                                      <label for="inputcomentario" class="col-sm-2 col-form-label"  >Especial</label>
                                                                                      <div class="col-sm-5">
                                                                                            <p align="justify"><select name="TipoDetalleEspecial" size="1">
                                                                                                    <option value="1"selected>Si</option>
                                                                                                    <option value="2" >No</option>                                                                                                    
                                                                                                    </select> </p>                                        
                                                                                      </div>
                                                                                      </div>                                                                                            
                                                                                    </div>
                                                                                    <button type="submit" class="btn btn-primary ">Agregar</button>
                                                                                  </form>                                
                                                                    </div> 
                                                                </div>                                        
                                                         </section>
                                                         <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                             
                                                              </div>   
                                                </div>
                                                
                                            </div><!-- /.modal-content -->
                                            
                                        </div><!-- /.modal-dialog -->

                                       

                                @include('partials/footer')
                            </div><!-- /.modal -->
   
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
      
        <!--// Calender -->
    
     
        <!--// Count-down -->
     
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
    
 