@extends('home1')
@section('parte1')


<div class="container">
    
    <div class="row">
       <?php foreach ($producto as $producto) 
        {?>
        <div class="col-md-2" style="margin-right:5%;margin-bottom:5%">
            <div class="card" style="width:15rem;">
                <img class="card-img-top" src="images/{{$producto['Producto_Imagen']}}" width="80px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h5 style="text-align:center" class="card-title">{{$producto['Producto_Nombre']}}</h5>
                  <p class="card-text">{{$producto['Producto_Descripcion']}}</p>
                  <h5 style="text-align: center" class="card-title">{{"$". $producto['Producto_Precio']}}</h5>
                  <div style="text-align: center">
                    <a  href="#" class="btn btn-success">Agregar al carrito</a> 
                    <br>
                    <br> 
                    <a  href="#" class="btn btn-primary">Ver mas</a>        
                                                                                
                  </div>
                  
                </div>
            </div>
        </div>
        <?php } ?>

    </div>

</div>




@endsection