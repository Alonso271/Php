<code>
<?php
/*Obtener un n�mero al azar entre 1 y 9 y generar una pir�mide con ese n�mero de pelda�os.
 Utilizar la marca <code></code> para que la visualizaci�n no se deforme por el tama�o
 de los espacio o una estilo con tipo de letra monospace.*/
$tama�o=random_int(1, 9);
for ($i = 1; $i <= $tama�o; $i++) {
        for ($h = 0; $h < $tama�o-$i; $h++) {
            echo '&nbsp;';
        }
    for ($j = 1; $j <= ($i*2)-1; $j++) {
        echo "*";
    }
    echo '<br>';
}
?>
</code>