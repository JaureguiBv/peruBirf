<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("app/views/inc/meta.php"); ?>
    <title><?php echo APP_NAME; ?> - Biblioteca Virtual</title>
    <link rel="stylesheet" href="app/views/css/bibli.css">
</head>

<body>
    <header class="cabecera">
        <?php include("app/views/inc/navBiblioteca.php"); ?>
        <div class="fondo d-grid">
            <div class="fondo_imagen animate__animated animate__fadeInLeft">
                <img src="app/views/img/userbiblioteca.png" alt="Biblioteca Virtual">
            </div>
            <div class="biTexto animate__animated animate__fadeInRight">
                <h2 class="biTitulo">Bienvenido a la biblioteca virtual</h2>
                <p class="lema">"Un espacio digital para mentes curiosas."</p>
            </div>

        </div>
    </header>

    <main class="container d-flex justify-content-center">
        <section class="w-75 bg-white libros shadow-lg rounded">
            <h2 class="liTitulo text-center text-primary py-4">Género de Libros</h2>

            <div class="libros_lista d-flex gap-5 flex-wrap justify-content-center">
                <?php if (!empty($libros)): ?>
                    <?php foreach ($libros as $libro): ?>
                        <div class="libro" style="width: 200px; height: 300px; position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <?php
                            $imagenPath = htmlspecialchars($libro['LibVirPortada'], ENT_QUOTES, 'UTF-8');
                            if (file_exists($imagenPath)):
                            ?>
                                <div class="imagen-container" style="width: 100%; height: 200px; overflow: hidden; border-radius: 15px;">
                                    <img style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" src="<?php echo $imagenPath; ?>" alt="<?php echo htmlspecialchars($libro['LibVirNombre'], ENT_QUOTES, 'UTF-8'); ?>" class="libro-imagen">
                                </div>
                            <?php else: ?>
                                <img style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px;" src="default-image.jpg" alt="Imagen no disponible" class="libro-imagen">
                            <?php endif; ?>

                            <div class="libro-info px-3 py-2">
                                <h3 class="libro-titulo text-truncate" style="font-size: 1rem; font-weight: bold; color: #333;"><?php echo htmlspecialchars($libro['LibVirNombre'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="libro-autor text-muted" style="font-size: 0.9rem;">Autor: <?php echo htmlspecialchars($libro['LibVirAutor'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>

                            
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">No hay libros disponibles en la biblioteca.</p>
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