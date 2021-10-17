<?php
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);
$suma = 0;
$msg = "Todo correcto";
$dirSubida = 'C:\Users\Alonso\Desktop\imgusers';
foreach ($_FILES['archivos']['size'] as $key => $value) {
    $suma = $suma + $value;
    if ($value > 200*KB) {
        $msg = "Archivo demasiado grande";
        $suma = $suma - $value;
    }
    if ($suma > 300*KB) {
        $msg = "El tamaño total de los archivos es demasiado grande.";
        break;
    }
}
foreach ($_FILES['archivos']['type'] as $key => $value) {
   if ($value != "image/png" && $value != "image/jpeg") {
       $msg = "Esta extension no esta permitida: ".$value;
   }
}
if ($msg == "Todo correcto") {
    foreach ($_FILES['archivos']['tmp_name'] as $key => $value) {
        $name = basename($_FILES["archivos"]["name"][$key]);
        if (file_exists("$dirSubida/$name")) {
            $msg = "Todo correcto pero la imagen ".$name." ya esta guardada en ese directorio";
        }else {
            move_uploaded_file($value, "$dirSubida/$name");
        }
    }
}
echo $msg;
?>