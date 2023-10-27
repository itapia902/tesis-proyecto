@extends('home1')

    @section('parte1')
    <br>
    <h5 style="text-align: center">Registro de productos</h5>
    <br>
    <div style="text-align:center;margin-left:30%;margin-right:30%;margin-bottom:3%" >
        <form action="{{route('CrudIngresarProducto')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Categoria</label>
                        </div> 
                    </div>
    
                    
                    <div class="col-md-10" style="text-align:center">                        
                        <select name="categoriaId" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>                            
                            <option selected></option>
                            <?php 
                                use App\Categoria;
                                 $categoria=Categoria::all();
                                foreach ($categoria as $categoria) 
                                { 
                                ?>
                                     <option  value="<?php echo($categoria['Categoria_Id'])?>" id="CategoriaId"><?php echo ($categoria['Categoria_Nombre'])?></option>
                                     
                                <?php } ?>
                        </select>                          
                    </div>                                      
                </div>                                                
                                              
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Nombre producto</label>
                        </div> 
                    </div>
    
                    <div class="col-md-10" style="text-align:center">
                        <input type="text" class="form-control" name="productoNombre" maxlength="100" required>          
                    </div>
                  
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label >Precio</label>
                          
                      </div> 
                    </div>
                    <div class="col-md-10" style="text-align:center">
                      <input type="number" step="0.1" class="form-control" name="productoPrecio"  required>          
                    </div>
                                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label >Cantidad</label>
                          
                      </div> 
                    </div>
                    <div class="col-md-10" style="text-align:center">
                        <input type="number" step="1" class="form-control" name="productoCantidad" required>          
                      </div>
                    </div>
                    <br>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label >Descripción</label>
                          
                      </div> 
                    </div>
                    <div class="col-md-10" >                           
                        <textarea class="form-control"  name="productoDescripcion" maxlength="500" rows="4" ></textarea>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                              <label >Imagen</label>
                              
                          </div> 
                        </div>
                        <div class="col-md-10" >
                           
                            <input type="file" class="form-control" name="productoImagen" required> 
                          </div>
                        </div>
                        
            <br>
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
    </div>
    
    
    @endsection