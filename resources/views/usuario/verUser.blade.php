@extends('home1')

@section('parte1')

<div >

    <div class="container">
    <?php 
        
        foreach ($usuario as $usuario)
        {
        ?> 
        <div class="row">
          <div class="col-md-1" style="text-align: center">
            {{$usuario['usuario_Nombre']}}
          </div>

          <div class="col-md-1" style="text-align: center">
            {{$usuario['usuario_Apellido']}}
          </div>

          <div class="col-md-1" style="text-align: center">
            {{$usuario['usuario_Telefono']}}
          </div>

          <div class="col-md-3" style="text-align: center">
            {{$usuario['usuario_Direccion']}}
          </div>

          <div class="col-md-3" style="text-align: center">
            {{$usuario['usuario_Email']}}
          </div>

          <div class="col-md-3" style="text-align: center">
            <td> <button type="submit" class="btn btn-info">Editar</button> </td>
            <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
          </div>                            
        </div>
        <br>
        
        <?php 
        } 
        ?>
        
    </div>
    
  
</div>


@endsection