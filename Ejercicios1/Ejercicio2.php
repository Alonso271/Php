<?php
/*Obtener un número al azar entre 1 y 9 y generar una escalera
 numérica del tamaño indicado alternando colores entre rojo y azul.*/
$tamaño=random_int(1, 9);
for ($i = 1; $i <= $tamaño; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if($i%2==0){
            echo '<font color="red">'.$i.'</font>';
        }else {
            echo '<font color="blue">'.$i.'</font>';
        }
    }
    echo '<br>';
}