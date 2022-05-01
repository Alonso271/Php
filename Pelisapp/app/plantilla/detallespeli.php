<?php
ob_start();
?>
<h2> Detalles </h2>
<table>
<tr><td>Nombre   </td><td> <?= $nombre ?></td></tr>
<tr><td>Director  </td><td>     <?= $director ?></td></tr>
<tr><td>Genero   </td><td>    <?= $genero  ?></td></tr>
</table>
<input type="button" value=" Volver " size="10" onclick="javascript:window.location='index.php'" >
<?php 
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido

$contenido = ob_get_clean();
include_once "principal.php";

?>