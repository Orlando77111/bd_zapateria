<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatería la Sangileña - Inicio de Sesión</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/jordan(1).jpg'); 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para el contenedor del formulario */
        #div_inicio_secion {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Estilos para los campos del formulario */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        label {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Estilo para centrar el contenido */
        #div_inicio_secion form {
            display: flex;
            flex-direction: column;
        }

    </style>
</head>
<body>
    <div id="div_inicio_secion">
        <h1>Zapatería la Sangileña</h1>
        <form action="modelo/loguear.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>

            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" placeholder="Contraseña" required>

            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
