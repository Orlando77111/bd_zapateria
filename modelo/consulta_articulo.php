<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de Artículos</title>
<style>
    body {
        background-color: #121212;
        color: #f5f5f5;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #00ff88;
        margin-top: 20px;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        background-color: #1e1e1e;
        color: #f5f5f5;
    }

    th, td {
        border: 1px solid #00ff88;
        text-align: center;
        padding: 10px;
    }

    th {
        background-color: #00ff88;
        color: #121212;
        font-weight: bold;
    }

    td {
        background-color: #282828;
    }

    #home {
        text-align: center;
        margin-top: 20px;
    }

    a {
        color: #00ff88;
        text-decoration: none;
        font-weight: bold;
    }

    a:hover {
        color: #f5f5f5;
    }

    /* Diseño responsivo */
    @media only screen and (max-width: 600px) {
        table {
            width: 100%;
        }

        th, td {
            padding: 5px;
        }
    }
</style>
</head>
<body>
<div class="consultas">
    <h2>Lista de Artículos</h2>
    <?php
    require 'conexion.php';

    session_start();

    if (isset($_SESSION['correo'])) {
        $query = "SELECT id_articulo, nombre_articulo, precio_articulo FROM Articulo";
        $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta " . mysqli_error($conexion));

        // Encabezado de la tabla
        echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "</tr>";

        // Mostrar resultados de la consulta en la tabla
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id_articulo'] . "</td>";
            echo "<td>" . $fila['nombre_articulo'] . "</td>";
            echo "<td>" . $fila['precio_articulo'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<br>";

        echo "<div id='home'><a href='../pagina_principal.php'>Home</a></div>";
    }
    ?>
</div>
</body>
</html>
