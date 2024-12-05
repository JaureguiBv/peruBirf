<?php

// Incluir el controlador principal
require_once 'app/controller/maincontroller.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home'; // 'home' es la acción por defecto

// Crear una instancia del controlador y manejar la solicitud
$controller = new MainController();
$controller->handleRequest($action);
?>
