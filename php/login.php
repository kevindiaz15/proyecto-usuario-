<?php
$conexion = mysqli_connect("localhost", "root", "", "registros")
    or die(mysqli_error($conexion));

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$consulta = "SELECT * FROM datos WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['usuario'] = $fila['usuario'];
    $_SESSION['nombre'] = $fila['nombre'];
    // Redirigir a una página de bienvenida o dashboard
    header("Location: ../index.html");
} else {
    // Inicio de sesión fallido
    echo "Usuario o contraseña incorrectos.";
}

mysqli_close($conexion);
?>
