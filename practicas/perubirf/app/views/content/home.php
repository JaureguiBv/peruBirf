<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - SDG Sicaya</title>

    <link rel="stylesheet" href="app/views/css/index.css">
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
                        <img src="app/views/img/especialidad1.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Electrónica</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 2 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad2.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Mecatrónica</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 3 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad3.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Programación</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 4 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad4.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Diseño Gráfico</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 5 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad5.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Redes de Computadoras</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 6 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad6.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Ciberseguridad</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>

                <!-- Especialidad 7 -->
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Inteligencia Artificial</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Inteligencia Artificial</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Inteligencia Artificial</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Inteligencia Artificial</p>
                    <button type="button" class="btn btn-sm btn-outline-dark custom-width">Ver más</button>        
                </article>
                <article class="especialidadesContenedor">
                    <div class="especialidadImagen">
                        <img src="app/views/img/especialidad7.jpg" alt="Especialidad" class="img-fluid">
                    </div>    
                    <p class="espNombre h3 text-center">Inteligencia Artificial</p>
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