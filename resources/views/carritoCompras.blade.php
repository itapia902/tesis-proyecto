@extends('home1')
@section('parte1')
<?php
use App\Producto;
$productos=Producto::all()->take(3);
?>
<div class="container" style="text-align: center">
    <div class="row" >
        <div class="col-md-2">
          <h4><b>CANTIDAD</b></h4>  
        </div>
        <div class="col-md-2">
            <h4><b>FOTO</b></h4>
        </div>
        <div class="col-md-2">
            <h4><b>DESCRIPCION</b></h4>
        </div>
        <div class="col-md-2">
            <h4><b>VAL.UNITARIO</b></h4>
        </div>
        <div class="col-md-2">
            <h4><b>VAL.TOTAL</b></h4>
        </div>
        <div class="col-md-2">
            <h4><b>ACCION</b></h4>
        </div>
        <br>
        <br>
        <br>
        
    </div>
    <?php
    $multiplicado=1;
        foreach ($productos as $producto) 
        {
                     
    ?>
    <div class="row">
        <div class="col-md-2" style="text-align: center">
            
            <i class="fa-solid fa-minus"></i>
            <input type="text" size=40 style="width:50px">
            
            <i class="fa-solid fa-plus"></i> 
        </div>
        <div class="col-md-2">
            <img src="images/{{$producto['Producto_Imagen']}}" width="100px" height="100px" alt="Card image cap">
        </div>
        <div class="col-md-2">
          {{$producto['Producto_Descripcion']}}  
        </div>
        <div class="col-md-2">
            {{$producto['Producto_Precio']}}  
          </div>
          <div class="col-md-2">
            <?php
            
            $valor=$producto['Producto_Precio'];
            $valorTotal=$multiplicado*$valor;
            echo $valorTotal;
            $multiplicado=$multiplicado+2;
            ?>
            
          </div>
          <div class="col-md-2">
            <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          
          
    </div>
    <?php 
    } 
    ?>
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-2">
        
    </div>
    <div class="col-md-2">
        
    </div>
    <div class="col-md-2">
     <h4><b>Valor a pagar</b></h4>
    </div>
    <div class="col-md-2">
     <h4>22.50</h4>
    </div>
</div>
</div>

@endsection