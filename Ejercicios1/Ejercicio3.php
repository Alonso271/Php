<code>
<?php
/*Obtener un número al azar entre 1 y 9 y generar una pirámide con ese número de peldaños.
 Utilizar la marca <code></code> para que la visualización no se deforme por el tamaño
 de los espacio o una estilo con tipo de letra monospace.*/
$tamaño=random_int(1, 9);
for ($i = 1; $i <= $tamaño; $i++) {
        for ($h = 0; $h < $tamaño-$i; $h++) {
            echo '&nbsp;';
        }
    for ($j = 1; $j <= ($i*2)-1; $j++) {
        echo "*";
    }
    echo '<br>';
}
?>
</code>