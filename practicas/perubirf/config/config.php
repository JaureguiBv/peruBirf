<?php

// Esta función establece la conexión a la base de datos
function getDBConnection()
{
    try {
        // Parámetros de conexión
        $dsn = "mysql:host=localhost;dbname=huanca_perubirf;";
        $username = 'root'; // Cambiar por un usuario con permisos adecuados
        $password = ''; // Cambiar por la contraseña real

        // Establecer la conexión a la base de datos
        $pdo = new PDO($dsn, $username, $password);

        // Configuración para lanzar excepciones de errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Devolver la conexión PDO
        return $pdo;
    } catch (PDOException $e) {
        error_log("Error al conectar a la base de datos: " . $e->getMessage());
        
        die("Ocurrió un problema con la conexión.");
    }
}

?>
