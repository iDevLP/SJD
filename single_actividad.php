<?php get_header(); ?>

<div class="container margen-seccion">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="row">
                        <div class="col info-single">

                            <!-- IMAGEN -->
                            <div class="imagen-single">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            </div>

                            <!-- FECHA -->
                            <h5>
                                <?php the_field('fecha_de_la_actividad'); ?>
                                </h6>

                                <!-- TÍTULO -->
                                <h4>
                                    <?php the_field('titulo_de_la_actividad'); ?>
                            </h5>

                            <!-- AUTOR -->
                            <h6>Escrito por: <strong>
                                    <?php the_field('autor_de_la_actividad'); ?>
                                </strong></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 my-4 mx-auto descripcion-single">
                            <p>
                                <?php the_field('actividad'); ?>
                            </p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>