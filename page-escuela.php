<?php get_header(); ?>
<main class="container box-secciones-escuela">
    <section class="">
        <div class="row">
            <div class="col-md-6">
                <span class="text-accent-escuela fw-bold">Nuestra misión</span>
                <h2 class="fw-bold">Educación de calidad</h2>
                <p>La misión de nuestra escuela situada en Diego Portales 190 en Viña del Mar es proporcionar una
                    educación de alta calidad a niños, niñas y jóvenes con desafíos múltiples, físicos y cognitivos,
                    en
                    un entorno seguro y acogedor. Nuestra visión es ser reconocidos como líderes en la educación
                    especial en nuestra localidad y como una escuela de elección para familias y niños con
                    necesidades
                    especiales en nuestra comunidad. Queremos que nuestros estudiantes alcancen su máximo potencial
                    y se
                    conviertan en ciudadanos incluidos, productivos y felices.</p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_theme_file_uri("img/mision.jpg"); ?>" class="escuela-imagen" alt="">
            </div>
        </div>
    </section>
    <?php get_template_part("content", "profesionales"); ?>
    <section class="">
        <div class="row">
            <span class="text-accent-escuela fw-bold">Ruta formativa</span>
            <h3 class="fw-bold ">Conoce nuestros cursos.</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Umaki - Luna pequeña | Cursos 2° Y 4° Básico.
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                En la Escuela Especial San Juan de Dios, ofrecemos un curso para estudiantes de segundo
                                y cuarto año de básico llamado Umaki, que en lengua Rapa Nui significa «luna pequeña».
                                Este nombre refleja nuestro deseo de guiar a nuestros estudiantes en su camino de
                                aprendizaje y crecimiento continuo, y nuestro respeto por la cultura y el patrimonio de
                                los pueblos originarios de Chile. En el curso Umaki, nuestros estudiantes podrán
                                adquirir las habilidades y conocimientos necesarios para tener éxito en sus estudios.
                            </p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'Umaki')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Willay - Comunicar, avisar.
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>En la Escuela Especial San Juan de Dios, también ofrecemos un curso para estudiantes de
                                sexto y séptimo año de básico llamado Willay, que en lengua Quechua significa
                                «comunicar, avisar».

                                Este nombre refleja nuestra intención de fomentar en nuestros estudiantes la importancia
                                de la comunicación efectiva y de estar siempre al tanto de lo que sucede a su alrededor.
                                Al utilizar un término de una lengua originaria, queremos mostrar nuestro respeto y
                                nuestra conexión con esta rica cultura y su patrimonio. En el curso Willay, nuestros
                                estudiantes podrán desarrollar habilidades de comunicación y pensamiento crítico, que
                                les serán de gran utilidad en su vida académica</p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'Willay')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Riku - Brote vegetal que nace.
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>En la Escuela Especial San Juan de Dios, también tenemos un curso para estudiantes de
                                octavo año de básico llamado Riku, que en lengua Mapudungun significa «brote vegetal que
                                nace después de la lluvia».

                                Este nombre refleja nuestro deseo de fomentar en nuestros estudiantes el crecimiento y
                                la renovación constante, al igual que un brote vegetal que emerge después de una lluvia.
                                Al utilizar un término de una lengua originaria, queremos mostrar nuestro respeto y
                                nuestra conexión con esta rica cultura y su patrimonio. En el curso Riku, nuestros
                                estudiantes podrán desarrollar habilidades</p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'Riku')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Kimn - Aprender, conocer, saber.
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>En la Escuela Especial San Juan de Dios, también ofrecemos un curso Taller Laboral para
                                estudiantes de primer año, llamado Kimn, que en lengua Mapudungun significa «aprender,
                                conocer, saber».

                                Este nombre refleja nuestro compromiso con la enseñanza y el aprendizaje continuo, y
                                nuestro deseo de fomentar en nuestros estudiantes el interés por adquirir nuevos
                                conocimientos y habilidades. Al utilizar un término de una lengua originaria, queremos
                                mostrar nuestro respeto y nuestra conexión con esta rica cultura y su patrimonio. En el
                                curso Taller Laboral Kimn, nuestros estudiantes podrán adquirir las habilidades
                                prácticas y teóricas</p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'Kimn')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Amulen - Progresar, avanzar.
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                En la Escuela Especial San Juan de Dios, también ofrecemos un curso Taller Laboral para
                                estudiantes de primer año, llamado Amulen, que en lengua Mapudungun significa
                                «progresar, avanzar».

                                Este nombre refleja nuestro compromiso con el desarrollo y el crecimiento continuo de
                                nuestros estudiantes, y nuestro deseo de fomentar en ellos el interés por adquirir
                                nuevas habilidades y avanzar en sus carreras profesionales. Al utilizar un término de
                                una lengua originaria, queremos mostrar nuestro respeto y nuestra conexión con esta rica
                                cultura y su patrimonio.
                            </p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'Amulen')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            A koa - Alegres, contentos.
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                En la Escuela Especial San Juan de Dios, también ofrecemos un curso Taller Laboral para
                                estudiantes de segundo año, llamado A Koa, que en lengua Rapa Nui significa «alegres,
                                contentos».

                                Este nombre refleja nuestro deseo de fomentar un ambiente de aprendizaje positivo y
                                agradable en nuestra escuela, y de transmitir a nuestros estudiantes la importancia de
                                disfrutar del proceso de aprendizaje.

                                Al utilizar un término de una lengua originaria, queremos mostrar nuestro respeto y
                                nuestra conexión con esta rica cultura y su patrimonio. En el curso Taller Laboral A
                                Koa, nuestros estudiantes podrán adquirir las habilidades prácticas y teóricas
                                necesarias para desempeñarse.
                            </p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'A koa')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Rakiduam - Pensamiento, intención.
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                En la Escuela Especial San Juan de Dios, también ofrecemos un curso Taller Laboral para
                                estudiantes de tercer año, llamado Rakiduam, que en lengua mapudungum significa
                                «pensamiento, intención, opinión».

                                Este nombre refleja nuestro deseo de fomentar un ambiente de aprendizaje positivo y
                                agradable en nuestra escuela, y de transmitir a nuestros estudiantes la importancia de
                                disfrutar del proceso de aprendizaje, teniendo los princinpios del significado del
                                nombre.

                                Al utilizar un término de una lengua originaria, queremos mostrar nuestro respeto y
                                nuestra conexión con esta rica cultura y su patrimonio.
                            </p>
                            <div class="profesional-card-container">
                                <?php $the_query = new WP_Query(array('category_name' => 'Rakiduam')); ?>
                                <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()):
                                        $the_query->the_post(); ?>
                                        <?php if (in_category("trabajadores") == true): ?>
                                            <?php get_template_part("profesionalCard") ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                                    <p>
                                        <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="videos">
                    <?php $the_query = new WP_Query(array('category_name' => 'videos')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <ul class="video-list">
                            <?php while ($the_query->have_posts()):
                                $the_query->the_post(); ?>
                                <?php if (in_category("videos") == true): ?>
                                    <li class="video-item"
                                        data-video-url="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>">
                                        <span class="video-title">
                                            <?php the_title(); ?>
                                        </span>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-player">
                    <!-- Aquí se mostrará el video de WordPress -->
                </div>
            </div>
        </div>
    </section>
    <section id="redesDeAyuda" class="container">
        <div class="row pb-5 fila-redes">
            <div class="col-md-6">
                <h3 class="fw-bold">Redes de ayuda</h3>
                <p>
                    La Escuela Especial San Juan de Dios cuenta con una serie de
                    dependencias diseñadas para brindar a nuestros estudiantes un
                    ambiente de aprendizaje cómodo y acogedor. Nuestras aulas están
                    equipadas con tecnología y material didáctico acordes a las
                    necesidades educativas especificas, lo que nos permite ofrecer una
                    educación de calidad a nuestros estudiantes.La Escuela Especial San Juan De Dios cuenta con la ayuda
                    de importantes aliados los cuales nos
                    permiten brindar a nuestros estudiantes una excelente calidad de educación</p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_theme_file_uri("img/logod-redes.png") ?>" class="rda-imagen" alt="">
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalRedes" tabindex="-1" aria-labelledby="modalRedesLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <img class="imagen-modal" src="" alt="" id="modalImage">
                        <h4 class="modal-title bg-accent-escuela"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8 col-md-12" id="modalContent">
                                    <p class="modal-parrafo"></p>
                                </div>
                                <div class="lista-aportes col-lg-4 col-md-12">
                                    <ul>
                                        <li>a</li>
                                        <li>a</li>
                                        <li>a</li>
                                        <li>a</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button" data-bs-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-3 pb-5 g-5">
            <div class="col-md-6">
                <a class="text-decoration-none text-black" href="" data-bs-toggle="modal" data-bs-target="#modalRedes"
                    data-imagen="<?php echo get_theme_file_uri("img/andresbello.jpg") ?>"
                    data-titulo="Universidad Andres Bello" data-descripcion="¡Qué emoción sentirse conectados con la Facultad de Ciencias de la Rehabilitación de la
                                Universidad Andrès Bello! Desde hace 5 años tenemos el privilegio de tener un convenio
                                con esta prestigiosa institución, lo que nos permite ser un centro de práctica
                                profesional para estudiantes de Terapia Ocupacional y Kinesiología.

                                Esto nos llena de orgullo y satisfacción, ya que significa que nuestra escuela es
                                reconocida por su calidad y profesionalismo. Además, esta conexión nos permite ofrecer a
                                nuestros estudiantes la oportunidad de recibir experiencia práctica de manera más
                                cercana y efectiva. Estamos muy agradecidos con la Facultad de Ciencias de la
                                Rehabilitación por confiar en nosotros y estamos muy emocionados de seguir trabajando
                                juntos en el futuro.">
                    <div class="rda-card">
                        <img src="<?php echo get_theme_file_uri("img/andresbello.jpg") ?>"
                            alt="Universidad Andres Bello">
                        <div class="rda-card-body">
                            <h5 class="rda-card__title">Universidad Andres Bello</h5>
                            <p>¡Qué emoción sentirse conectados con la Facultad de Ciencias de la Rehabilitación de la
                                Universidad Andrès Bello! Desde hace 5 años tenemos el privilegio de tener un convenio
                                con esta prestigiosa institución, lo que nos permite ser un centro de práctica
                                profesional para estudiantes de Terapia Ocupacional y Kinesiología.

                                Esto nos llena de orgullo y satisfacción, ya que significa que nuestra escuela es
                                reconocida por su calidad y profesionalismo. Además, esta conexión nos permite ofrecer a
                                nuestros estudiantes la oportunidad de recibir experiencia práctica de manera más
                                cercana y efectiva. Estamos muy agradecidos con la Facultad de Ciencias de la
                                Rehabilitación por confiar en nosotros y estamos muy emocionados de seguir trabajando
                                juntos en el futuro.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-decoration-none text-black" href="" data-bs-toggle="modal" data-bs-target="#modalRedes"
                    data-imagen="<?php echo get_theme_file_uri("img/teleton.jpg") ?>" data-titulo="Teletón"
                    data-descripcion="El Instituto Teletón Valparaíso es un lugar clave para el bienestar de nuestros
                                estudiantes, ya que el 60% de ellos acuden allí para ser atendidos por profesionales de
                                diversas especialidades. La comunicación fluida entre la escuela y la Teletón es
                                esencial para garantizar que los estudiantes reciban el mejor tratamiento posible.

                                La colaboración entre la escuela y la Teletón permite a los estudiantes recibir atención
                                médica especializada, así como apoyo educativo y psicológico. Esto ayuda a mejorar su
                                calidad de vida y a alcanzar su máximo potencial. Es esencial seguir fortaleciendo esta
                                relación para continuar brindando el apoyo necesario a nuestros estudiantes y mejorar su
                                experiencia en el Instituto Teletón Valparaíso.">
                    <div class="rda-card">
                        <img src="<?php echo get_theme_file_uri("img/teleton.jpg") ?>" alt="Teletón">
                        <div class="rda-card-body">
                            <h5 class="rda-card__title">Teletón</h5>
                            <p>El Instituto Teletón Valparaíso es un lugar clave para el bienestar de nuestros
                                estudiantes, ya que el 60% de ellos acuden allí para ser atendidos por profesionales de
                                diversas especialidades. La comunicación fluida entre la escuela y la Teletón es
                                esencial para garantizar que los estudiantes reciban el mejor tratamiento posible.

                                La colaboración entre la escuela y la Teletón permite a los estudiantes recibir atención
                                médica especializada, así como apoyo educativo y psicológico. Esto ayuda a mejorar su
                                calidad de vida y a alcanzar su máximo potencial. Es esencial seguir fortaleciendo esta
                                relación para continuar brindando el apoyo necesario a nuestros estudiantes y mejorar su
                                experiencia en el Instituto Teletón Valparaíso.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-decoration-none text-black" href="" data-bs-toggle="modal" data-bs-target="#modalRedes"
                    data-imagen="<?php echo get_theme_file_uri("img/rotaryclub.jpg") ?>"
                    data-titulo="Rotary Club (Norte)" data-descripcion="¡Qué orgullo ser parte del Rotary Club de Viña del Mar! Desde el año 2016, nuestra
                                    organización se ha dedicado a apadrinar a todos los estudiantes de la escuela,
                                    brindándoles todo el apoyo y cuidado que necesitan. Hemos aportado con pañales,
                                    leche
                                    enshure, medicamentos y regalos institucionales, demostrando nuestro compromiso con
                                    la
                                    educación y el bienestar de los más jóvenes.

                                    Además, hemos reconocido a los apoderados más destacados, valorando su esfuerzo y
                                    dedicación a la educación de sus hijos. Estamos muy agradecidos por la oportunidad
                                    de
                                    colaborar con la comunidad">
                    <div class="rda-card">
                        <img src="<?php echo get_theme_file_uri("img/rotaryclub.jpg") ?>" alt="Puertas del Rotary Club">
                        <div class="rda-card-body">
                            <h5 class="rda-card__title">Rotary Club (Norte)</h5>
                            <p>¡Qué orgullo ser parte del Rotary Club de Viña del Mar! Desde el año 2016, nuestra
                                organización se ha dedicado a apadrinar a todos los estudiantes de la escuela,
                                brindándoles todo el apoyo y cuidado que necesitan. Hemos aportado con pañales,
                                leche
                                enshure, medicamentos y regalos institucionales, demostrando nuestro compromiso con
                                la
                                educación y el bienestar de los más jóvenes.

                                Además, hemos reconocido a los apoderados más destacados, valorando su esfuerzo y
                                dedicación a la educación de sus hijos. Estamos muy agradecidos por la oportunidad
                                de
                                colaborar con la comunidad</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-decoration-none text-black" href="" data-bs-toggle="modal" data-bs-target="#modalRedes"
                    data-imagen="<?php echo get_theme_file_uri("img/refugiodecristo.jpg") ?>"
                    data-titulo="Refugio de Cristo" data-descripcion="¡Qué bendición contar con el Refugio de Cristo como nuestro aliado! Desde el año 2008,
                                nos han proporcionado una hermosa, segura y funcional infraestructura que nos ha
                                permitido llevar a cabo nuestro proyecto educativo de manera efectiva.

                                Estamos muy agradecidos por su apoyo y confianza en nuestro trabajo, y estamos
                                comprometidos a seguir haciendo uso de esta valiosa oportunidad para mejorar la calidad
                                de nuestra educación. El Refugio de Cristo es una verdadera bendición para nuestra
                                escuela.">
                    <div class="rda-card">
                        <img src="<?php echo get_theme_file_uri("img/refugiodecristo.jpg") ?>" alt="Refugio de Cristo">
                        <div class="rda-card-body">
                            <h5 class="rda-card__title">Refugio de Cristo</h5>
                            <p>¡Qué bendición contar con el Refugio de Cristo como nuestro aliado! Desde el año 2008,
                                nos han proporcionado una hermosa, segura y funcional infraestructura que nos ha
                                permitido llevar a cabo nuestro proyecto educativo de manera efectiva.

                                Estamos muy agradecidos por su apoyo y confianza en nuestro trabajo, y estamos
                                comprometidos a seguir haciendo uso de esta valiosa oportunidad para mejorar la calidad
                                de nuestra educación. El Refugio de Cristo es una verdadera bendición para nuestra
                                escuela.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-decoration-none text-black" href="" data-bs-toggle="modal" data-bs-target="#modalRedes"
                    data-imagen="<?php echo get_theme_file_uri("img/iglesia.jpg") ?>" data-titulo="Iglesia de Jesucristo de los Santos de los ultimos días
                            " data-descripcion="¡Qué honor poder contar con el apoyo de la Iglesia de Jesucristo de los Santos de los
                                Últimos Días! Desde hace más de 5 años, ponen a disposición sus dependencias para que
                                nuestra escuela realice nuestra ceremonia de clausura, dándole un gran realce y
                                hermosura a esta actividad. Estamos muy agradecidos por su generosidad y apoyo.

                                Estamos emocionados de seguir colaborando juntos en el futuro. La presencia de la
                                Iglesia de Jesucristo en nuestra ceremonia de clausura es un verdadero regalo, y estamos
                                profundamente agradecidos por su contribución a nuestro éxito.">
                    <div class="rda-card">
                        <img src="<?php echo get_theme_file_uri("img/iglesia.jpg") ?>" alt="Iglesia mormona">
                        <div class="rda-card-body">
                            <h5 class="rda-card__title">Iglesia de Jesucristo de los Santos de los ultimos días</h5>
                            <p>¡Qué honor poder contar con el apoyo de la Iglesia de Jesucristo de los Santos de los
                                Últimos Días! Desde hace más de 5 años, ponen a disposición sus dependencias para que
                                nuestra escuela realice nuestra ceremonia de clausura, dándole un gran realce y
                                hermosura a esta actividad. Estamos muy agradecidos por su generosidad y apoyo.

                                Estamos emocionados de seguir colaborando juntos en el futuro. La presencia de la
                                Iglesia de Jesucristo en nuestra ceremonia de clausura es un verdadero regalo, y estamos
                                profundamente agradecidos por su contribución a nuestro éxito.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-decoration-none text-black" href="" data-bs-toggle="modal" data-bs-target="#modalRedes"
                    data-imagen="<?php echo get_theme_file_uri("img/informatica.jpg") ?>" data-titulo="Departamento de informática
                            " data-descripcion="¡Qué emocionante es saber que podemos contar con el apoyo del Departamento de Informática
                                del Congreso Nacional! A partir del 2022, funcionarios de esta repartición han
                                establecido un primer acercamiento con nosotros para apoyar a nuestros estudiantes.

                                Esto nos llena de alegría y esperanza, ya que significa que nuestra escuela es
                                reconocida por su calidad y profesionalismo. Además, esta conexión nos permite ofrecer a
                                nuestros estudiantes la oportunidad de adquirir experiencia práctica y aprender de los
                                mejores profesionales del campo de la informática. Estamos muy agradecidos con el
                                Departamento de Informática del Congreso Nacional por confiar en nosotros.">
                    <div class="rda-card">
                        <img src="<?php echo get_theme_file_uri("img/informatica.jpg") ?>"
                            alt="Integrante del equipo de informática junto a niño de la escuela">
                        <div class="rda-card-body">
                            <h5 class="rda-card__title">Departamento de informática</h5>
                            <p>¡Qué emocionante es saber que podemos contar con el apoyo del Departamento de Informática
                                del Congreso Nacional! A partir del 2022, funcionarios de esta repartición han
                                establecido un primer acercamiento con nosotros para apoyar a nuestros estudiantes.

                                Esto nos llena de alegría y esperanza, ya que significa que nuestra escuela es
                                reconocida por su calidad y profesionalismo. Además, esta conexión nos permite ofrecer a
                                nuestros estudiantes la oportunidad de adquirir experiencia práctica y aprender de los
                                mejores profesionales del campo de la informática. Estamos muy agradecidos con el
                                Departamento de Informática del Congreso Nacional por confiar en nosotros.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row pt-5 g-5">
            <div class="col-md-6">
                <h3 class="fw-bold mb-4">Ayuda a nuestra escuela</h3>
                <form class="formulario" action="">
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input class="formulario__item" type="text" name="nombre" id="nombre"
                            placeholder="Ejemplo: Jhon Doe" required>
                        <span class="error">✘ Ingresa tu nombre</span>
                        <span class="correcto">✔ Bien hecho!</span>
                    </div>

                    <div>
                        <label for="telefono">Teléfono:</label>
                        <input class="formulario__item" type="text" name="telefono" id="telefono"
                            placeholder="Ejemplo: +56 9 12345678" required
                            pattern="^(\+?56)?(\s?)(0?9)(\s?)[98765432]\d{7}$">
                        <span class="error">✘ Ingresa tu número telefónico</span>
                        <span class="correcto">✔ Bien hecho!</span>
                    </div>
                    <div class="formulario__full">
                        <label for="correo">Correo:</label>
                        <input class="formulario__item" type="text" name="correo" id="correo"
                            placeholder="Ejemplo: Jhon@doe.com" required
                            pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
                        <span class="error">✘ Ingresa tu correo electrónico</span>
                        <span class="correcto">✔ Bien hecho!</span>
                    </div>
                    <div class="formulario__full">
                        <label class="formulario__mensaje" for=" mensaje">Mensaje:</label>
                        <textarea class="formulario__item" name="mensaje" id="mensaje"
                            placeholder="Ejemplo: Hola me gustaria postular una ayuda para los niños de la escuela"
                            required></textarea>
                        <span class="error">✘ Ingresa un mensaje para la escuela</span>
                        <span class="correcto">✔ Bien hecho!</span>
                    </div>
                    <div class="formulario__full">
                        <button class="button mt-4" type="submit">Postular red</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="formulario-redes-img" src="<?php echo get_theme_file_uri("img/formulario-redes.png") ?>"
                    alt="">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>