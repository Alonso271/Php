<?php
session_start();
if (!isset($_COOKIE["victorias"])) {
    setcookie("victorias", 0, time()+2*7 * 24 * 3600);
}
if (! isset($_SESSION['palabrasecreta'])) {
    $_SESSION['palabrasecreta'] = elegirPalabra();
    $_SESSION['letrasusuario'] = ""; 
    $_SESSION['fallos'] = 0;
}

function elegirPalabra(){
    static $tpalabras = ["Madrid","Sevilla","Murcia","MÃ¡laga","Mallorca","Menorca"];
   $num = random_int(0,5);
   return $tpalabras[$num];   
}

function comprobarLetra($letra,$cadena){
    if (strpos($cadena,$letra) === false) {
        $resuletra = false;
    }else {
        $resuletra = true;
    }
    return  $resuletra;  
}

if (isset($_REQUEST["letra"])) {
    if (comprobarLetra($_REQUEST["letra"],$_SESSION['palabrasecreta']) == true) {
            $_SESSION['letrasusuario'] = $_SESSION['letrasusuario'].$_REQUEST["letra"];
    }else {
        $_SESSION['fallos']++;
    }
}


function generaPalabraconHuecos ( $cadenaletras, $cadenapalabra) {
    $resu = $cadenapalabra;
        for ($i = 0; $i<strlen($resu); $i++){
            $resu[$i] = '-';
        }
     if (strlen($cadenaletras) != 0) {
        for ($j=0; $j < strlen($resu); $j++) { 
            for ($h=0; $h < strlen($cadenaletras); $h++) { 
                if ($cadenaletras[$h] == $cadenapalabra[$j]) {
                    $resu[$j] = $cadenaletras[$h];
                }
            }
         }
    }
    
    return $resu;
}
if ($_SESSION['fallos'] > 5) {
    session_destroy();
    header("Refresh:1; url=\"".$_SERVER['PHP_SELF']."\"");
    exit;
}
if ($_SESSION['palabrasecreta'] == generaPalabraconHuecos($_SESSION['letrasusuario'],$_SESSION['palabrasecreta'])) {
    session_destroy();
    echo $_COOKIE["victorias"];
    $_COOKIE["victorias"]++;
    echo '<h1> HAS GANADO '.$_COOKIE["victorias"].' partidas</H1>';
    header("Refresh:1; url=\"".$_SERVER['PHP_SELF']."\"");
    exit;
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
    <form action="" method="post">
        <p>PALABRA: <?= generaPalabraconHuecos($_SESSION['letrasusuario'],$_SESSION['palabrasecreta']) ?></p>
        <p>Has cometido <?= $_SESSION['fallos']?> fallos.</p>
        <p>Introduzca una letra <input type="text" name="letra"></p>
    </form>
</body>
</html>