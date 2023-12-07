<?php get_header(); ?>

<div class="container-fluid bg-admision"></div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row justify-content-center ">
                <div class="col-md-6 my-auto">
                    <h2 class="titulo-gerald fw-bold mb-4">Admisión</h2>
                    <p class="parrafo-gerald1">La Escuela Especial San Juan de Dios ofrece programas educativos de alta
                        calidad que brindan a sus estudiantes una oportunidad única de desarrollar habilidades y
                        conocimientos valiosos para su futuro.</p>
                </div>
                <div class="col-md-6 timeline">
                    <div class="">
                        <?php if (have_posts()): ?>
                            <?php query_posts("category_name=linea-tiempo"); ?>
                            <?php while (have_posts()):
                                the_post(); ?>
                                <div class="timeline-item right">
                                    <div class="timeline-content">
                                        <div class="timeline-evento parrafo-gerald2">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="timeline-contenido parrafo-gerald1">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fondo-azul py-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="row justify-content-evenly">
                    <div class="col-lg-5 col-md-12 espaciado-responsive-gerald">
                        <img class="my-4 img-fluid"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/admision-contacto.png">
                        <h4 class="titulo-gerald3">Conoce nuestros cursos</h4>
                        <p class="parrafo-gerald1 my-4">Contamos con una amplia gama de talleres laborales y cursos
                            básicos que están diseñados para satisfacer las necesidades de aprendizaje de todos nuestros
                            estudiantes.</p>
                        <div class="mt-5"><button class="button"><a class="text-decoration-none text-white"
                                    href="">Conocer
                                    cursos</a></div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <img class="my-4 img-fluid"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/admision-depen.png">
                        <h4 class="titulo-gerald3">Conoce nuestras dependencias</h4>
                        <p class="parrafo-gerald1 my-4">En nuestra escuela contamos con una serie de dependencias
                            diseñadas para brindar a nuestros estudiantes un ambiente de aprendizaje cómodo y acogedor.
                        </p>
                        <div class="mt-5"><button class="button"><a class="text-decoration-none text-white"
                                    href="">Conocer
                                    dependencias</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h3 class="titulo-gerald3 text-center fw-bold">¡Matriculate ahora!</h3>
            <h4 class="parrafo-gerald3 my-4 formulario__full">Apoderado</h4>
            <form class="formulario" action="" id="formularioApoderado">
                <div>
                    <label for="nombre-apoderado">Nombre completo:</label>
                    <input class="formulario__item" type="text" name="nombre-apoderado" id="nombre-apoderado"
                        placeholder="Ejemplo: Carlos Esteban Aránguiz Lopez" required>
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
                    <label for="correo-apoderado">Correo electrónico:</label>
                    <input class="formulario__item" type="text" name="correo-apoderado" id="correo-apoderado"
                        placeholder="Ejemplo: Jhon@doe.com" required
                        pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
                    <span class="error">✘ Ingresa tu correo electrónico</span>
                    <span class="correcto">✔ Bien hecho!</span>
                </div>
                <div class="formulario__full">
                    <h4 class="parrafo-gerald3 my-4 formulario__full">Alumno</h4>
                </div>
                <div>
                    <label for="nombre-alumno">Nombre completo:</label>
                    <input class="formulario__item" type="text" name="nombre-alumno" id="nombre-alumno"
                        placeholder="Ejemplo: Carlos Esteban Aránguiz Lopez" required>
                    <span class="error">✘ Ingresa tu nombre</span>
                    <span class="correcto">✔ Bien hecho!</span>
                </div>
                <div>
                    <label for="nacimiento">Fecha de nacimiento:</label>
                    <input class="formulario__item" type="date" name="nacimiento" id="nacimiento"
                        placeholder="Ejemplo: +56 9 12345678" required
                        pattern="^(\+?56)?(\s?)(0?9)(\s?)[98765432]\d{7}$">
                    <span class="error">✘ Ingresa la fecha del alumno</span>
                    <span class="correcto">✔ Bien hecho!</span>
                </div>
                <div class="formulario__full">
                    <label class="formulario__mensaje" for="diagnostico">Diagnóstico del alumno:</label>
                    <textarea class="formulario__item" name="diagnostico" id="diagnostico"
                        placeholder="Ejemplo: El niño/niña posee el problema de..." required></textarea>
                    <span class="error">✘ Ingresa un mensaje para la escuela</span>
                    <span class="correcto">✔ Bien hecho!</span>
                </div>
                <div class="formulario__full">
                    <button class="button" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>