<?php
/* Definir dos variables asignándoles un valor entero aleatorio entre 1 y 10 y mostrar su suma,
 su resta, su división, su multiplicación, módulo y potencia (ciclo for) */
$n1 = random_int(1, 10);
$n2 = random_int(1, 10);

for ($i=0; $i<=5; $i++){
    if ($i==0){
        $suma = $n1+$n2;
    }
    if ($i==1){
        $resta = $n1-$n2;
    }
    if ($i==2){
        $division = $n1/$n2;
    }
    if ($i==3){
        $multiplicacion = $n1*$n2;
    }
    if ($i==4){
        $modulo = $n1%$n2;
    }
    if ($i==5){
        $potencia = $n1**$n2;
    }
}
echo "La suma de ".$n1." + ".$n2." es: ".$suma .'<br>';
echo "La resta de ".$n1." - ".$n2." es: ".$resta.'<br>';
echo "La division de ".$n1." / ".$n2." es: ".$division.'<br>';
echo "La multiplicacion de ".$n1." * ".$n2." es: ".$multiplicacion.'<br>';
echo "El modulo de ".$n1." % ".$n2." es: ".$modulo.'<br>';
echo "La potencia de ".$n1." ** ".$n2." es: ".$potencia.'<br>';