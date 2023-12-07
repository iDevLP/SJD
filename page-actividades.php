<?php get_header(); ?>
<section class="container">
    <div class="row align-items-center py-5">
        <div class="col-md-6">
            <div>
                <span class="text-accent-escuela fw-bold">Recursos académicos para nuestro alumnado</span>
                <h2 class="fw-bold">Actividades</h2>
                <p>En la Escuela Especial San Juan de Dios, contamos con una amplia
                    gama de talleres laborales y cursos básicos que están diseñados para
                    satisfacer las necesidades de aprendizaje de todos nuestros
                    estudiantes. Cada uno de estos cursos tiene un nombre propio que se
                    asigna de acuerdo a su finalidad y al grupo etario al que está dirigido.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img class="middle-image" src="<?php echo get_theme_file_uri("img/recursos.jpg") ?>" alt="">
        </div>
    </div>
</section>
<section class="py-5 container section-actividades">
    <div class="row py-3">
        <h3 class="text-center fw-medium">Seleccione un curso:</h3>
        <ul class="nav justify-content-center nav-underline" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Todos" data-bs-toggle="tab" data-bs-target="#Todos-pane"
                    type="button" role="tab" aria-controls="Todos-pane" aria-selected="true">Todos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="umaki-tab" data-bs-toggle="tab" data-bs-target="#umaki-tab-pane"
                    type="button" role="tab" aria-controls="umaki-tab-pane" aria-selected="false">Umaki</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="willay-tab" data-bs-toggle="tab" data-bs-target="#willay-tab-pane"
                    type="button" role="tab" aria-controls="willay-tab-pane" aria-selected="false">Willay</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="riku-tab" data-bs-toggle="tab" data-bs-target="#riku-tab-pane"
                    type="button" role="tab" aria-controls="riku-tab-pane" aria-selected="false">Riku</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kimn-tab" data-bs-toggle="tab" data-bs-target="#kimn-tab-pane"
                    type="button" role="tab" aria-controls="kimn-tab-pane" aria-selected="false">Kimn</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="amulen-tab" data-bs-toggle="tab" data-bs-target="#amulen-tab-pane"
                    type="button" role="tab" aria-controls="amulen-tab-pane" aria-selected="false">Amulen</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="akoa-tab" data-bs-toggle="tab" data-bs-target="#akoa-tab-pane"
                    type="button" role="tab" aria-controls="akoa-tab-pane" aria-selected="false">A Koa</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rakiduam-tab" data-bs-toggle="tab" data-bs-target="#rakiduam-tab-pane"
                    type="button" role="tab" aria-controls="rakiduam-tab-pane" aria-selected="false">Rakiduam</button>
            </li>
        </ul>




        <div class="tab-content" id="myTabContent">
            <div class="tab-pane  show active" id="Todos-pane" role="tabpanel" aria-labelledby="Todos" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/actividad')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>

            </div>
            <div class="tab-pane " id="umaki-tab-pane" role="tabpanel" aria-labelledby="umaki-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'umaki')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/umaki')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>
            <div class="tab-pane " id="willay-tab-pane" role="tabpanel" aria-labelledby="willay-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'willay')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/willay')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>
            <div class="tab-pane " id="riku-tab-pane" role="tabpanel" aria-labelledby="riku-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'riku')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/riku')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>
            <div class="tab-pane " id="kimn-tab-pane" role="tabpanel" aria-labelledby="kimn-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'kimn')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/kimn')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>
            <div class="tab-pane " id="amulen-tab-pane" role="tabpanel" aria-labelledby="amulen-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'amulen')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/amulen')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>
            <div class="tab-pane " id="akoa-tab-pane" role="tabpanel" aria-labelledby="akoa-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'a-koa')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/a-koa')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>
            <div class="tab-pane " id="rakiduam-tab-pane" role="tabpanel" aria-labelledby="rakiduam-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'rakiduam')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (in_category("actividad") == true): ?>
                                <?php get_template_part("actividad-card") ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="<?php echo esc_url(home_url('category/rakiduam')); ?>"
                        class="button center--button text-decoration-none ">Ver todas las actividades</a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>