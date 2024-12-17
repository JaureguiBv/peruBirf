<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - Login</title>
    <link rel="stylesheet" href="app/views/css/logi.css">
</head>
<body class="">

    <header class="cabecera">
        <?php
            include("app/views/inc/navbar.php");
        ?>
    </header>

    <main>
        <div class="container d-flex justify-content-center align-items-center animate__animated animate__zoomIn" style="background-color:transparent; min-height: 50vh; margin-top: 80px;">
            <div class="p-5 rounded shadow-sm" style="width: 900px; background-color:white;">
                <h2 class="text-center text-dark mb-4">Iniciar sesión</h2>
                <form action="login" method="post">
                    <div class="form-floating mb-4">
                        <input 
                            type="email" 
                            id="emailInput" 
                            name="email"  
                            class="form-control" 
                            placeholder="Ingresa tu correo" 
                            required>
                        <label for="emailInput">Correo electrónico</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="Ingresa tu contraseña" 
                            required>
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-success p-2">Iniciar sesión</button>
                    </div>
                    <p class="parrafo text-center pt-3" style="color: #333;">"Si estás teniendo problemas para iniciar sesión, por favor contacta al administrador a través de nuestra página de Facebook <a class="text-primary" href="https://www.facebook.com/PeruBirfSicaya" target="_blank">Perú Birf SDG</a> o por WhatsApp al <a href="https://wa.me/51949766428?text=Hola,%20necesito%20ayuda%20con%20mi%20cuenta%20institucional." target="_blank">949766428</a>. Estamos disponibles para ayudarte con cualquier inconveniente. No dudes en escribirnos, estamos aquí para apoyarte."</p>
                </form>
            </div>
        </div>
        
        <!-- Mostrar el error si existe -->
        <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red;' class='text-center'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }
        ?>
    </main>

    <?php
        include("app/views/inc/script.php");
    ?>
</body>
</html>
