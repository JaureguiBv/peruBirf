<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("app/views/inc/meta.php"); ?>
    <title><?php echo APP_NAME; ?> - Biblioteca Virtual</title>
    <link rel="stylesheet" href="app/views/css/biblioteca.css">
</head>
<body>
    <header class="cabecera">
        <?php include("app/views/inc/navBiblioteca.php"); ?>
        <div class="fondo d-grid">
            <div class="biTexto animate__animated animate__fadeInLeft">
                <h2 class="biTitulo">Bienvenido a la biblioteca virtual</h2>
                <p class="lema">"Un espacio digital para mentes curiosas."</p>
            </div>
            <div class="fondo_imagen animate__animated animate__fadeInRight">
                <img src="app/views/img/fondoBiblioteca.webp" alt="Biblioteca Virtual">
            </div>
        </div>
    </header>

    <main class="container d-flex justify-content-center">
        <section class=" w-75 bg-white libros">
            <h2 class="liTitulo text-center ">Género de Libros</h2>

            <div class="libros_lista d-flex gap-5">
                <?php if (!empty($libros)): ?>
                    <?php foreach ($libros as $libro): ?>
                        <div class="libro">
                            <img style="width: 200px; height:250px;" src="path/to/images/<?php echo htmlspecialchars($libro['LibVirFoto'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($libro['LibVirNombre'], ENT_QUOTES, 'UTF-8'); ?>" class="libro-imagen">
                            <h3><?php echo htmlspecialchars($libro['LibVirNombre'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p>Autor: <?php echo htmlspecialchars($libro['LibVirAutor'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay libros disponibles en la biblioteca.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php
        include("app/views/inc/foter.php");
        include("app/views/inc/script.php");
    ?>
</body>
</html>
