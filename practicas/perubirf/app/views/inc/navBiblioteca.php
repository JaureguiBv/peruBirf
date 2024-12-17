<?php

if (isset($_SESSION['userEmail']) && isset($_SESSION['userType'])) {
    $userEmail = $_SESSION['userEmail'];
    $userType = $_SESSION['userType'];
} else {
    header("location: login");
}


?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
    <div class="container-fluid">
        <a class="navbar-brand d-flex gap-3 align-items-center text-dark" style="font-family: 'Open Sans', sans-serif;" href="biblioteca">
            <img src="app/views/img/logo.png" alt="Logo del Colegio" width="55" height="55" class="me-2">
            <div class="text-start">
                <h1 class=" mb-0" style="font-family: 'Open Sans', sans-serif; font-weight: 700; font-size: 1.7rem;">PERÚ BIRF</h1>
                <small class="sdg " style="font-family:'Open Sans', sans-serif; font-weight: 400; font-size:16px;"> SDG - Sicaya</small>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <?php if ($userType === 'bibliotecaria' || $userType === 'director'): ?>
                    <li class="nav-item me-3">
                        <a class="nav-link text-dark" href="biblioteca">Libros Virtuales</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-dark" href="AgregarLibroVirtual">Agregar Libro Virtual</a>

                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link text-dark" href="prestamo">Prestar libro</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-dark" href="reporte">Reporte de libros</a>
                    </li>
                <?php endif; ?>
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Ver Perfil
                    </button>
                    <ul class="dropdown-menu p-2">
                        <a href="biblioteca" class="d-flex gap-2 mb-2 text-decoration-none text-dark dropdown-item">
                            <div>
                                <img src="app/views/img/iconAutor.png" alt="" width="50px" height="50px" style="border-radius: 30px;">
                            </div>
                            <div>
                                <li class="nav-item">
                                    <small><?php echo $userEmail; ?></small>
                                </li>
                                <li class="nav-item">
                                    <small><?php echo $userType; ?></small>
                                </li>
                            </div>
                        </a>

                        <li><a class="dropdown-item" href="logout">Cerrar Sesión</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </div>
</nav>