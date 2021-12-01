<?php
function accionBorrar ($id){    
    
    unset($_SESSION['tuser'][$id]); 
    $_SESSION['tuser'] = array_values($_SESSION['tuser']);
    $_SESSION['msg'] = "El usuario ha sido eliminado";
}

function accionModificar($id){
    $usuario = $_SESSION['tuser'][$id];
    $nombre  = $usuario[0];
    $login   = $usuario[1];
    $clave   = $usuario[2];
    $comentario=$usuario[3];
    $orden="Modificar";
    include_once "layout/formulario.php";
}

function accionTerminar(){
    volcarDatos($_SESSION['tuser']);
    session_destroy();
    $_SESSION['msg'] = " Los datos se han volcado al fichero.";
}

function accionPostModificar(){
    limpiarArrayEntrada($_POST); //Evito la posible inyección de código
    $i=0;
    foreach ($_SESSION['tuser'] as $usuario){
        if ($usuario[1] == $_POST['login']){
            $usuario[0]= $_POST['nombre'];
            $usuario[2]= $_POST['clave'];
            $usuario[3]= $_POST['comentario'];
            $_SESSION['tuser'][$i] = $usuario;
            break;
        }
        $i++;
    }
    
}

function accionDetalles($id){
    $usuario = $_SESSION['tuser'][$id];
    $nombre  = $usuario[0];
    $login   = $usuario[1];
    $clave   = $usuario[2];
    $comentario=$usuario[3];
    $orden = "Detalles";
    include_once "layout/formulario.php";
    exit();
}

function accionAlta(){
    $nombre  = "";
    $login   = "";
    $clave   = "";
    $comentario = "";
    $orden= "Nuevo";
    include_once "layout/formulario.php";
    exit();
}

function accionPostAlta(){
    limpiarArrayEntrada($_POST);
    $contenido = file_get_contents('dat/usuarios.txt');
    $pos = strpos($contenido, $_POST['login']);
    $cont = 0;
    foreach ($_SESSION['tuser'] as $key => $value) {
        if ($_SESSION['tuser'][$key][1] == $_POST['login']) {
            $cont++;
            break;
        }
    }
    if ($pos === false && $cont == 0) {
        $nuevo = [ $_POST['nombre'],$_POST['login'],$_POST['clave'],$_POST['comentario']];
        $_SESSION['tuser'][]= $nuevo; 
    }else{
        echo "EL login ya existe";
    }
 
}
