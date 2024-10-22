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
    <title>Lista Fabricantes</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            animation: fadeIn 1s ease-in-out;
        }

        th, td {
            border: 1px solid #2ecc71;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #27ae60;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #1c1c1c;
        }

        tr:hover {
            background-color: #2ecc71;
            color: #000;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        #home {
            text-align: center;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #2ecc71;
            font-size: 18px;
        }

        a:hover {
            color: #fff;
            background-color: #2ecc71;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="consultas">
        <h2 style="text-align: center;">Fabricantes</h2>
        <?php
        require 'conexion.php';

        session_start();

        if (isset($_SESSION['correo'])) {
            $query = "SELECT id_fabricante, nombre_fabricante FROM Fabricante";
            $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta: " . mysqli_error($conexion));

            // Encabezado tabla resultados
            echo "<table>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Nombre</th>";
            echo "</tr>";

            // Mostrar consulta a la BD en la tabla HTML
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['id_fabricante'] . "</td>";
                echo "<td>" . $fila['nombre_fabricante'] . "</td>";
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
