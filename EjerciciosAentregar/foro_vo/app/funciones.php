<?php
function usuarioOk($usuario, $contraseña) :bool {
  $resu = false;
  if (strlen($usuario) >= 8) {
     if ($contraseña == strrev($usuario)) {
         $resu = true;     
      }
  }
   return $resu;
    
}

function letraMasRepetida(){
   $cadena = $_REQUEST["comentario"];
   $max = 0;
       for ($i=0; $i < strlen($cadena); $i++) { 
           $cont = 0;
           for ($j=0; $j < strlen($cadena); $j++) { 
            if ($cadena[$j] == $cadena[$i] && $cadena[$i] != " ") {
                   $cont++;
               }
           }
       if ($max < $cont) {
           $max = $cont;
           $letramasrepetida = $cadena[$i];
       }
       }
   echo $letramasrepetida;
     
 }
 
function palabraMasRepetida(){
   $cadena = $_REQUEST["comentario"];
   $palabras = explode (" ", $cadena);
   $max = 0;
       for ($i=0; $i < COUNT($palabras); $i++) { 
           $cont = 0;
           for ($j=0; $j < COUNT($palabras); $j++) { 
               if ($palabras[$j] == $palabras[$i] && $palabras[$i] != " ") {
                  $cont++;
              } 
           }
       if ($max <= $cont) {
           $max = $cont;
           $letramasrepetida = $palabras[$i];
       }
       }
   echo $letramasrepetida;
}