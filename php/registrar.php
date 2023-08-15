<?php

$conexion = mysqli_connect("localhost", "root", "", "registros")
or die(mysqli_error($conexion));

insertar($conexion);

function insertar($conexion){
    $name = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    
    $consulta = "INSERT INTO datos(nombre, usuario, contrasena) VALUES ('$name','$usuario','$contrasena')";
    header("Location: ../pages/login.html ");
    mysqli_query($conexion, $consulta);


    mysqli_close($conexion);
}
?>
