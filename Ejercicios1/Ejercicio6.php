<?php
/*Generar la  tabla de multiplicar de un número elegido al azar entre 1 y 10 
 * con la siguiente apariencia */
$n1 = random_int(1, 10);
?>
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

header{
background-color: blue;
text-align: center;
color: white;
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
<header><h1>TABLA DE<br> MULTIPLICAR</h1></header>
<body>
<table>
  <tr>
    <th>Tabla del <?="$n1"?></th>
    <th></th>
  </tr>
  <tr>
    <td><?="$n1 x 1 ="?></td>
    <td class="der"><?php echo $n1 * 1?></td>
  </tr>
  <tr>
    <td><?="$n1 x 2="?></td>
    <td class="der"><?php echo $n1 * 2?></td>
  </tr>
  <tr>
    <td><?="$n1 x 3="?></td>
    <td class="der"><?php echo $n1 * 3?></td>
  </tr>
  <tr>
    <td><?="$n1 x 4="?></td>
    <td class="der"><?php echo $n1 * 4?></td>
  </tr>
  <tr>
    <td><?="$n1 x 5="?></td>
    <td class="der"><?php echo $n1 * 5?></td>
  </tr>
  <tr>
    <td><?="$n1 x 6="?></td>
    <td class="der"><?php echo $n1 * 6?></td>
  </tr>
    <tr>
    <td><?="$n1 x 7="?></td>
    <td class="der"><?php echo $n1 * 7?></td>
  </tr>
    <tr>
    <td><?="$n1 x 8="?></td>
    <td class="der"><?php echo $n1 * 8?></td>
  </tr>
    <tr>
    <td><?="$n1 x 9="?></td>
    <td class="der"><?php echo $n1 * 9?></td>
  </tr>
    <tr>
    <td><?="$n1 x 10="?></td>
    <td class="der"><?php echo $n1 * 10?></td>
  </tr>
</table>

</body>
</html>