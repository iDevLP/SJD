<?php get_header(); ?>
<main class="box-secciones-index">
    <section class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div>
                    <span class="text-accent-escuela fw-bold">Escuela especial de retos múltiples</span>
                    <h2 class="fw-bold">San Juan De Dios</h2>
                    <p>Somos una escuela con experiencia desde 1999, educamos niños, niñas y jóvenes con desafios
                        múltiples, físicos y cognitívos. Contamos con una infraestructura segura, equipada con lo
                        necesario para brindar un ambiente de aprendizaje adecuado para cada uno de nuestros
                        estudiantes
                        gracias a nuestras redes de ayuda.</p>
                    <a href="<?php echo esc_url(home_url('escuela/#redesDeAyuda')); ?>"
                        class=" button text-center text-decoration-none">Apoyar a la escuela</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="middle-image" src="<?php echo get_theme_file_uri("img/banner.png") ?>" alt="">
            </div>
        </div>
    </section>
    <!-- --- Nuestras características --- -->
    <section class="bg-gray-escuela">
        <div class="container ">
            <span class="text-accent-escuela fw-bold">Los mejores de la región.</span>
            <h3 class="fw-bold mb-5">Nuestras características</h3>
            <div class="row gy-5">
                <div class="col-md-4">
                    <article class="caracteristicas-card">
                        <header class="caracteristicas-card__header">
                            <i class="caracteristicas-card__icon fa-solid fa-dove"></i>
                        </header>
                        <h5 class="caracteristicas-card__title">Espíritu y bondad</h5>
                        <p>Nuestros estudiantes participan en un ambiente de cooperación y colaboración en la
                            escuela.
                        </p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="caracteristicas-card">
                        <img class="caracteristicas__img" src="<?php echo get_theme_file_uri("img/features.png") ?>"
                            alt="">
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="caracteristicas-card">
                        <header class="caracteristicas-card__header">
                            <i class="caracteristicas-card__icon fa-solid fa-sack-dollar"></i>
                        </header>
                        <h5 class="caracteristicas-card__title">Gratuita</h5>
                        <p>Nuestra escuela se sustenta con aportes de terceros, razón por la cual no tendras que
                            pagar
                            nada.
                        </p>
                    </article>

                </div>
                <div class="col-md-4">
                    <article class="caracteristicas-card">
                        <header class="caracteristicas-card__header">
                            <i class="caracteristicas-card__icon fa-solid fa-ranking-star"></i>
                        </header>
                        <h5 class="caracteristicas-card__title">Calidad en educación</h5>
                        <p>Nuestros docentes y especialistas trabajan en conjunto para ofrecer una educación de alta
                            calidad
                            a sus estudiantes.</p>
                    </article>

                </div>
                <div class="col-md-4">
                    <article class="caracteristicas-card">
                        <header class="caracteristicas-card__header">
                            <i class="caracteristicas-card__icon fa-solid fa-shield-heart"></i>
                        </header>
                        <h5 class="caracteristicas-card__title">Aula segura</h5>
                        <p>Ofrecemos recursos y programas para
                            mejorar
                            la alimentación, la actividad física y el bienestar emocional.</p>
                    </article>

                </div>
                <div class="col-md-4">
                    <article class="caracteristicas-card">
                        <header class="caracteristicas-card__header">
                            <i class="caracteristicas-card__icon fa-solid fa-face-laugh-beam"></i>
                        </header>
                        <h5 class="caracteristicas-card__title">Aprendizaje divertido</h5>
                        <p>Realizamos actividades y eventos que les permiten aprender de una manera divertida y
                            lúdica.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- --- Actividades --- -->
    <section class="container">
        <span class="text-accent-escuela fw-bold">Actividades en casa.</span>
        <h3 class="fw-bold">Recursos académicos</h3>
        <p class="mb-0 pb-0">Explora las actividades que tenemos para nuestro alumnado de manera online.</p>
        <div class="actividades-card-container">
            <?php $the_query = new WP_Query(array('category_name' => 'actividad', 'posts_per_page' => 3)); ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()):
                    $the_query->the_post(); ?>
                    <?php get_template_part("actividad-card") ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>
                    <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-4 ">
            <a href="<?php echo esc_url(home_url('actividades/')); ?>"
                class="button enter--button text-center text-decoration-none">Ver Actividades</a>
        </div>

    </section>
    <!-- --- Testimonios de la comunidad -- -->
    <section class="container">
        <div class="row align-items-center gy-5">
            <div class="col-md-6">
                <div>
                    <span class="text-accent-escuela fw-bold">Somos una familia.</span>
                    <h3 class="fw-bold">Testimonios de la comunidad</h3>
                    <p>Vea cómo la Escuela Especial San Juan de Dios está brindando una
                        educación excepcional a niños y jóvenes con necesidades especiales
                        y cómo está cambiando sus vidas para mejor. Los padres de los
                        estudiantes hablan sobre su experiencia y cómo han visto a sus hijos
                        progresar gracias a la educación especial que reciben en la escuela.
                    </p>
                    <div>
                        <a href="<?php echo esc_url(home_url('escuela/#testimonios')); ?>"
                            class=" button text-center text-decoration-none">Nuestros testimonios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="testimonios__image" src="<?php echo get_theme_file_uri("img/testimonio.png") ?>" alt="">
            </div>
        </div>
    </section>
    <!-- Invitación a admisión -->
    <section class="bg-secondary-escuela">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="fw-bold">¿Quieres ser parte de la comunidad?</h3>
                        <p>Estamos abiertos a recibir a todas las familias interesadas en brindar a sus hijos una
                            educación
                            de
                            calidad. Si desea obtener más información sobre nuestra escuela o programas, no dude en
                            ponerse
                            en
                            contacto con nosotros. <br>
                            ¡Esperamos verlos pronto!
                        </p>
                        <a class="button center--button text-decoration-none "
                            href="<?php echo esc_url(home_url('admision/')); ?>">Admisión</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>