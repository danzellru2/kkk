<?php

$conexion= mysqli_connect ("localhost","root","","inicio");
if(!$conexion){
    die("pararece que no ha funcionado correctamente");
}else {

    echo "conectado";
}

?>