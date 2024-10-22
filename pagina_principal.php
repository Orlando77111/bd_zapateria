<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username'])&& isset($_SESSION['correo']))
    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }

        #contenedor_principal {
            width: 80%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: #2e2e2e;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6); /* Sombra más intensa */
            margin-top: 40px;
        }

        h1 {
            color: #4CAF50; /* Título verde */
            text-align: center;
            font-size: 36px;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        p {
            font-size: 18px;
            color: #c0c0c0;
            margin: 10px 0;
        }

        h3 {
            color: #4CAF50; /* Verde */
            text-transform: uppercase;
            margin: 25px 0;
            font-size: 20px;
            letter-spacing: 1.5px;
            border-bottom: 1px solid #4CAF50;
            padding-bottom: 10px;
        }

        a {
            display: block;
            margin: 12px 0;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 12px 25px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-align: center;
            font-size: 16px;
        }

        a:hover {
            background-color: #388E3C;
            transform: scale(1.05); /* Efecto hover con transformación */
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .cta {
            background-color: #1e1e1e;
            color: #fff;
            border: 2px solid #4CAF50;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .cta:hover {
            background-color: #444;
            color: #1e1e1e;
        }

        /* Dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        /* Botón para el dropdown */
        .dropdown button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            text-align: left;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .dropdown button:hover {
            background-color: #388E3C;
            transform: scale(1.05);
        }

        /* Contenido del dropdown */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2e2e2e;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
            z-index: 1;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Opciones del dropdown */
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #388E3C;
        }

        /* Mostrar el dropdown al hacer hover */
        .dropdown:hover .dropdown-content {
            display: block;
            animation: fadeIn 0.3s ease; /* Animación al desplegar */
        }

        /* Animación de fade in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
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

            .dropdown button {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        <p>Nombre: <?php echo ' ', $nombre_usuario; ?></p>
        <p>Correo: <?php echo ' ', $correo_usuario; ?></p>
        
        <h3>Registros</h3>
        <div class="grid">
            <div class="dropdown">
                <button>Registrar</button>
                <div class="dropdown-content">
                    <a href="registrar_fabricante.php">Registrar Fabricante</a>
                    <a href="registrar_articulo.php">Registrar Artículo</a>
                </div>
            </div>
        </div>
        
        <h3>Consultas</h3>
        <div class="dropdown">
            <button>Consultar</button>
            <div class="dropdown-content">
                <a href="modelo/consulta_fabricantes.php">Consultar Fabricante</a>
                <a href="modelo/consulta_articulo.php">Consultar Artículo</a>
            </div>
        </div>
        
        <h3>Actualizaciones</h3>
        <div class="dropdown">
            <button>Actualizar</button>
            <div class="dropdown-content">
                <a href="#">Actualizar Fabricante</a>
                <a href="#">Actualizar Artículo</a>
            </div>
        </div>
        
        <h3>Eliminaciones</h3>
        <div class="dropdown">
            <button>Eliminar</button>
            <div class="dropdown-content">
                <a href="#">Eliminar Fabricante</a>
                <a href="#">Eliminar Artículo</a>
            </div>
        </div>
        
        <div class="cta">
            <h3>Cerrar Sesión</h3>
            <a href="modelo/cerrar_sesion.php">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>
