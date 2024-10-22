<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>


<?php

    //Parametros de conexion a la BD
    //DEFINE('USER','root');
    //DEFINE('PW','');
    //DEFINE('HOST','localhost');
    //DEFINE('BD','bd_zapateria');

    //DEFINE('USER','if0_37435051');
    //DEFINE('PW','BDfMmR93a1KqEQ');
    //DEFINE('HOST','sql204.infinityfree.com');
    //DEFINE('BD','if0_37435051_bd_zapateria');

    //Conexion a la BD
    $conexion = mysqli_connect('sql204.infinityfree.com', 'if0_37435051', 'BDfMmR93a1KqEQ',  'if0_37435051_bd_zapateria');

    //Establecer caracteres para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    //verificamos la conexion con la BD
    if(!$conexion)
    {
        die("la conexion a la BD fallo: "+ mysqli_error($conexion));
    }
    //else
    //{
    //    die("Conexion exitosa a la BD");
    //}




?>