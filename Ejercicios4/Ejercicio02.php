<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01</title>
</head>

<body>
    <form method="get">
        Valor1: <input type="number" name="valor1" value="<?= isset($_REQUEST["valor1"]) ? $_REQUEST["valor1"] : "" ;?>"><br> Valor2: <input type="number" name="valor2" value="<?= isset($_REQUEST["valor2"]) ? $_REQUEST["valor2"] : "" ;?>"><br>
        <input type="submit" name= "operacion" value="+">
        <input type="submit" name= "operacion" value="-">
        <input type="submit" name= "operacion" value="/">
        <input type="submit" name= "operacion" value="*"><br>
        Decimal<input type="radio" name="formato" value="1" checked>
        Binario<input type="radio" name="formato" value="2">
        Hexadecimal<input type="radio" name="formato" value="3">
    </form>
</body>
</html>
<?php
if (isset($_REQUEST["valor1"])) {
    $resu = 0;
switch ($_REQUEST["operacion"]) {
    case '+':
        $resu = $_REQUEST["valor1"] + $_REQUEST["valor2"];
        break;
    case '-':
        $resu = $_REQUEST["valor1"] - $_REQUEST["valor2"];
        break;
    case '/':
        $resu = $_REQUEST["valor1"] / $_REQUEST["valor2"];
        break;
    case '*':
        $resu = $_REQUEST["valor1"] * $_REQUEST["valor2"];
        break;
    default:
        break;
}
switch ($_REQUEST["formato"]) {
    case '1':
        break;
    case '2':
        $resu = decbin($resu);
        break;
    case '3':
        $resu = dechex($resu);
        break;
    default:
        break;
}
echo $resu;
}
?>