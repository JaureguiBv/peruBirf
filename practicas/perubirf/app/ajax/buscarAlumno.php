<?php
// Incluir la conexión a la base de datos y el modelo correspondiente
include 'config/config.php';
include 'app/views/models/usuario.php';

if (isset($_GET['aluDni'])) {
    $aluDni = $_GET['aluDni'];

    // Crear una instancia del modelo para buscar el alumno
    $modelo = new UserModel();
    $alumno = $modelo->buscarAlumnoPorDni($aluDni);

    if ($alumno) {
        // Retornar los datos del alumno en formato JSON
        echo json_encode([
            'exito' => true,
            'nombre' => $alumno['aluNombre'] . ' ' . $alumno['aluApellido']
        ]);
    } else {
        // Si no se encuentra el alumno, enviar respuesta de error
        echo json_encode([
            'exito' => false,
            'nombre' => ''
        ]);
    }
}
?>
