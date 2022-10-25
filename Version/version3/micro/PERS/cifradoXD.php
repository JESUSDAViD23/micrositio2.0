<?php

function encript($cadena){
    include("./arreglo.php");
    //$cadena= "hashiyasumeatsuko";
$ejemplo = strlen($cadena);

//echo $arreglo[0]."<br/>";
/*echo $ejemplo."<br/>";*/
//echo $cadena[4];
echo $cadena.'<br/>';

$tamaño =$ejemplo; //sizeof($cadena);
$cifrado = "";
for($i = 0;$tamaño>$i;$i++){
    
    for($j=0;$j<=66;$j++){
        
        $cad = $cadena[$i];
        $arre = $arreglo[$j];
        if($cad==$arre){
            if($j < 10){
            $cifrado =$cifrado.'0'.$j;
            //echo $cadena[$i].$i .' --- '.$arreglo[$j].$j.'<br/>';
            break;
            }else{
            $cifrado =$cifrado.$j;
            //echo $cadena[$i].$i .' --- '.$arreglo[$j].$j.'<br/>';
            break;
            }
        }
    }
}
return $cifrado;
}

function descript($cifrado){
    include("./arreglo.php");
$texto = "";
$ejemplo2 = strlen($cifrado);
//echo $ejemplo2.'<br/>';
for($x = 0;$ejemplo2>$x;$x=$x+2){
    if($cifrado[$x]==0){
        $valor = $cifrado[$x+1];
        $texto =  $texto.$arreglo[$valor];
    }else{
        $dat1 = $cifrado[$x];
        $dat2 = $cifrado[$x+1];
        //echo '<br/>'.$dat1.'<br/>';
        //echo $dat2.'<br/>';
        $valor = $dat1.$dat2;
        $texto =  $texto.$arreglo[$valor];
    }
    //echo $x.'<br/>';
    
}
return $texto;
}

?>