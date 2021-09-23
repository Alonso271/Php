<?php

/*Elegir tres valores entre 100 y 500 y pintar tres barras de color rojo, verde y azul del tamaño indicado.
 Pista: Utilizar  3 tablas con una fila del tamaño generado.*/
$n1 = random_int(100, 500);
$n2 = random_int(100, 500);
$n3 = random_int(100, 500);
?>
<html>
<head>
<meta http-equiv="refresh" content="2"> <!-- Esta linea permite que la pagina se refresque de forma automatica cada 2 segundos -->
<style>
table {
  border-collapse: collapse;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.rojo{
background-color: red;
}
.verde{
background-color: green;
}
.azul{
background-color: blue;
}
</style>
</head>
<body>
<table>
  <tr>
    <td width="<?="$n1"?>px" class="rojo"><?php echo "Rojo (".$n1.")"?></td>
  </tr>
  </table>
  <table>
  <tr>
    <td width="<?="$n2"?>px" class="verde"><?php echo "Verde (".$n2.")"?></td>
  </tr>
  </table>
  <table>
  <tr>
    <td width="<?="$n3"?>px" class="azul"><?php echo "Azul (".$n3.")"?></td>
  </tr>
</table>

</body>
</html>