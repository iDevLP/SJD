<?php wp_footer(); ?>

<div class="footer-background">
    <div class="container footer-seccion">
        <div class="col-md-10 mx-auto">

            <!-- COLUMNAS DE LINKS -->
            <div class="row filas-footer">
                <div class="col-lg-3 col-md-4 col-sm-6 footer-links ">
                    <h5>Actividades</h5>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/umaki')); ?>">Umaki</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/willay')); ?>">Willay</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/riku')); ?>">Riku</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/kimn')); ?>">Kimn</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/amulen')); ?>">Amulen</a>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/a-koa')); ?>">A Koa</a>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('category/rakiduam')); ?>">Rakiduam</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-links">
                    <h5>Escuela</h5>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('escuela/#mision')); ?>">Nosotros</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('escuela/#equipo')); ?>">Nuestro equipo</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('escuela/#cursos')); ?>">Ruta formativa</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('escuela/#testimonios')); ?>">Testimonios</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('escuela/#redesDeAyuda')); ?>">Redes de ayuda</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-links">
                    <h5>Contacto</h5>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('contacto/')); ?>">Información de contacto</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('contacto/#mapa')); ?>">Mapa de ubicación</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('contacto/')); ?>">Whatsapp</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('contacto/')); ?>">Redes Sociales</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('contacto/')); ?>">Programar visita</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-links">
                    <h5>Admisión</h5>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('admision/#calendario')); ?>">Calendario de
                            admisión</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('admision/')); ?>">Valor de matricula</a><br>
                    </div>
                    <div class="enlace">
                        <a href="<?php echo esc_url(home_url('admision/#matricula')); ?>">Postular a la escuela</a>
                    </div>
                </div>
            </div>

            <!-- LINEA DIVISIVA -->
            <hr class="linea">

            <!-- PARTE FINAL DEL FOOTER -->
            <div class="fila-footer">
                <img class="logo-footer" src="<?php echo get_theme_file_uri("img/logo.png") ?>">
                <div class="creditos">
                    <h6>Escuela Especial San Juan de Dios</h6>
                    <a href="tel:+56322360303">+56 32 236 0303</a>
                    <span> | </span>
                    <a href="mailto:escuelasanjuan@gmail.com ">escuelasanjuan@gmail.com</a>
                    <h6>©Todos los derechos reservados</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DOCUMENTACION DE BOOTSTRAP Y JQUERY -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
</body>

</html>