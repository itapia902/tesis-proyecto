@extends('home1')

@section('parte1')

<div style="text-align: center;margin-right:10%;margin-left:10%">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Correo</th>
        <th scope="col">Acciones</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $i=1;
      foreach ($usuario as $usuario)
      {
        ?>      
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td>{{$usuario['usuario_Nombre']}}</td>
        <td>{{$usuario['usuario_Apellido']}}</td>        
        <td>{{$usuario['usuario_Telefono']}}</td>
        <td><p style="text-align:center">{{$usuario['usuario_Direccion']}}<p></td>
        <td>{{$usuario['usuario_Email']}}</td>
        <td> <button type="submit" class="btn btn-info">Editar</button> </td>
        <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
      </tr>
     
    </tbody>
    <?php 
    $i=$i+1;
      }
    ?>
  </table>
</div>


@endsection