<!-- vista.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("app/views/inc/meta.php"); ?>
    <title><?php echo APP_NAME; ?> - Préstamo</title>
    <link rel="stylesheet" href="app/views/css/prestamo.css">
</head>

<body>
    <header>
        <?php include("app/views/inc/navBiblioteca.php"); ?>
    </header>
    <main>
        <div class="container my-4">
            <!-- Formulario de Préstamo -->
<div class="card shadow">
    <div class="card-body">
        <h2 class="pb-3 text-center">Registrar Préstamo</h2>
        <form action="prestarLibro" method="POST">
            <!-- Datos del Alumno -->
            <div class="mb-4">
                <label class="form-label">Datos del Alumno</label>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="aluDni" id="aluDni" class="form-control" placeholder="DNI Alumno" oninput="buscarAlumno()">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nombreAlumno" id="nombreAlumno" class="form-control" placeholder="Datos Alumno" readonly>
                    </div>
                </div>
            </div>

            <!-- Datos del Libro -->
            <div class="mb-4">
                <label class="form-label">Datos del Libro</label>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="codLibro" class="form-control" placeholder="Código Libro">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nombreLibro" class="form-control" placeholder="Datos Libro" readonly>
                    </div>
                </div>
            </div>

            <!-- Fecha de Devolución -->
            <div class="mb-4">
                <label for="FechaDevolucion" class="form-label">Fecha de devolución</label>
                <input type="date" name="fechaDevolucion" id="FechaDevolucion" class="form-control" placeholder="Fecha de devolución">
            </div>

            <!-- Botón de Submit -->
            <div class="d-grid">
                <button type="submit" name="accion" value="Prestar" class="btn btn-info btn-lg">
                    Prestar Libro
                </button>
            </div>
        </form>
    </div>
</div>


            <!-- Tabla de Préstamos -->
            <?php if (!empty($prestamos)): ?>
                <h2 class="text-center my-5">Préstamos Realizados</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>N° Prestamo</th>
                                <th>Cod. Alumno</th>
                                <th>Nombre Alumno</th>
                                <th>Apellido Alumno</th>
                                <th>Cod. Libro</th>
                                <th>Nombre Libro</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prestamos as $prestamo): ?>
                                <tr>
                                    <td><?= htmlspecialchars($prestamo['preId']); ?></td>
                                    <td><?= htmlspecialchars($prestamo['aluDni']); ?></td>
                                    <td><?= htmlspecialchars($prestamo['aluNombre']); ?></td>
                                    <td><?= htmlspecialchars($prestamo['aluApellido']); ?></td>
                                    <td><?= htmlspecialchars($prestamo['libId']); ?></td>
                                    <td><?= htmlspecialchars($prestamo['libNombre']); ?></td>
                                    <td><?= htmlspecialchars($prestamo['preEstado']); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Editar</button>
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="alert alert-warning text-center mt-4">No se encontraron reportes para mostrar.</p>
            <?php endif; ?>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <?php include('app/views/inc/script.php'); ?>
    <script>
    // Función para buscar al alumno por su DNI
    function buscarAlumno() {
        const aluDni = document.getElementById("aluDni").value;
        if (aluDni.length >= 8) { // Esperamos al menos 8 caracteres del DNI
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "buscarAlumno?aluDni=" + aluDni, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    if (data.success) {
                        document.getElementById("nombreAlumno").value = data.nombre;
                    } else {
                        document.getElementById("nombreAlumno").value = "Alumno no encontrado";
                    }
                }
            };
            xhr.send();
        } else {
            document.getElementById("nombreAlumno").value = '';
        }
    }

    // Función para buscar el libro por su código
    function buscarLibro() {
        const codLibro = document.getElementById("codLibro").value;
        if (codLibro.length >= 3) { // Esperamos al menos 3 caracteres para el código del libro
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "buscarLibro?codLibro=" + codLibro, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    if (data.success) {
                        document.getElementById("nombreLibro").value = data.nombre;
                    } else {
                        document.getElementById("nombreLibro").value = "Libro no encontrado";
                    }
                }
            };
            xhr.send();
        } else {
            document.getElementById("nombreLibro").value = '';
        }
    }
</script>
</body>

</html>
