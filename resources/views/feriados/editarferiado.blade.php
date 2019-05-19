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

 


      <form action="{{ route('feriados.update') }}" method="POST">
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