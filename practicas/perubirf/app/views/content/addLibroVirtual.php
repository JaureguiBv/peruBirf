<!-- app/views/libros/registro.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'app/views/inc/meta.php';  ?>
    <title>Registrar Libro Virtual | <?php echo APP_NAME ?></title>
    <link rel="stylesheet" href="app/views/css/libroVirtual.css">
</head>

<body>

    <header class="cabecera">
        <?php require_once 'app/views/inc/navBiblioteca.php'; ?>
    </header>
    <main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2><i class="fas fa-book-open"></i> Registrar Libro Virtual</h2>
                    </div>
                    <div class="card-body">
                        <form action="AgregarLibroVirtual" method="POST" enctype="multipart/form-data">
                            <!-- Nombre del Libro -->
                            <div class="mb-4">
                                <label for="nombre" class="form-label">Nombre del Libro:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Introduce el nombre del libro">
                            </div>

                            <!-- Autor -->
                            <div class="mb-4">
                                <label for="autor" class="form-label">Autor:</label>
                                <input type="text" class="form-control" name="autor" id="autor" required placeholder="Introduce el autor del libro">
                            </div>

                            <!-- Portada del Libro -->
                            <div class="mb-4">
                                <label for="portada" class="form-label">Portada del Libro:</label>
                                <input type="file" class="file-input" name="portada" id="portada" accept="image/*" required>
                                <label for="portada" class="file-input-label"><i class="fas fa-upload"></i> Selecciona la portada</label>
                            </div>

                            <!-- Botón de envío -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar Libro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>

</body>

</html>