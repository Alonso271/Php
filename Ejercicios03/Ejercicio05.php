<?php
$tabla=[];
for ($i = 0; $i < 5; $i++) {
    $n = random_int(1,49);
    $tabla[]=$n;
}
asort($tabla);
$tabla[]= random_int(1,49);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    table{
  border-collapse: collapse;
    }
    td, th {
  border: 1px solid #dddddd;
}
    </style>
</head>
<body>
    <table>
    <tr></tr>
<?php 
$cont =0;
foreach ($tabla as $value) {
    $cont++;
    if ($cont==6) {
        echo "<td>Complementario".$value."</td>";
        break;
    }
    echo "<td>".$value."</td>";
}
?>
</tr>
    </table>
</body>
</html>