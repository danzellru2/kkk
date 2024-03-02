<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "inicio");
if (!$conexion) {
    die("Parece que no ha funcionado correctamente");
} else {
    echo "Conectado";
}
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM lojin WHERE clave = ? AND contraseña = ?";
    if ($stmt = mysqli_prepare($conexion, $consulta)) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        
        mysqli_stmt_execute($stmt);
        
        $resultado = mysqli_stmt_get_result($stmt);
        
        $filas = mysqli_num_rows($resultado);
        
        mysqli_stmt_close($stmt);
    }

    if ($filas) {
        $_SESSION['username'] = $username;
        
        header("Location: pagina2.php");
    } else {
        
        echo "<h2 class='hola'>ERROR: Usuario o contraseña incorrectos</h2>";
    }
}

mysqli_close($conexion);
?>
