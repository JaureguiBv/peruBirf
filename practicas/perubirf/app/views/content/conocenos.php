<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("app/views/inc/meta.php");
    ?>
    <title><?php echo APP_NAME; ?> - Sobre Nosotros</title>
    <link rel="stylesheet" href="app/views/css/conocenos.css">
</head>
<body>
    <header class="cabecera">
        <?php
            include("app/views/inc/navbar.php");
        ?>
        <div class="conocenos bg-dark">
            <h2 class="tituloCon text-light text-center">Conócenos más</h2>
        </div>
    </header>
    <main>
        <section class="historia" id="his">
            <article class="hisContenedor d-grid">
                <div class="imagenHis">
                    <img src="your-image-path.jpg" alt="Imagen de los profesores" class="img-fluid">
                </div>
                <div class="textHis">
                    <h3 class="tituloHis">RESEÑA HISTÓRICA</h3>
                    <p class="parrafoHis">En el año de 1970 el Gobierno del General Juan Velasco Alvarado firma un convenio con la ONU a través del Banco Internacional de Reconstrucción y Fomento de Alemania para la construcción de Centros Educativos a nivel nacional, entre ellos nuestra Institución.</p>
                    <p class="parrafoHis">El 03 de marzo de 1978, mediante R.D N° 00161 se fusionan los Centros Educativos "Santo Domingo de Guzmán" y el Instituto Nacional Agropecuario N° 60, llamándose <strong>PERÚ BIRF "Juan Parra del Riego"</strong>, en honor al convenio; este Centro Educativo comienza a funcionar con 18 secciones en dos turnos, siendo el primer Director el profesor Carlos Orellana Santibáñez, así han pasado a dirigir el plantel otros Directores y en Enero del 2024 asume la Dirección el Lic. Teobaldo Alquilino JUICA VELÁSQUEZ quien viene Designado.</p>
                    <p class="parrafoHis">El 30 de noviembre de 1984, mediante R.D N° 4085, se resuelve a designar a nuestra institución: Colegio Estatal Perú Birf "Santo Domingo de Guzmán". Posteriormente el 21 de septiembre del año de 1994 según R.D N° 04642, se le reconoce como Colegio Estatal Politécnico Perú Birf "Santo Domingo de Guzmán" de Sicaya, en mérito a ello a partir del 2013 se celebra el aniversario el 21 de septiembre.</p>
                    <p class="parrafoHis">La institución Educativa Politécnico Perú Birf "SDG", viene funcionando desde el 2015, bajo el modelo de Servicio Educativo "Jornada Escolar Completa" albergando a la Juventud Estudiosa en Aulas Funcionales y/o Especializadas por cada Área Curricular y Mobiliario Moderno, gracias al apoyo directo generoso de los Padres de Familia. En el área Técnica ofrecemos las Especialidades de: Carpintería, Gastronomía - Industrias Alimentarias - Mecánica Automotriz, Construcciones Metálicas, Construcción Civil, Confección Textil, Tejidos Artesanales, Cosmetología, Electricidad y Computación.</p>
                </div>
            </article>
        </section>

        <section class="ubicacion" id="ubi">
            <h2 class="tituloUbi text-center m-3">Nuestra ubicación</h2>
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.448546926828!2d-75.2780044151133!3d-12.012610554570884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ebe44783a31e1%3A0xc4b91284d7381369!2sColegio%20Peru%20Birf%2C%20Sicaya!5e0!3m2!1ses!2spe!4v1732567588600!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="vision d-grid" id="val">
    <!-- Visión -->
    <article class="contenedorvi bg-light">
        <i class="bi bi-eye icon"></i>
        <h4 class="tituloVal">Visión</h4>
        <p class="textoVal">El año 2028 seremos una institución educativa acreditada con formación técnica sustentada en lo científico y humanista que contribuye a que todas nuestras estudiantes desarrollen su potencial en la adolescencia, con mentalidad innovadora, creativa y emprendedora que les permita acceder al mundo laboral competitivo, resolver problemas, practicar valores, y asuman ciudadanos con derechos y responsabilidades, contribuyendo al desarrollo de su localidad y del país, asegurando la sostenibilidad ambiental con los avances mundiales, concordancia con el perfil de egreso del CNEB para enfrentar los desafíos del mundo competitivo.</p>
    </article>

    <!-- Misión -->
    <article class="contenedorvi bg-light">
        <i class="bi bi-rocket-takeoff icon"></i>
        <h4 class="tituloVal">Misión</h4>
        <p class="textoVal">En el año 2028 ser una institución de la calidad educativa, líder en la formación técnica integral de los estudiantes, con habilidades, destrezas y actitudes con sólidos valores, desarrollando los aprendizajes establecidos en el Currículo Nacional de Educación Básica y Catálogo Nacional de Oferta Formativa, en espacios seguros, inclusivos, con el uso de las estrategias de enseñanza aprendizaje y de acompañamiento pedagógico, dando relevancia a la sana convivencia y a la no violencia, con proyección a la comunidad, capaces de analizar, proponer y enfrentar los retos del mundo moderno.</p>
    </article>
</section>
         <!-- Sección Valores -->
         <section class="valores">
                <p class="h2 text-center">VALORES</p>

                <div class="valor-item">
                    <h4 class="valTitulo">La ética</h4>
                    <p>Que inspira una educación promotora de los valores de paz, solidaridad, justicia, libertad, honestidad, tolerancia, responsabilidad, trabajo, verdad y pleno respeto a las normas de convivencia; que fortalece la conciencia moral individual y hace posible una sociedad basada en el ejercicio permanente de la responsabilidad ciudadana.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">Equidad</h4>
                    <p>Que garantiza a todos iguales oportunidades de acceso, permanencia y trato en un sistema educativo de calidad.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">La inclusión</h4>
                    <p>Que incorpora a las personas con discapacidad, grupos sociales excluidos, marginados y vulnerables, especialmente en el ámbito rural, sin distinción de etnia, religión, sexo u otra causa de discriminación, contribuyendo así a la eliminación de la pobreza, la exclusión y las desigualdades.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">La calidad</h4>
                    <p>Que asegura condiciones adecuadas para una educación integral, pertinente, abierta, flexible y permanente.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">La democracia</h4>
                    <p>Que promueve el respeto irrestricto a los derechos humanos, la libertad de conciencia, pensamiento y opinión, el ejercicio pleno de la ciudadanía y el reconocimiento de la voluntad popular; y que contribuye a la tolerancia mutua en las relaciones entre las personas y entre mayorías y minorías, así como al fortalecimiento del Estado de Derecho.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">La interculturalidad</h4>
                    <p>Que asume la riqueza de la diversidad cultural, étnica y lingüística del país, y encuentra en el reconocimiento y respeto a las diferencias, así como el mutuo conocimiento y actitud de aprendizaje del otro, sustento para la convivencia armónica y el intercambio entre las diversas culturas del mundo.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">La conciencia ambiental</h4>
                    <p>Que motiva el respeto, cuidado y conservación del entorno natural como garantía para el desenvolvimiento de la vida.</p>
                </div>

                <div class="valor-item">
                    <h4 class="valTitulo">La creatividad y la innovación</h4>
                    <p>Que promueve la generación de soluciones creativas, la capacidad de imaginar y el pensar diferente para transformar y construir realidades, lo que implica un cambio en la mentalidad y las prácticas en todos los ámbitos de la sociedad.</p>
                </div>
            </section>
    </main>

    <footer>
        <?php
            include("app/views/inc/foter.php");
            include("app/views/inc/script.php");
        ?>
    </footer>
</body>
</html>