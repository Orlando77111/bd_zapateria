<?php
require 'conexion.php';

session_start();

if (isset($_SESSION['correo'])) {

    // Verificar si los campos del formulario están definidos y no vacíos
    if (!empty($_POST['id_articulo']) && !empty($_POST['nombre_articulo']) && !empty($_POST['precio_articulo']) && !empty($_POST['id_fabricante'])) {
        // Limpiar los datos recibidos
        $id_articulo = trim($_POST['id_articulo']);
        $nombre_articulo = trim($_POST['nombre_articulo']);
        $precio_articulo = trim($_POST['precio_articulo']);
        $id_fabricante = trim($_POST['id_fabricante']);

        // Validar que el precio sea un número
        if (is_numeric($precio_articulo)) {
            // Validar si el fabricante existe en la tabla Fabricante
            $fabricante_query = "SELECT id_fabricante FROM Fabricante WHERE id_fabricante = '$id_fabricante'";
            $fabricante_result = mysqli_query($conexion, $fabricante_query);

            if (mysqli_num_rows($fabricante_result) > 0) {

                // Verificar si el id_articulo ya existe
                $articulo_query = "SELECT id_articulo FROM Articulo WHERE id_articulo = '$id_articulo'";
                $articulo_result = mysqli_query($conexion, $articulo_query);

                if (mysqli_num_rows($articulo_result) > 0) {
                    // Si el id_articulo ya existe, mostrar un mensaje de error
                    echo '<script type="text/javascript">alert("El ID del artículo ya existe. Por favor, elige otro."); window.location.href="../registrar_articulo.php";</script>';
                } else {
                    // Si no existe, insertar el nuevo artículo
                    $query = "INSERT INTO Articulo(id_articulo, nombre_articulo, precio_articulo, id_fabricante) 
                              VALUES ('$id_articulo','$nombre_articulo','$precio_articulo','$id_fabricante')";

                    $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

                    if ($insercion) {
                        echo '<script type="text/javascript">alert("Artículo registrado"); window.location.href="../registrar_articulo.php";</script>';
                    }
                }

            } else {
                echo '<script type="text/javascript">alert("El fabricante no existe. Por favor, regístralo primero."); window.location.href="../registrar_articulo.php";</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("El precio debe ser un número válido."); window.location.href="../registrar_articulo.php";</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Por favor, complete todos los campos."); window.location.href="../registrar_articulo.php";</script>';
    }
} else {
    header('location: ../pagina_principal.php');
}
?>


