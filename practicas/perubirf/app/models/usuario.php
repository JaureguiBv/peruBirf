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

        $sql = "SELECT  LibVirNombre, LibVirAutor, LibVirFoto FROM tbllibvirtual";
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);  
        } catch (PDOException $e) {
            return [];
        }
    }
    
    public function buscarAlumnoPorDni($aluDni) {
        $db = getDBConnection();
        $sql = "SELECT aluNombre, aluApellido FROM tblalumnos WHERE aluDni = :aluDni";
    
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':aluDni', $aluDni, PDO::PARAM_STR);
            $stmt->execute();
            $alumno = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($alumno) {
                return $alumno; // Retorna nombre y apellido del alumno
            } else {
                return null; // Retorna null si no se encuentra el alumno
            }
        } catch (PDOException $e) {
            return null; // En caso de error
        }
    }
    
    
    // Buscar libro por código
    public function buscarLibroPorCodigo($codLibro) {
        $db = getDBConnection();
        $sql = "SELECT libNombre FROM tbllibros WHERE libId = :codLibro";
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':codLibro', $codLibro, PDO::PARAM_STR);
            $stmt->execute();
            $libro = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($libro) {
                return $libro; // Retorna el nombre del libro
            } else {
                return null; // Retorna null si no se encuentra el libro
            }
        } catch (PDOException $e) {
            return null; // En caso de error, retornamos null
        }
    }
    
    // Función para insertar préstamo
    public function insertarPrestamo($aluDni, $codLibro, $fechaPrestamo, $fechaDevolucion) {
        $db = getDBConnection();
        $sql = "INSERT INTO tblprestamos (preFecha, preFechaDevolucion, aluDni, libId, preEstado) 
                VALUES (curdate(), :fechaDevolucion, :aluDni, :libId, 'prestado')";
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':aluDni', $aluDni, PDO::PARAM_STR);
            $stmt->bindParam(':libId', $codLibro, PDO::PARAM_INT);
            $stmt->bindParam(':fechaDevolucion', $fechaDevolucion, PDO::PARAM_STR);
            $stmt->execute();
            return true; // Inserción exitosa
        } catch (PDOException $e) {
            return false; // En caso de error
        }
    }
    
    public function obtenerPrestamos() {
        $db = getDBConnection();
        $sql = "SELECT * FROM tblprestamos";
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            error_log("Error al obtener préstamos: " . $e->getMessage());
            return [];
        }
    }
    

        
    }


?>
