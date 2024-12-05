<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("app/views/inc/meta.php"); ?>
    <title><?php echo APP_NAME; ?> - Prestar Libro</title>
    <link rel="stylesheet" href="app/views/css/prestamos.css">
</head>
<body>
    <header class="cabecera">
        <?php include("app/views/inc/navBiblioteca.php"); ?>
    </header>
    <main>
        <div class="container d-flex gap-5">
            <div class="formulario col-md-6">
                <div class="mb-3">
                    <h2 class="p-3">Prestar Libro</h2>
                    <form method="POST" action="index.php?action=prestar">
                        <label for="aluDni">DNI del Alumno:</label>
                        <input type="text" name="aluDni" id="aluDni" class="form-control" required value="">

                        <label for="libId">ID del Libro:</label>
                        <input type="number" name="libId" id="libId" class="form-control" required value="">

                        <label for="fechaDevolucion">Fecha de Devolución:</label>
                        <input type="date" name="fechaDevolucion" id="fechaDevolucion" class="form-control" required value="">

                        <button type="submit" class="btn btn-primary mt-3">Registrar Préstamo</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="my-4">Préstamos Registrados</h3>
                <?php if (!empty($_GET['mensaje'])): ?>
                    <div class="alert alert-info"><?php echo htmlspecialchars($_GET['mensaje']); ?></div>
                <?php endif; ?>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Pre ID</th>
                            <th>DNI Alumno</th>
                            <th>ID Libro</th>
                            <th>Fecha Devolución</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prestamos as $prestamo): ?>
                            <tr>
                                <td><?php echo $prestamo['PreID']; ?></td>
                                <td><?php echo $prestamo['aluDni']; ?></td>
                                <td><?php echo $prestamo['libId']; ?></td>
                                <td><?php echo $prestamo['fechaDevolucion']; ?></td>
                                <td><?php echo $prestamo['estado']; ?></td>
                                <td>
                                    <a href="index.php?action=eliminar&id=<?php echo $prestamo['PreID']; ?>" 
                                       class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
