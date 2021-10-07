<?php
define ('PIEDRA1',  "&#x1F91C;");
define ('PIEDRA2',  "&#x1F91B;");
define ('TIJERAS',  "&#x1F596;");
define ('PAPEL',    "&#x1F91A;" );
define ('JUGADOR1',generarJugador(1));
define ('JUGADOR2',generarJugador(2));
define ('RESU1',generarResu(1));
define ('RESU2',generarResu(2));
function generarJugador($n) {
    if ($n == 1) {
        return $tabla1 = [PIEDRA1, TIJERAS, PAPEL] ;
    }
    if ($n != 1) {
        return $tabla2 = [PIEDRA2, TIJERAS, PAPEL] ;
    }
}

function generarResu($n) {
    if ($n == 1) {
        $resu = random_int(0, 2);
        return JUGADOR1[$resu];
    }
    if ($n != 1){
        $resu = random_int(0, 2);
        return JUGADOR2[$resu];
    }
}

function comprobarResu() {
    if (RESU1 == PIEDRA1 && RESU2 == PIEDRA2 || RESU1 == RESU2) {
        return "!Empate¡";
    }
    if (RESU1 == PIEDRA1 && RESU2 == TIJERAS || RESU1 == TIJERAS && RESU2 == PAPEL || RESU1 == PAPEL && RESU2 == PIEDRA2) {
        return "Ha ganado el jugador 1";
    }
    if (RESU2 == PIEDRA2 && RESU1 == TIJERAS || RESU2 == TIJERAS && RESU1 == PAPEL || RESU2 == PAPEL && RESU1 == PIEDRA1) {
        return "Ha ganado el jugador 2";
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
</head>
<body>
    <table>
    <tr>
    <th>Jugador 1</th>
    <th>Jugador 2</th>
    </tr>
        <tr>
    <td style="font-size: 100px;"><?= RESU1?></td>
    <td style="font-size: 100px;"><?= RESU2?></td>
    </tr>
        <tr>
    <th colspan="2"><?= comprobarResu()?></th>
    </tr>
    </table>
</body>
</html>