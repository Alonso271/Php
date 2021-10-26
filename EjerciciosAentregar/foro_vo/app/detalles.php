<?php include_once 'app/funciones.php'; ?>
<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?= str_word_count($_REQUEST['comentario'], 0) ?></td></tr>
<tr><td>Letra + repetida:  </td><td><?= letraMasRepetida() ?></td></tr>
<tr><td>Palabra + repetida:</td><td><?= palabraMasRepetida() ?></td></tr>
</table>
</div>

