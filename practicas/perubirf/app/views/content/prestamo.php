<!-- vista.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("app/views/inc/meta.php"); ?>
    <title>Buscar Alumno y Libro</title>
    <link rel="stylesheet" href="app/views/css/prestamos.css">
</head>
<body>
    <header class="cabecera">
        <?php include("app/views/inc/navBiblioteca.php"); ?>
    </header>
    <main>
    <form action="prestarLibro" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label>Datos del alumno</label>
        </div>

        <div class="form-group d-flex gap-3">
            <div class="col-sm-3 d-flex">
                <input type="text" name="aluDni" id="aluDni" value="<?= isset($aluDni) ? $aluDni : '' ?>" class="form-control" placeholder="DNI Alumno" oninput="buscarAlumno()">
            </div>
            <div class="col-sm-3">
                <input type="text" name="nombreAlumno" id="nombreAlumno" value="<?= isset($nombreAlumno) ? $nombreAlumno : '' ?>" placeholder="Datos Alumno" class="form-control" readonly>
            </div>
            
        </div>

        <div>
            <label>Datos libro</label>
        </div>

        <div class="form-group d-flex gap-3">
            <div class="col-sm-3 d-flex">
                <input type="text" name="codLibro" value="<?= isset($codLibro) ? $codLibro : '' ?>" class="form-control" placeholder="Código Libro">
            </div>
            <div class="col-sm-3">
                <input type="text" name="nombreLibro" value="<?= isset($nombreLibro) ? $nombreLibro : '' ?>" placeholder="Datos Libro" class="form-control" readonly>
            </div>
            
        </div>
        
            <div class="form-group ">
                <label for="FechaDevolucion">Fecha de devolución</label>
                <div class="col-sm-3">
                    <input type="date" name="fechaDevolucion" id="FechaDevolucion" placeholder="Fecha de devolución" class="form-control" >
                </div>
            
             </div>
        <div class="form-group">
            <button type="submit" name="accion" value="Prestar" class="btn btn-outline-info">Prestar Libro</button>
        </div>
    </div>
</form>








    </main>
    <?php include('app/views/inc/script.php');?>
</body>
</html>
