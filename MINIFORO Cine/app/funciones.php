<?php
function usuarioOK( $nombre, $clave){
    if( (strlen($nombre) >= 8) && ($clave == strrev($nombre)) ){
        return true;
    }else{
        return false;
    }
}


?>