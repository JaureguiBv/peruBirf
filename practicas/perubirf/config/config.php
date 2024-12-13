<?php

// Esta función establece la conexión a la base de datos
function getDBConnection()
{
    try {
        // Parámetros de conexión
        $dsn = "mysql:host=localhost;dbname=huanca_perubirf;charset=utf8mb4";
        $username = 'root'; // Cambiar por un usuario con permisos adecuados
        $password = ''; // Cambiar por la contraseña real

        // Establecer la conexión a la base de datos
        $pdo = new PDO($dsn, $username, $password);

        // Configuración para lanzar excepciones de errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Devolver la conexión PDO
        return $pdo;
    } catch (PDOException $e) {
        // Log del error (en caso de que algo falle)
        error_log("Error al conectar a la base de datos: " . $e->getMessage(), 3, "../../logs/errors.log");
        
        // Mostrar un mensaje genérico para el usuario, pero no los detalles técnicos
        die("Ocurrió un problema con la conexión.");
    }
}

?>
