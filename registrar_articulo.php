<?php
    require 'modelo/conexion.php';
    session_start();

    // Corregido $_SESSION en ambos casos
    if(isset($_SESSION['username']) && isset($_SESSION['correo'])) {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    } else {
        $nombre_usuario = "Invitado";
        $correo_usuario = "No disponible";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zapatería La Sangileña</title>
    <style>
        /* Estilos globales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1e1e1e; /* Fondo oscuro */
            color: #e0e0e0; /* Texto claro */
            line-height: 1.6;
            animation: fadeInBody 1s ease; /* Animación de desvanecimiento */
        }

        #contenedor_principal {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #2e2e2e; /* Fondo del contenedor */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6); /* Sombra más intensa */
            animation: slideInContainer 1.2s ease; /* Animación de entrada */
        }

        h1 {
            color: #4CAF50; /* Verde */
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
            animation: fadeInTitle 1.4s ease; /* Animación de entrada */
        }

        p {
            font-size: 18px;
            color: #c0c0c0;
            margin: 10px 0;
        }

        h3 {
            color: #4CAF50;
            text-transform: uppercase;
            font-size: 24px;
            border-bottom: 1px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #4CAF50;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            background-color: #1e1e1e;
            color: #fff;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input:focus {
            border-color: #388E3C;
            box-shadow: 0 0 8px rgba(72, 187, 120, 0.6); /* Efecto de enfoque */
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: block;
            width: 100%;
            margin-top: 20px;
            animation: popIn 1.5s ease forwards;
            opacity: 0; /* Para animación de entrada */
        }

        button:hover {
            background-color: #388E3C;
            transform: scale(1.05); /* Efecto hover */
        }

        /* Animaciones */
        @keyframes fadeInBody {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInContainer {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInTitle {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes popIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Media query para pantallas pequeñas */
        @media (max-width: 768px) {
            #contenedor_principal {
                width: 90%;
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        
        <!-- Escapar variables para mayor seguridad -->
        <p>Usuario: <?php echo ' '.htmlspecialchars($nombre_usuario); ?></p>
        <p>Correo: <?php echo ' '.htmlspecialchars($correo_usuario); ?></p>
        
        <h3>Registro de Artículo</h3>
        <div id="reg_articulo">
            <form action="modelo/reg_articulo.php" method="post">
                <label for="id_art">Id:</label>
                <input type="text" name="id_articulo" id="id_articulo" placeholder="Id Artículo" required>
                <br>
                <label for="nombre_art">Nombre:</label>
                <input type="text" name="nombre_articulo" id="nombre_articulo" placeholder="Nombre Artículo" required>
                <br>
                <label for="precio_art">Precio:</label>
                <input type="text" name="precio_articulo" id="precio_articulo" placeholder="Precio Artículo" required>
                <br>
                <label for="fabricante_art">Fabricante:</label>
                <input type="text" name="id_fabricante" id="id_fabricante" placeholder="Fabricante del Artículo" required>
                <br>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>
