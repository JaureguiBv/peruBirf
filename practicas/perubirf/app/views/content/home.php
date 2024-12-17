<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - SDG Sicaya</title>

    <link rel="stylesheet" href="app/views/css/h.css">
</head>

<body>
    <header class="cabecera">
        <?php
        include("app/views/inc/navbar.php");
        ?>
        <div class="fondo d-flex animate__animated animate__fadeIn">
            <div class="content">
                <div class="corusel_jornada">
                    <img src="app/views/img/jornadaCompleta.webp" alt="">
                </div>
                <div class="content_text ">
                    <h2 class="texto">¡Estudia, aprende y crece con nuestras especialidades!</h2>
                    <a class="btn1 btn btn-dark" href="especialidades">Ver especialidades</a>
                </div>

            </div>

        </div>

    </header>

    <main>
        <section class="evento " data-aos="zoom-in-up">
            <div class="eventos__bloque">
                <article class="eventos__contenedor">
                    <h2 class="eventos__titulo">Mantente al tanto de todas las actividades y novedades</h2>
                    <p class="eventos__parrafo ">¡Entérate de todo lo que viene en nuestra institución! En la sección de Próximos Eventos, encontrarás actividades académicas, deportivas y culturales diseñadas para nuestros estudiantes. Desde talleres especiales hasta competencias y celebraciones, cada evento está pensado para enriquecer tu experiencia escolar. ¡No olvides estar atento y participar en cada oportunidad!</p>
                    <a class="btn__eventos btn btn-dark" href="eventos">Proximos eventos</a>
                </article>

                <img src="app/views/img/proxEventos.webp" alt="" class="img__eventos" style="width:400px">
            </div>
        </section>
        <section class="bloqueMixto container-fluid py-5">
            <div class="row gap-5 justify-content-center">
                <article class="contenedorMixto col-8 col-md-3 text-center">
                    <i class="icono bi bi-pc-display fs-1 text-gradient mb-3"></i>
                    <h3 class="tituloMixto fs-4 fw-bold text-dark mb-3">Especialidades</h3>
                    <p class="parrafoMixto text-muted mb-4">En nuestra institución educativa contamos con 11 especialidades, diseñadas para brindar una formación integral y de calidad.</p>
                    <a href="especialidades" class="enlace btn btn-gradient  px-4 py-2 rounded-pill d-inline-flex align-items-center">
                        Conocer Especialidades <i class="bi bi-arrow-up-right-square-fill ms-2"></i>
                    </a>
                </article>
                <article class="contenedorMixto col-8 col-md-3 text-center">
                    <i class="icono bi bi-calendar-event fs-1 text-gradient mb-3"></i>
                    <h3 class="tituloMixto fs-4 fw-bold text-dark mb-3">Próximos Eventos</h3>
                    <p class="parrafoMixto text-muted mb-4">Mantente informado sobre nuestros próximos eventos y participa en actividades únicas, diseñadas para inspirar.</p>
                    <a href="eventos" class="enlace btn btn-gradient  px-4 py-2 rounded-pill d-inline-flex align-items-center">
                        Ver Próximos Eventos <i class="bi bi-arrow-up-right-square-fill ms-2"></i>
                    </a>
                </article>
                <article class="contenedorMixto col-8 col-md-3 text-center">
                    <i class="icono bi bi-globe fs-1 text-gradient mb-3"></i>
                    <h3 class="tituloMixto fs-4 fw-bold text-dark mb-3">Nuestra Historia</h3>
                    <p class="parrafoMixto text-muted mb-4">En nuestra historia se refleja el esfuerzo, la dedicación y el compromiso que han marcado cada paso de nuestra trayectoria.</p>
                    <a href="conocenos" class="enlace btn btn-gradient  px-4 py-2 rounded-pill d-inline-flex align-items-center">
                        Conoce nuestra historia <i class="bi bi-arrow-up-right-square-fill ms-2"></i>
                    </a>
                </article>

                
            </div>
        </section>



        <section class="biblioteca" data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-delay="200"
            data-aos-offset="0">
            <article class="biblioteca__texto text-center">
                <h2 class="titulo__biblioteca">Biblioteca Virtual</h2>
                <p class="parrafo__biblioteca">En la era digital, el acceso al conocimiento no tiene límites. Nuestra biblioteca virtual ha sido diseñada para brindarte una experiencia enriquecedora, moderna y accesible, permitiéndote explorar un vasto mundo de información desde cualquier lugar y en cualquier momento.</p>
                <a href="login" class="btn__biblioteca btn btn-dark">Ir a la biblioteca</a>
            </article>
        </section>



        <section class="info ">
            <div class="info__contenedor row text-center">
                <div class="col-12 col-md-4">
                    <article>
                        <small class="info__texto">Alumnos</small>
                        <p class="info__subtexto">671</p>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <article>
                        <small class="info__texto">Especialidades</small>
                        <p class="info__subtexto">11</p>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <article>
                        <small class="info__texto">Años</small>
                        <p class="info__subtexto">46</p>
                    </article>
                </div>
            </div>
        </section>





    </main>

    <?php
    include("app/views/inc/foter.php");
    include("app/views/inc/script.php");
    ?>
</body>

</html>