<?php
session_start();

require_once 'app/models/usuario.php';

class MainController
{

    public function handleRequest($action)
    {
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
            case 'prestamo':
                $this->verPrestamos();
                break;
            case 'prestarLibro':
                $this->prestarLibro();
                break;
            case 'AgregarLibroVirtual':
                $this->AgregarLibVirtual();
                break;
            case 'logout':
                $this->logout();
                break;
            case 'reporte':
                $this->mostrarReportes();
                break;
            default:
                $this->error404();
                break;
        }
    }

    // Funciones que cargan las vistas correspondientes
    public function home()
    {
        include 'app/views/content/home.php';
    }

    // Controlador Especialidades
    public function especialidades() {
        include "app/views/content/especialidades.php";
            
    }
    





    public function comunicados()
    {
        include 'app/views/content/comunicados.php';
    }

    public function eventos()
    {
        include 'app/views/content/eventos.php';
    }

    public function conocenos()
    {
        include 'app/views/content/conocenos.php';
    }







    public function login(){
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

    public function registrar(){
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
                $_SESSION['userType'] = $userType; // Guardamos el tipo de usuario en la sesión
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









    public function biblioteca(){
        if (!isset($_SESSION['userEmail'])) {
            header('Location: login');
            exit();
        }

        $userEmail = $_SESSION['userEmail'];

        $libroModel = new UserModel();
        $libros = $libroModel->obtenerLibrosVirtuales();

        // Verificar si se están obteniendo libros
        if (empty($libros)) {
            $_SESSION['error'] = "No se pudieron obtener los libros.";
        }



        // Pasamos los libros y el correo del usuario a la vista
        include 'app/views/content/biblioteca.php';
    }


    public function verPrestamos(){
        if (!isset($_SESSION['userEmail'])) {
            header('location: login');
            exit();
        }

        $userEmail = $_SESSION['userEmail'];
        $obtenerPrestamos = new UserModel();
        $prestamos = $obtenerPrestamos->obtenerPrestamos();

        if (empty($prestamo)) {
            $_SESSION['error'] = "No se logro obtener los libros";
        }

        require_once ('app/views/content/prestamo.php');
    }
    public function prestarLibro() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['accion']) && $_POST['accion'] == 'Prestar') {
            $aluDni = $_POST['aluDni'] ?? '';
            $libId = $_POST['codLibro'] ?? '';
            $fechaDevolucion = $_POST['fechaDevolucion'] ?? '';

            if (!empty($aluDni) && !empty($libId) && !empty($fechaDevolucion)) {
                $model = new UserModel();
                $resultado = $model->registrarPrestamo($aluDni, $libId, $fechaDevolucion);

                if ($resultado) {
                    echo "<script>alert('Préstamo registrado exitosamente');</script>";
                    header('location: prestamo');
                } else {
                    echo "<script>alert('Error al registrar el préstamo');</script>";
                }
            } else {
                echo "<script>alert('Por favor complete todos los campos');</script>";
            }
        }

        require_once 'app/views/content/prestamo.php'; // Mostrar el formulario nuevamente
    }


















    public function mostrarReportes()
    {
        // Instanciamos el modelo
        $reporteModel = new UserModel();

        // Obtenemos los datos
        $reportes = $reporteModel->verReportes();

        // Pasamos los datos a la vista
        include 'app/views/content/report.php';
    }

    public function logout()
    {
        session_start(); // Asegurar que la sesión está activa
        session_unset(); // Limpiar las variables de sesión
        session_destroy(); // Destruir la sesión
        header('Location: login'); // Redirigir al login
        exit();
    }

    public function error404()
    {
        include 'app/views/content/404.php';
    }







    public function AgregarLibVirtual()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recibir los datos del formulario
            $nombre = $_POST['nombre'];
            $autor = $_POST['autor'];
            $portada = $_FILES['portada'];

            // Crear una instancia del modelo Libro
            $libro = new UserModel();

            // Validar y procesar la imagen
            $resultado = $libro->validarYRegistrar($nombre, $autor, $portada);

            if ($resultado === true) {
                echo "Libro registrado correctamente.";
                header("location: biblioteca");
            } else {
                echo $resultado; // Mostrar error
            }
        } else {
            include 'app/views/content/addLibroVirtual.php';
        }
    }
}
