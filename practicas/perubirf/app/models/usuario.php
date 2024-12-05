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
    
    
    public function insertarPrestamo($aluDni, $libId, $fechaDevolucion) {
        $db = getDBConnection();

        $sql = "INSERT INTO tbprestamos (aluDni, libId, fechaDevolucion, estado) 
                VALUES (:aluDni, :libId, :fechaDevolucion, 'prestado')";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':aluDni', $aluDni);
        $stmt->bindParam(':libId', $libId);
        $stmt->bindParam(':fechaDevolucion', $fechaDevolucion);

        return $stmt->execute();
    }

    // Obtener todos los préstamos
    public function obtenerPrestamos() {
        $db = getDBConnection();
        
        $sql = "SELECT * FROM tbprestamos";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un préstamo por ID
    public function obtenerPrestamoPorId($id) {
        $db = getDBConnection();
        
        $sql = "SELECT * FROM tbprestamos WHERE PreID = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function eliminarPrestamo($id) {
        $db = getDBConnection();

        $sql = "DELETE FROM tbprestamos WHERE PreID = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
    

    
    
        
    }


?>
