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