@extends('home1')

    @section('parte1')
    <br>
    <h5 style="text-align: center">Registro de usuario</h5>
    <br>
    <div style="text-align:center;margin-left:30%;margin-right:30%;margin-bottom:3%" >
        <form action="{{route('CrudIngresarUsuario')}}" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                        </div> 
                    </div>
    
                    <div class="col-md-10" style="text-align:center">
                        <input type="text" class="form-control" name="usuarioNombre" maxlength="50" >          
                    </div>
                  
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Apellido</label>
                          
                      </div> 
                    </div>
                    <div class="col-md-10" style="text-align:center">
                      <input type="text" class="form-control" name="usuarioApellido"  maxlength="50" >          
                    </div>
                                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label >Teléfono</label>
                          
                      </div> 
                    </div>
                    <div class="col-md-10" style="text-align:center">
                      <input type="text" class="form-control" name="usuarioTelefono" maxlength="10" >          
    
                    </div>
                </div>
    
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                              <label >Direccion</label>
                              
                          </div> 
                        </div>
                        <div class="col-md-10" style="text-align:center">
                          <input type="text" class="form-control" name="usuarioDireccion" maxlength="200" >          
        
                        </div>
                    </div>
                    <br>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                         <label >Correo electrónico</label>                          
                        </div> 
                    </div>
                    <div class="col-md-10" style="text-align:center">
                        <input type="mail" class="form-control" name="usuarioCorreo" aria-describedby="emailHelp" >          
                    </div>
                </div>                       
            <br>        
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                     <label>Contraseña </label>                          
                    </div> 
                </div>
                <div class="col-md-10" style="text-align:center">
                    <input type="password" class="form-control" name="usuarioContrasena" maxlength="15" >          
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
    </div>
    
    
    @endsection