<?php
$n1 = random_int(1, 100);
$mayor =0;
$menor = $n1;
$suma = $n1;
for ($i = 1; $i < 50; $i++) {
    $n1 = random_int(1, 100);
    if ($mayor < $n1) {
        $mayor=$n1;
    }
    if ($menor>$n1) {
        $menor =$n1;
    }
    $suma = $suma + $n1;
}
$media = $suma / 50;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, td, th{
  border:solid black;
}
</style>
<body>
</head>
<body>
    <table>
  <tr>
    <th colspan="2">Generacion de 50 valores aleatorios</th>
  </tr>
  <tr>
    <td>Maximo</td>
    <td><?= $mayor ?></td>
  </tr>
  <tr>
    <td>Minimo</td>
    <td><?= $menor ?></td>
  </tr>
  <tr>
  <td>Media</td>
  <td><?= $media ?></td>
  </tr>
</table>
</body>
</html>