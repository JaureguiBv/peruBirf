<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - Crear cuenta</title>
</head>
<body class="bg-light">
    <header class="cabecera">
        <?php
            include("app/views/inc/navbar.php");
        ?>
    </header>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; ?>
                        <?php unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; ?>
                        <?php unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>

                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Registro de Usuario</h2>
                        <form id="registroForm" action="registrar" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico:</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    class="form-control" 
                                    placeholder="Ingrese su correo institucional"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    class="form-control" 
                                    placeholder="Ingrese su contraseña"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="userType" class="form-label">Tipo de usuario:</label>
                                <select name="userType" id="userType" class="form-select" required>
                                    <option value="escolar">Escolar</option>
                                    <option value="bibliotecaria">Bibliotecaria</option>
                                    <option value="director">Director</option>
                                </select>
                            </div>

                            <button type="submit"  class="btn btn-primary w-100">Registrarse</button>
                        </form>
                        <p class="text-center mt-3">¿Ya tienes una cuenta? <a href="login" class="text-decoration-none">Iniciar sesión</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
            include("app/views/inc/script.php");
        ?>

</body>
</html>
