<section id="equipo" class="section-actividades">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <span class="text-accent-escuela fw-bold text-center d-block ">Conoce a nuestro equipo</span>
            <h3 class="fw-bold text-center">Somos especialistas en retos múltiples.</h3>
            <!-- <p class="text-left ">Nuestros maestros estan capacitados para trabajar con niños con necesidades
                especiales. Además,
                nuestro personal docente trabaja en estrecha colaboración con psicopedagoga, kinesiologo,
                terapeuta ocupacional y asistentes de la educación, para asegurarse de que todos nuestros
                estudiantes reciban el apoyo que necesitan para tener éxito en su aprendizaje.</p> -->
        </div>
    </div>
    <div class="row py-3">
        <h4 class="text-center ">Seleccione una profesión:</h4>
        <ul class="nav justify-content-center nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Directiva</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Docentes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane"
                    aria-selected="false">Especialistas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                    type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Asistentes</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane  show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div class="profesional-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'Directiva')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php get_template_part("profesionalCard") ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>

            </div>
            <div class="tab-pane " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="profesional-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'Docente')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php get_template_part("profesionalCard") ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tab-pane " id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="profesional-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'Especialista')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php get_template_part("profesionalCard") ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tab-pane " id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                <div class="profesional-card-container">
                    <?php $the_query = new WP_Query(array('category_name' => 'Asistente')); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <?php get_template_part("profesionalCard") ?>
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