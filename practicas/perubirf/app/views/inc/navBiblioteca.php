<?php

if (isset($_SESSION['userEmail'])) {
                                $userEmail = $_SESSION['userEmail'];
 } else {
     echo "Por favor, inicie sesión para acceder a la biblioteca.";
}
?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center text-dark" href="prestamo">
            <img src="app/views/img/logo.png" alt="Logo del Colegio" width="55" height="55" class="me-2">
            <span class="h2 mb-0">Perú Birf</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <a class="nav-link text-dark" href="biblioteca">Libros Virtuales</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-dark" href="prestamo">Agregar libro</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-dark" href="reporte">Reporte de libros</a>
                </li>
                
                <li class="nav-item dropdown me-3">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="conocenosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $userEmail  ?></a>
                    <ul class="dropdown-menu" aria-labelledby="conocenosDropdown">
                        
                    <li class="nav-item">
                        <a type="button" class="btn btn-dark" href="logout">Cerrar Sesión</a>
                    </li>  
                        
                        <!-- Agregar más información -->
                    </ul>
                </li>
                
                
            </ul>
        </div>
    </div>
</nav>
