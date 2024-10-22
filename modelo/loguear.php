<?php
    require 'conexion.php';

    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    // consulta a la bB
    $consulta = "SELECT nombre_usuario, correo_usuario, password_usuario, COUNT(*) AS contar FROM Usuario WHERE correo_usuario = '$usuario' AND password_usuario = '$clave' ";

    
    // ejecutar la consulta
    $ejecucion_consulta = mysqli_query($conexion, $consulta) or triggre_error("error en la consulta a la BD: ".mysqli_error($conexion));

    // resultado de la consulta 
    $resultado = mysqli_fetch_array($ejecucion_consulta);

    if($resultado['contar']>0)
    {
        $_SESSION['username'] = $resultado['nombre_usuario'];
        $_SESSION['correo'] = $usuario;
        header("location: ../pagina_principal.php");
    }
    else
    {
        echo "<h1>Usuario o contraseña incorrecta</h1>";
    }
?>