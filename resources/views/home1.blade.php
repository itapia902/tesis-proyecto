<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/351452173a.js" crossorigin="anonymous"></script>
</head>
<body>
   
    <div style="text-align:RIGHT; padding-top:1%;padding-right:2%">
        <button class="btn btn-sm btn-outline-primary" type="button">Registrarse Sesion</button>
       
        
        <button class="btn btn-sm btn-outline-success" type="button">Iniciar sesion</button>
        <i class="fa-solid fa-cart-shopping"></i>    
    </div>

    <div class="container" style="padding-top:0%">
        <div class="row">
            <div class="col-md-12" style="text-align:center">
                <h4>
                    <a href="" style="text-decoration:none">
                        BAZAR Y PAPELERIA ESI
                    </a>
                    
                </h4>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a class="navbar-brand" href="#" style="color: white"><h4>Inicio</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <ul class="navbar-nav mr-auto">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <li class="nav-item active">
                  <h6 style="color: white">Productos</h6>
                </li>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <li class="nav-item">
                    <h6 style="color: white">Categorias</h6>
                </li>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <li class="nav-item active">
                    <h6 style="color: white">Ofertas</h6>
                  </li>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <li class="nav-item">
                      <h6 style="color: white">¿Cómo registrarse? </h6>
                  </li>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <li class="nav-item">
                    <h6 style="color: white">Acerca de nosotros</h6>
                </li>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <li class="nav-item">
                  <h6 style="color: white">Contactanos</h6>
              </li>
                
              </ul>
              
            </div>
          </nav>
    </div>

    <DIV>
    </DIV>
    <div style="padding-top:2%">
        @yield('parte1')
    </div>
      
</body>
</html>