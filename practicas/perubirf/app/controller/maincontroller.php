<?php
session_start();

require_once 'app/models/usuario.php';

class MainController {

    public function handleRequest($action) {
        switch ($action) {
            case 'home':
                $this->home();
                break;
            case 'especialidades':
                $this->especialidades();
                break;
            case 'comunicados':
                $this->comunicados();
                break;
            case 'eventos':
                $this->eventos();
                break;
            case 'conocenos':
                $this->conocenos();
                break;
            case 'login':
                $this->login();
                break;
            case 'registrar':
                $this->registrar();
                break;
            case 'biblioteca':
                $this->biblioteca();
                break;
            case 'prestamo':
                $this->prestamo();
                break;
            case 'prestar':
                $this->prestarLibro();
                break;
            case 'logout':  
                $this->logout(); 
                break; 
            case 'reporte':
                $this->reporteLibros();
                break;
            default: 
                $this->error404(); 
                break; 
        }
    }

    // Funciones que cargan las vistas correspondientes
    public function home() {
        include 'app/views/content/home.php';
    }

    public function especialidades() {
        include 'app/views/content/especialidades.php';
    }

    public function comunicados() {
        include 'app/views/content/comunicados.php';
    }

    public function eventos() {
        include 'app/views/content/eventos.php';
    }

    public function conocenos() {
        include 'app/views/content/conocenos.php';
    }

    
    

    // Función para manejar el login
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            if (empty($email) || empty($password)) {
                $_SESSION['error'] = 'Por favor complete todos los campos.';
                header('Location: login');
                exit();
            }
    
            $userModel = new UserModel();
            $userType = $userModel->verifyLogin($email, $password);
    
            if ($userType) {
                $_SESSION['userEmail'] = $email;
                $_SESSION['userType'] = $userType;
                var_dump($_SESSION);
                header('Location: biblioteca');
                exit();
            } else {
                $_SESSION['error'] = 'Correo electrónico o contraseña incorrectos.';
                header('Location: login');
                exit();
            }
        } else {
            include 'app/views/content/login.php';
        }
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userType = $_POST['userType'];
    
            if (empty($email) || empty($password) || empty($userType)) {
                $_SESSION['error'] = 'Por favor complete todos los campos.';
                header('Location: registrar');
                exit();
            }
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = 'Correo electrónico no válido.';
                header('Location: registrar');
                exit();
            }
    
            if (strlen($password) < 6) {
                $_SESSION['error'] = 'La contraseña debe tener al menos 6 caracteres.';
                header('Location: registrar');
                exit();
            }
    
            $userModel = new UserModel();
    
            if ($userModel->emailExists($email)) {
                $_SESSION['error'] = 'El correo electrónico ya está registrado.';
                header('Location: registrar');
                exit();
            }
    
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $result = $userModel->registerUser($email, $hashedPassword, $userType);
    
            if ($result) {
                // Registro exitoso
                $_SESSION['userEmail'] = $email; // Guardamos el correo en la sesión
                $_SESSION['success'] = 'Usuario registrado correctamente.';
                header('Location: biblioteca');
                exit();
            } else {
                $_SESSION['error'] = 'Hubo un error al registrar el usuario. Intente nuevamente.';
                header('Location: registrar');
                exit();
            }
        } else {
            include 'app/views/content/registrar.php';
        }
    }
    
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new UserModel();
    }

    public function prestarLibro() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener datos del formulario
            $aluDni = $_POST['aluDni'];
            $libId = $_POST['libId'];
            $fechaDevolucion = $_POST['fechaDevolucion'];

            // Insertar el préstamo
            $resultado = $this->usuarioModel->insertarPrestamo($aluDni, $libId, $fechaDevolucion);
            if ($resultado) {
                $mensaje = "Préstamo registrado correctamente.";
            } else {
                $mensaje = "Error al registrar el préstamo.";
            }

            // Redirigir a la vista con mensaje
            header("Location: index.php?action=prestar&mensaje=" . urlencode($mensaje));
            exit();
        }

        // Mostrar la vista
        $prestamos = $this->usuarioModel->obtenerPrestamos();
        include 'app/views/content/prestamo.php';
    }

    public function eliminarPrestamo() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Eliminar el préstamo
            $resultado = $this->usuarioModel->eliminarPrestamo($id);
            if ($resultado) {
                $mensaje = "Préstamo eliminado correctamente.";
            } else {
                $mensaje = "Error al eliminar el préstamo.";
            }

            // Redirigir a la vista con mensaje
            header("Location: index.php?action=prestar&mensaje=" . urlencode($mensaje));
            exit();
        }
    }

    public function biblioteca() {
        if (!isset($_SESSION['userEmail'])) {
            header('Location: login');
            exit();
        }
    
        $userEmail = $_SESSION['userEmail'];
    
        $libroModel = new UserModel();
        $libros = $libroModel->obtenerLibrosVirtuales();
    
        if (empty($libros)) {
            $_SESSION['error'] = "No se pudieron obtener los libros.";
        }
    
        // Pasamos los libros y el correo del usuario a la vista
        include 'app/views/content/biblioteca.php';
    }

    public function reporteLibros(){
        include 'app/views/content/report.php';
    }
    public function prestamo() {
        include 'app/views/content/prestamo.php';
    }
    public function logout() {
        session_start(); // Asegurar que la sesión está activa
        session_unset(); // Limpiar las variables de sesión
        session_destroy(); // Destruir la sesión
        header('Location: login'); // Redirigir al login
        exit();
    }

    public function error404() {
        include 'app/views/content/404.php';
    }

    
    
}
?>
