<!DOCTYPE html>
<html lang="en">
<head>
<?php
        include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - Reportes de Libros Prestados</title>
</head>
<body>
    <header class="cabecera">
        <?php include("app/views/inc/navBiblioteca.php"); ?>
        <div class="bg-dark pt-4 pb-4">
            <h2 class="text-center p-5 text-light">REPORTES DE LIBROS</h2>
        </div>
    </header>
    <main>
        <div class="table-responsive-sm mt-5">
            <?php if (!empty($reportes)): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Reporte</th>
                        <th>Cod. Alumno</th>
                        <th>Nombre Alumno</th>
                        <th>Apellido Alumno</th>
                        <th>Cod. Libro</th>
                        <th>Nombre Libro</th>
                        <th>Fecha Préstamo</th>
                        <th>Fecha Devolución</th>
                        <th>Estado</th>
                    </tr>
                        
                </thead>
                <tbody class="">
                    <?php foreach ($reportes as $reporte): ?>
                        <tr>
                            <td><?= htmlspecialchars($reporte['repId']); ?></td>
                            <td><?= htmlspecialchars($reporte['aluDni']); ?></td>
                            <td><?= htmlspecialchars($reporte['aluNombre']); ?></td>
                            <td><?= htmlspecialchars($reporte['aluApellido']); ?></td>
                            <td><?= htmlspecialchars($reporte['libId']); ?></td>
                            <td><?= htmlspecialchars($reporte['libNombre']); ?></td>
                            <td><?= htmlspecialchars($reporte['preFecha']); ?></td>
                            <td><?= htmlspecialchars($reporte['preFechaDevolucion']); ?></td>
                            <td><?= htmlspecialchars($reporte['preEstado']); ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p class="error">No se encontraron reportes para mostrar.</p>
            <?php endif; ?>
        </div>
        
    </main>
    <?php
        include_once 'app/views/inc/script.php'
    ?>
</body>
</html>