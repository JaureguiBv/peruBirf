<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - SDG Sicaya</title>

    <link rel="stylesheet" href="app/views/css/inde.css">
</head>
<body>
    <header class="cabecera">
        <?php
            include("app/views/inc/navbar.php");
        ?>
        <div class="fondo"></div>
    </header>

    <main>
        <section class="especialidades">
            <p class="espTitulo text-center h2">Nuestras Especialidades</p>

            <div class="bloqueEspecialidades">
                <!-- Especialidad 1 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/automotriz/mecAutoIV.webp" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Mecanica Automotriz</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 2 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/electronica/ele4.webp" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Electronica</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 3 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/carpinteria/carp3.webp" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Carpinteria</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 4 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/alimentarias/indAlimentariasIII.webp" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Industrias Alimentarias</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 5 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/cosmetologia/cos1.webp" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Cosmetología</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 6 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/computacion/_com2.webp" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Computación</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 7 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Gastronomia</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Tejidos</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Construcción</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Confección Textil</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Especialidad</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                

            </div>
        </section>
        
        <section class="position-relative text-light">
            <article class="biblioteca">
                <div class="bContenedor">
                    <p class="h2 p-3">Biblioteca Virtual</p>
                    <p class="bParrafo text-secondary p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor pariatur, mollitia adipisci doloremque nisi consequuntur atque? Dolores beatae excepturi error numquam, deserunt voluptates hic, fuga alias facere accusantium, illo cupiditate!
                    </p>
                    <a class="btn btn-dark" href="login">Ver más</a>
                </div>
            </article>
        </section>
    </main>

    <?php
        include("app/views/inc/script.php");
        include("app/views/inc/foter.php");
    ?>
</body>
</html>