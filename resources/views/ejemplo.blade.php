<?php 
    $arreglo=['a','b','c','d','e','f','g','f','g'];
    $tamañoArreglo=count($arreglo);
    //echo ($arreglo[0]);
    //echo ($arreglo[1]);
       
    $i=0;
    $j=0;
    $hasta=4;
    $inicio=0;
    while ($i<$tamañoArreglo)
    {   
        
            //if($i<$tamañoArreglo)
            //{
                for ($j=0; $j<4; $j++)  
                {                                        
                    if($i<$tamañoArreglo)
                    {
                        echo($arreglo[$i]);  
                        $i=$i+1;
                        continue;
                    }   
                    else 
                    {
                        break;
                    }

                }
                
                
            //}   
            //else 
                        
            //{
              //  break;

            //} 
        
    }

?>
@extends('home1')
@section('parte1')

<div class="container">
    <div class="row">

        <?php 
        for ($i=0; $i <10 ; $i++) 
        { 
        
        ?>
        <div class="col-md-6">
            {{$i}}
        </div>
        <?php } ?>

    </div>

</div>



@endsection
