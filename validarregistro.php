<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "inicio");

if (!$conexion) {
    die("Parece que no ha funcionado correctamente");
}else {

    echo "conectado";
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $consulta = "INSERT INTO lojin (clave, contraseña) VALUES (?, ?)";
    if ($stmt = mysqli_prepare($conexion, $consulta)) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_close($stmt);
        
        echo "Redireccionando a inicio.php";
        header("Location: inicio.php");
        exit; 
    } else {
        include("validarregistro.php");
        echo "<h2 class='hola'>ERROR: No se pudo registrar el usuario</h2>";
    }
}

mysqli_close($conexion);
?>
