<?php
include_once 'FuncionesPiedraPapelyTijeras.php';
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