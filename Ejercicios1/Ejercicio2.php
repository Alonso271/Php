<?php
/*Obtener un n�mero al azar entre 1 y 9 y generar una escalera
 num�rica del tama�o indicado alternando colores entre rojo y azul.*/
$tama�o=random_int(1, 9);
for ($i = 1; $i <= $tama�o; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if($i%2==0){
            echo '<font color="red">'.$i.'</font>';
        }else {
            echo '<font color="blue">'.$i.'</font>';
        }
    }
    echo '<br>';
}