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
        <h3 class="text-center fw-medium">Seleccione una categoría:</h3>
        <ul class="nav justify-content-center nav-underline" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Todos" data-bs-toggle="tab" data-bs-target="#Todos-pane"
                    type="button" role="tab" aria-controls="Todos-pane" aria-selected="true">Todos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="talleres-tab" data-bs-toggle="tab" data-bs-target="#talleres-tab-pane"
                    type="button" role="tab" aria-controls="talleres-tab-pane" aria-selected="false">Talleres</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="terapiaOcupacional-tab" data-bs-toggle="tab"
                    data-bs-target="#terapiaOcupacional-tab-pane" type="button" role="tab"
                    aria-controls="terapiaOcupacional-tab-pane" aria-selected="false">Terapia Ocupacional</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kinesiologia-tab" data-bs-toggle="tab"
                    data-bs-target="#kinesiologia-tab-pane" type="button" role="tab"
                    aria-controls="kinesiologia-tab-pane" aria-selected="false">Kinesiología</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="historias-tab" data-bs-toggle="tab" data-bs-target="#historias-tab-pane"
                    type="button" role="tab" aria-controls="historias-tab-pane" aria-selected="false">Historias de
                    progreso</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="actividadesExtracurriculares-tab" data-bs-toggle="tab"
                    data-bs-target="#actividadesExtracurriculares-tab-pane" type="button" role="tab"
                    aria-controls="actividadesExtracurriculares-tab-pane"
                    aria-selected="false">Extracurriculares</button>
            </li>
        </ul>




        <div class="tab-content" id="myTabContent">
            <div class="tab-pane  show active" id="Todos-pane" role="tabpanel" aria-labelledby="Todos" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
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

            </div>
            <div class="tab-pane " id="talleres-tab-pane" role="tabpanel" aria-labelledby="talleres-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (get_field("categoria_de_la_actividad") == "Taller"): ?>
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
            </div>
            <div class="tab-pane " id="terapiaOcupacional-tab-pane" role="tabpanel"
                aria-labelledby="terapiaOcupacional-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (get_field("categoria_de_la_actividad") == "Terapia ocupacional"): ?>
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
            </div>
            <div class="tab-pane " id="kinesiologia-tab-pane" role="tabpanel" aria-labelledby="kinesiologia-tab"
                tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (get_field("categoria_de_la_actividad") == "Kinesiología"): ?>
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
            </div>
            <div class="tab-pane " id="historias-tab-pane" role="tabpanel" aria-labelledby="historias-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (get_field("categoria_de_la_actividad") == "Historias de progreso"): ?>
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
            </div>
            <div class="tab-pane " id="actividadesExtracurriculares-tab-pane" role="tabpanel"
                aria-labelledby="actividadesExtracurriculares-tab" tabindex="0">
                <div class="actividades-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'actividad')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php if (get_field("categoria_de_la_actividad") == "Extracurricular"): ?>
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
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>