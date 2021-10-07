<?php
$usuarios = ["Fuentes" => "hola", "Luis" => "adios", "Pedro" => "buenas"];
$msg = "Usuario o contraseña erroneos.";
$verificacion = 0;
if (isset($_REQUEST["nombre"])) {
    foreach ($usuarios as $clave => $valor) {
        if ($clave == $_REQUEST["nombre"] && $valor == $_REQUEST["contraseña"]) {
       $msg = "Bienvenido ".$_REQUEST["nombre"].".";
       $verificacion = 1;
       break;
        }
       }
       echo $msg;
       if ($verificacion == 0) {
        header("Refresh:3; url=Ejercicio01.html");
    }
}

