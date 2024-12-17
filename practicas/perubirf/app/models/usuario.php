<?php

require_once 'config/config.php';  // Ajusta la ruta de acuerdo a la ubicación del archivo config.php

class UserModel {

    public function emailExists($email) {
        $db = getDBConnection();
        $sql = "SELECT COUNT(*) FROM tblusuarios WHERE userEmail = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $count = $stmt->fetchColumn();
        return $count > 0;
    }

    public function registerUser($email, $password, $userType) {
        $db = getDBConnection();
        $sql = "INSERT INTO tblusuarios (userEmail, userContrasena, userTipo) VALUES (:email, :password, :userType)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':userType', $userType, PDO::PARAM_STR);

        return $stmt->execute(); 
    }

    public function verifyLogin($email, $password) {
        $db = getDBConnection();  
        $sql = "SELECT userContrasena, userTipo FROM tblusuarios WHERE userEmail = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if ($user && password_verify($password, $user['userContrasena'])) {
            return $user['userTipo']; 
        }
        
        return false;  // Si la contraseña no es correcta, devuelve false
        
    }

    public function obtenerLibrosVirtuales() {
        $db = getDBConnection();

        $sql = "SELECT LibVirNombre, LibVirAutor, LibVirPortada FROM tbllibvirtual";
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);  
        } catch (PDOException $e) {
            return [];
        }
    }
    
 // Obtener todos los préstamos
 public function obtenerPrestamos() {
    $db = getDBConnection();
    $sql = "SELECT 
                p.preId, p.preFecha, p.preFechaDevolucion, p.preEstado, 
                a.aluDni, a.aluNombre, a.aluApellido, 
                l.libId, l.libNombre
            FROM 
                tblprestamos p
            JOIN 
                tblalumnos a ON p.aluDni = a.aluDni
            JOIN 
                tbllibros l ON p.libId = l.libId";
    
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        return []; // En caso de error
    }
}


public function registrarPrestamo($aluDni, $libId, $preFechaDevolucion) {
    $preFecha = date('Y-m-d'); // Fecha actual
    $preEstado = 'prestado';
    $db = getDBConnection();
    $sql = "INSERT INTO tblprestamos (aluDni, libId, preFecha, preFechaDevolucion, preEstado)
            VALUES (:aluDni, :libId, :preFecha, :preFechaDevolucion, :preEstado)";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':aluDni', $aluDni);
    $stmt->bindParam(':libId', $libId);
    $stmt->bindParam(':preFecha', $preFecha);
    $stmt->bindParam(':preFechaDevolucion', $preFechaDevolucion);
    $stmt->bindParam(':preEstado', $preEstado);

    return $stmt->execute();
}

// Eliminar un préstamo
public function eliminarPrestamo($preId) {
    $db = getDBConnection();
    $sql = "DELETE FROM tblprestamos WHERE preId = :preId";
    
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':preId', $preId, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
    
    public function verReportes() {
        $db = getDBConnection(); // Asegúrate de tener esta función en tu configuración
        $sql = "SELECT 
                    r.repId,
                    p.preId,
                    p.preFecha,
                    p.preFechaDevolucion,
                    p.preEstado,
                    a.aluDni,
                    a.aluNombre,
                    a.aluApellido,
                    l.libId,
                    l.libNombre
                FROM 
                    tblreportes r
                JOIN 
                    tblprestamos p ON r.preId = p.preId
                JOIN 
                    tblalumnos a ON p.aluDni = a.aluDni
                JOIN 
                    tbllibros l ON p.libId = l.libId";

        try {
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            error_log("Error en verReportes: " . $e->getMessage());
            return [];
        }
    }

    
    






    public function validarYRegistrar($nombre, $autor, $portada) {
        $db = getDBConnection();
        // Directorio para guardar las imágenes
        $directorio = "portadas/";

        // Validar que la carpeta existe, si no crearla
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }

        // Tamaño máximo permitido (2 MB)
        $tamanoMaximo = 2 * 1024 * 1024;

        // Tipos permitidos
        $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];

        // Validación de la portada
        if ($portada['error'] !== UPLOAD_ERR_OK) {
            return "Error al subir la portada.";
        }

        if (!in_array($portada['type'], $tiposPermitidos)) {
            return "El formato de la imagen no es válido. Solo se permiten JPG, PNG y GIF.";
        }

        if ($portada['size'] > $tamanoMaximo) {
            return "La imagen supera el tamaño máximo permitido de 2MB.";
        }

        // Generar un nombre único para la imagen
        $nombreImagen = uniqid() . "-" . basename($portada['name']);
        $rutaImagen = $directorio . $nombreImagen;

        // Mover la imagen a la carpeta
        if (!move_uploaded_file($portada['tmp_name'], $rutaImagen)) {
            return "Error al guardar la imagen.";
        }

        // Insertar en la base de datos
        $query =$db->prepare("INSERT INTO tbllibvirtual (LibVirNombre, LibVirAutor, LibVirPortada) VALUES (?, ?, ?)");
        $query->execute([$nombre, $autor, $rutaImagen]);

        return true;
    }
    }


?>
