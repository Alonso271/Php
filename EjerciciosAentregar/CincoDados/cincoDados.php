<?php
define ('UNO',"&#9856;");
define ('DOS',"&#9857;");
define ('TRES',"&#9858;");
define ('CUATRO',"&#9859;" );
define ('CINCO',"&#9860;");
define ('SEIS',"&#9861;");
$dados = [UNO => 1, DOS => 2, TRES => 3, CUATRO => 4, CINCO => 5, SEIS => 6];
$tirada1 = generarTirada($dados);
$tirada2 = generarTirada($dados);
$puntos1 = calcularSuma($tirada1);
$puntos2 = calcularSuma($tirada2);
function generarTirada($dados) {
$tirada=[];
    for ($i = 1; $i <= 6; $i++) {
    $dado = random_int(1,6);
    foreach ($dados as $value) {
        if ($value == $dado) {
            $tirada[] = $value;
        }
    }
}
return $tirada;
}

function calcularSuma($tirada) {
    $suma = array_sum($tirada);
    $max = max($tirada);
    $min = min($tirada);
    $suma = $suma - ($max+$min);
    return $suma;
}

function obtenerResu($puntos1, $puntos2) {
    $msg = "!Empate¡";
    if ($puntos1==$puntos2) {
        return $msg;
    }
    if ($puntos1 > $puntos2) {
        $msg = "Ha ganaddo el jugador 1";
        return $msg;
    }else {
        $msg = "Ha ganaddo el jugador 2";
        return $msg;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
table{
border: 3px solid;
  border-collapse: collapse;
}
td{
border: 3px solid;
font-size: 50px;
}
</style>
</head>
<body>
<table>
	<tr style="background-color: red;">
	<th>Jugador1</th>
<?php 
foreach ($dados as $clave => $value) {
    for ($i = 0; $i < 6; $i++) {
        if ($value == $tirada1[$i]) {
            echo "<td>".$clave."</td>";
        }
    }
}
?>
<th> <?= calcularSuma($tirada1)?>puntos</th>
    </tr>
    <tr style="background-color: blue;">
    	<th>Jugador2</th>
<?php 
foreach ($dados as $clave => $value) {
    for ($i = 0; $i < 6; $i++) {
        if ($value == $tirada2[$i]) {
            echo "<td>".$clave."</td>";
        }
    }
}
?>
<th> <?= calcularSuma($tirada2)?>puntos</th>
    </tr>
    <tr>
    <th colspan="8"><?= obtenerResu($puntos1, $puntos2);?></th>
    </tr>
</table>
</body>
</html>