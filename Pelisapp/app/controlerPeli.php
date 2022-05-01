<?php
// ------------------------------------------------
// Controlador que realiza la gestión de usuarios
// ------------------------------------------------

include_once 'config.php';
include_once 'modeloPeliDB.php'; 

/**********
/*
 * Inicio Muestra o procesa el formulario (POST)
 */

function  ctlPeliInicio(){
    header("fnuevo.php");
   }

/*
 *  Muestra y procesa el formulario de alta 
 */

function ctlPeliAlta (){
    include_once 'app/plantilla/formacceso.php';
}
/*
 *  Muestra y procesa el formulario de Modificación 
 */
function ctlPeliModificar (){
    die(" No implementado.");
}



/*
 *  Muestra detalles de la pelicula
 */

function ctlPeliDetalles(){
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $peliInfo = ModeloUserDB::GetAll(); 
        foreach ($peliInfo as $pelis) {
            if ($codigo==$pelis->codigo_pelicula) {
                $nombre = $pelis->nombre;
                $director =$pelis->director;
                $genero = $pelis->genero;
            }
    
        }
    }
    include_once 'app/plantilla/detallespeli.php';
}
/*
 * Borrar Peliculas
 */

function ctlPeliBorrar(){
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $peli = ModeloUserDB :: DeleteOne($codigo);
        ctlPeliVerPelis();
    }
}

/*
 * Cierra la sesión y vuelca los datos
 */
function ctlPeliCerrar(){
    session_destroy();
    modeloUserDB::closeDB();
    header('Location:index.php');
}

/*
 * Muestro la tabla con los usuario 
 */ 
function ctlPeliVerPelis (){
    // Obtengo los datos del modelo
    $peliculas = ModeloUserDB::GetAll(); 
    // Invoco la vista 
    include_once 'plantilla/verpeliculas.php';
   
}