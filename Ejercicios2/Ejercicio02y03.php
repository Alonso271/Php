<?php
include_once 'funcionesvar.php';
$n1 = random_int(1, 10);
$n2 = random_int(1, 10);
$resu = 0;

for ($i = 0; $i < 5; $i++) {
    if ($i==0) {
        sumar($n1, $n2, $resu);
        echo "$n1+$n2 = ".$resu.'<br>';
    }
    if ($i==1) {
        resta($n1, $n2, $resu);
        echo "$n1-$n2 = ".$resu.'<br>';
    }
    if ($i==2) {
        division($n1, $n2, $resu);
        echo "$n1/$n2 = ".$resu.'<br>';
    }
    if ($i==3) {
        multiplicacion($n1, $n2, $resu);
        echo "$n1*$n2 = ".$resu.'<br>';
    }
    if ($i==4) {
        potencia($n1, $n2, $resu);
        echo "$n1**$n2 = ".$resu.'<br>';
    }

}