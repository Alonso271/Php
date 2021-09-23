<?php
/*Realizar una segunda versión del primer ejercicio donde la página de resultado
 tiene que mostrar una tabla con el siguiente  formato utilizando estilo.*/
$n1 = random_int(1, 10);
$n2 = random_int(1, 10);
?>
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.der{
text-align: right;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Operación</th>
    <th>Resultado</th>
  </tr>
  <tr>
    <td><?="$n1 + $n2"?></td>
    <td class="der"><?php echo $n1 + $n2?></td>
  </tr>
  <tr>
    <td><?="$n1 - $n2"?></td>
    <td class="der"><?php echo $n1 - $n2?></td>
  </tr>
  <tr>
    <td><?="$n1 / $n2"?></td>
    <td class="der"><?php echo $n1 / $n2?></td>
  </tr>
  <tr>
    <td><?="$n1 * $n2"?></td>
    <td class="der"><?php echo $n1 * $n2?></td>
  </tr>
  <tr>
    <td><?="$n1 % $n2"?></td>
    <td class="der"><?php echo $n1 % $n2?></td>
  </tr>
  <tr>
    <td><?="$n1 ** $n2"?></td>
    <td class="der"><?php echo $n1 ** $n2?></td>
  </tr>
</table>

</body>
</html>
