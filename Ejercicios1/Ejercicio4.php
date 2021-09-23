<?php
/*Generar números al azar entre 1 y 10 hasta que se generen 3 veces el valor 6 de forma consecutiva
 en ese caso se mostrará cuantos número se han generado. */
$cont=0;
$cont1=0;
$tiempo = microtime(true);
do {
  $n = random_int(1, 10);
  if ($n == 6) {
      $cont++;
  }else {
      $cont=0;
  }
  $cont1++;
}while ($cont!=3);
echo $cont1.'<br>'.(microtime(true)-$tiempo)*1000;