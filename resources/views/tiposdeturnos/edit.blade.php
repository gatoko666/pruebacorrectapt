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

          <form method="post" action="{{ route('tiposdeturnos.update', $detalletiposdeturnos->IdDetalleTipoTurno) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="name">Abreviatura</label>
                    <input type="text" class="form-control" name="AbreviacionTurno" value="{{$detalletiposdeturnos->AbreviacionTurno}}"/>
                </div>
                <div class="form-group">
                    <label for="price">Descripción :</label>
                    <input type="text" class="form-control" name="DescripcionDetalleTipoTurno" value="{{$detalletiposdeturnos->DescripcionDetalleTipoTurno}}"/>
                </div>
                <div class="form-group">
                        <label for="price">Inicio :</label>
                        <input type="time" class="form-control" name="HoraInicioTurno" value="{{$detalletiposdeturnos->HoraInicioTurno}}"/>
                    </div>
                    <div class="form-group">
                            <label for="price">Termino :</label>
                            <input type="time" class="form-control" name="HoraTerminoTurno" value="{{$detalletiposdeturnos->HoraTerminoTurno}}"/>
                        </div>
                      
                 
                <button type="submit" class="btn btn-primary">Actualizar  Tipo de turno</button>
            </form>







 