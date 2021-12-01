<?php
session_start();
include_once 'app/funciones.php';
include_once 'app/acciones.php';

if (!isset ($_SESSION['tuser'])){
    $_SESSION['tuser'] = cargarDatos();  
}

$contenido="";
if ($_SERVER['REQUEST_METHOD'] == "GET" ){
    
    if ( isset($_GET['orden'])){
        switch ($_GET['orden']) {
            case "Nuevo"    : accionAlta(); break;
            case "Borrar"   : accionBorrar   ($_GET['id']); break;
            case "Modificar": accionModificar($_GET['id']); break;
            case "Detalles" : accionDetalles ($_GET['id']);break;
            case "Terminar" : accionTerminar(); break;
        }
    }
} 
else {
    if (  isset($_POST['orden'])){
         switch($_POST['orden']) {
             case "Nuevo"    : accionPostAlta(); break;
             case "Modificar": accionPostModificar(); break;
             case "Detalles":;
         }
    }
}
$contenido .= mostrarDatos();
include_once "app/layout/principal.php";