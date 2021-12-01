<?php
include_once 'app/config.php';

function cargarDatos(){
    $funcion =__FUNCTION__.TIPO;
    return $funcion();
}

function volcarDatos($valores){
    $funcion =__FUNCTION__.TIPO;
    $funcion($valores);
}

function cargarDatostxt(){
    $tabla=[]; 
    if (!is_readable(FILEUSER) ){
        $fich = @fopen(FILEUSER,"w") or die ("Error al crear el fichero.");
        fclose($fich);
    }
    $fich = @fopen(FILEUSER, 'r') or die("ERROR al abrir fichero de usuarios");
    
    while ($linea = fgets($fich)) {
        $partes = explode('|', trim($linea));
        $tabla[]= [ $partes[0],$partes[1],$partes[2],$partes[3]];
        }
    fclose($fich);
    return $tabla;
}
function volcarDatostxt($tvalores){

    $fich = @fopen(FILEUSER,"w") or die ("Error al escribir en el fichero.");
    foreach ($tvalores as $usuario) {
        $linea = implode('|', $usuario)."\n";
        fwrite($fich,$linea);
    }
    fclose($fich);    
}

function cargarDatoscsv (){
    $tabla=[];
    if (!is_readable(FILEUSER) ){
        $fich = @fopen(FILEUSER,"w") or die ("Error al crear el fichero.");
        fclose($fich);
    }
    $fich = @fopen(FILEUSER, 'r') or die("ERROR al abrir fichero de usuarios");
    
    while ($partes = fgetcsv($fich)) {
        $tabla[]= [ $partes[0],$partes[1],$partes[2],$partes[3]];
    }
    fclose($fich);
    return $tabla;   
}
function volcarDatoscsv($tvalores){
    
    $fich = @fopen(FILEUSER,"w") or die ("Error al escribir en el fichero.");
    foreach ($tvalores as $usuario) {
        fputcsv($fich, $usuario);
    }
    fclose($fich);
}

function cargarDatosjson (){
    $tabla=[];
    $datosjson = @file_get_contents(FILEUSER) or die("ERROR al abrir fichero de usuarios");
    $tabla = json_decode($datosjson, true);   
    return $tabla;
}

function volcarDatosjson($tvalores){
    
    $datosjon = json_encode($tvalores);
    @file_put_contents(FILEUSER, $datosjon) or die ("Error al escribir en el fichero.");
    
}



function mostrarDatos (){
    
    $titulos = [ "Nombre","login","Password","Comentario"];
    $msg = "<table>\n";
    $msg .= "<tr>";
    for ($j=0; $j < CAMPOSVISIBLES; $j++){
        $msg .= "<th>$titulos[$j]</th>";
    }  
    $msg .= "</tr>";
    $auto = $_SERVER['PHP_SELF'];
    $id=0;
    $nusuarios = count($_SESSION['tuser']);
    for($id=0; $id< $nusuarios ; $id++){
        $msg .= "<tr>";
        $datosusuario = $_SESSION['tuser'][$id];
        for ($j=0; $j < CAMPOSVISIBLES; $j++){
            $msg .= "<td>$datosusuario[$j]</td>";
        }
        $msg .="<td><a href=\"#\" onclick=\"confirmarBorrar('$datosusuario[0]',$id);\" >Borrar</a></td>\n";
        $msg .="<td><a href=\"".$auto."?orden=Modificar&id=$id\">Modificar</a></td>\n";
        $msg .="<td><a href=\"".$auto."?orden=Detalles&id=$id\" >Detalles</a></td>\n";
        $msg .="</tr>\n";
        
    }
    $msg .= "</table>";
   
    return $msg;    
}
