<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - Especialidades</title>
    <link rel="stylesheet" href="app/views/css/especialida.css">
</head>

<body>
    <header class="cabecera">
        <?php
        include("app/views/inc/navbar.php");
        ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="app/views/img/especialidades/fondoAutomotriz.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mecanica Automotriz</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="app/views/img/especialidades/fondoAlimentarias.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Industrias Alimentarias</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="app/views/img/especialidades/fondoEle.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Electricidad</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="app/views/img/especialidades/fondoCosmetologia.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cosmetología</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="app/views/img/especialidades/fondoCarpinteria.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Carpinteria</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="app/views/img/especialidades/fondoComputacion.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Computación</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main>


            <h2 class="text-center mt-5">Conoce Nuestras Especialidades</h2>
            <section class="especialidades">
                <article class="espContenedor" id="especialidad1">
                    <div class="imagenEsp">
                        <img src="app/views/img/automotriz/mecAutoI.webp" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Mec. Automotriz</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nostrum eum sequi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="app/views/img/carpinteria/carp2.webp" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Carpinteria</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>

                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="app/views/img/electronica/ele3.webp" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Electronica</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="app/views/img/alimentarias/indAlimentariasI.webp" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Industrias Alimentarias</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="app/views/img/cosmetologia/cos2.webp" alt="Foto especialidad">
                    </div>

                    <h4 class="nombreEsp">Cosmetología</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="app/views/img/computacion/_com5.webp" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Computación</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Gastronomía</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Tejidos</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Construcción</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Confección textil</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <article class="espContenedor" id="especialidad2">
                    <div class="imagenEsp">
                        <img src="" alt="Foto especialidad">
                    </div>
                    <h4 class="nombreEsp">Especialidad</h4>
                    <p class="parrafoEsp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quam omnis animi...</p>
                </article>
                <!-- Repeat for other articles -->
            </section>
    </main>

    <?php
    include("app/views/inc/script.php");
    ?>
    <?php
    include("app/views/inc/foter.php");
    ?>
</body>

</html>