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
    <title>La Sangileña</title>
    <style>
        /* Estilos globales */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1e1e1e; /* Fondo negro */
            color: #e0e0e0; /* Texto claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #contenedor_principal {
            background-color: #2e2e2e; /* Fondo del contenedor */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6); /* Sombra */
            width: 80%;
            max-width: 500px;
            animation: zoomIn 1.5s ease-in-out; /* Nueva animación de zoom */
        }

        h1 {
            color: #4CAF50; /* Verde */
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            font-size: 18px;
            color: #c0c0c0;
            margin-bottom: 15px;
            text-align: center;
        }

        label {
            color: #4CAF50; /* Verde */
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            background-color: #1e1e1e;
            color: #e0e0e0;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #388E3C; /* Verde oscuro al hacer hover */
            transform: scale(1.05); /* Aumentar tamaño ligeramente */
        }

        /* Nueva animación de zoom */
        @keyframes zoomIn {
            0% {
                transform: scale(0.7); /* Empezar más pequeño */
                opacity: 0;
            }
            100% {
                transform: scale(1); /* Tamaño normal */
                opacity: 1;
            }
        }

        /* Adaptabilidad para pantallas pequeñas */
        @media (max-width: 768px) {
            #contenedor_principal {
                width: 95%;
                padding: 20px;
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
        
        <h3>Registro de fabricante</h3>
        <div id="reg_fabricante">
            <form action="modelo/reg_fabricante.php" method="post">
                <label for="id_fab">Id:</label>
                <input type="text" name="id_fab" id="id_fab" placeholder="Id Fabricante" required>
                <label for="nombre_fab">Nombre:</label>
                <input type="text" name="nombre_fab" id="nombre_fab" placeholder="Nombre Fabricante" required>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>

