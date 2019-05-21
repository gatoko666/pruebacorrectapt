estoy en la subcarpeta

<style>
        .uper {
          margin-top: 40px;
        }
      </style>
      <div class="card uper">
        <div class="card-header">
          Edit Book
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif

          <form action="{{ route('feriados.update', $feriado)}}" method="post">
                 
                @csrf
                @method('PATCH')
                <div class="form-group row">
                        <label for="inputdescripcion" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-5">
                          <input type="text" onfocus="this.value=' '"  class="form-control" name="DescripcionFeriado"  value="{{$feriado->DescripcionFeriado}}" id="inputdescripcion" placeholder="Descripción">
                        </div>
                      </div>            


                      <div class="form-group row">
                            <label for="inputdesde" class="col-sm-2 col-form-label">Fecha</label>
                            <div class="col-sm-10">                                                                                        
                
                              <input id="datepicker" type="date" name="FechaDiaFeriado"   value="{{$feriado->FechaDiaFeriado}}" onfocus="this.value=' '"  width="276" />                                                                                                      
                          </div>
                            </div>



                            <div class="form-group row">
                                    <label for="inputcomentario" class="col-sm-2 col-form-label">Repetir anualmente</label>
                                    <div class="col-sm-5">        
                                      <p align="justify"><select   size="1" name="RepetirFeriado"> 
                                            <option value="  <?php  echo $t = $feriado->RepetirFeriado;  ?>"> 
                                                    <?php
                                                    $t = $feriado->RepetirFeriado;                                                    
                                                    if ($t = "2") {
                                                        echo "si";
                                                    } else {
                                                        echo "no";
                                                    }

                                                    ?>
    
                                             </option>
                                             <option value=" <?php  echo $t = $feriado->RepetirFeriado;  ?>">                                                           

                                                    <?php
                                                    $t1 = $feriado->RepetirFeriado;
                                                    $t2="si";
                                                    $t3;

                                                    if (strcmp ($t1,$t2)==0) 
                                                    {
                                                         "si";
                                                    }else{
                                                       echo "no";
                                                    }
                                                    ?>
                                                </option>

                                                                                                                                      
                                            </select> </p>                    
                                    </div>
                                    </div>             




                                    <div class="form-group row">
                                            <label for="inputcomentario" class="col-sm-2 col-form-label"  >Especial</label>
                                            <div class="col-sm-5">
                                                  <p align="justify"><select name="TipoDetalleEspecial" size="1">
                                                        <option value="  <?php echo $t = $feriado->TipoDetalleEspecial;  ?> "selected>
                                                                <?php
                                                                $t = $feriado->TipoDetalleEspecial;
                                                                
                                                                if ($t < "2") {
                                                                    echo "si";
                                                                } else {
                                                                    echo "no";
                                                                }
                                                                ?>



                                                        </option>
                                                    <option value="  <?php echo $t = $feriado->TipoDetalleEspecial;  ?>   ">                                                         

                                                            <?php
                                                            $t1 = $feriado->TipoDetalleEspecial;
                                                            $t2="si";
                                                            $t3;
                                                            if (strcmp ($t1,$t2)==0) 
                                                            {
                                                                echo "no";
                                                            }else{
                                                                echo "si";
                                                            }
                                                            ?>
                                                        </option>                                                                                                                                                    
                                                          </select> </p>                                        
                                            </div>
                                            </div>                    

                <button class="btn btn-danger" type="submit">Actualizar</button>
              </form>


              

                      