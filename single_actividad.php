<?php get_header(); ?>
<?php $fecha = get_the_date('j \d\e F Y'); ?>
<main class="container">
    <section class="row">
        <article class="my-5">
            <header class="col-md-10 mx-auto">
                <nav class="single-breadcrums">
                    <?php the_category(" / "); ?>
                </nav>
                <div class="d-flex justify-content-center mt-5 gap-2">
                    <time datetime="<?php echo $fecha ?>">
                        <?php
                        echo $fecha;
                        echo " | "; ?>
                    </time>
                    <span class="fw-semibold d-inline-block ">
                        <?php
                        the_field("autor_de_la_actividad"); ?>
                    </span>
                </div>
                <h1 class="fs-1 fw-bold text-center mt-2 mb-4">
                    <?php the_field("titulo_de_la_actividad"); ?>
                </h1>
                <?php the_post_thumbnail('full', array('class' => 'single-img')); ?>
                <!-- mostarar imagen miniatura -->
            </header>
            <div class="my-5 col-md-8 mx-auto single-content">
                <?php the_field("actividad"); ?>
            </div>
        </article>
    </section>
    <section class="mb-5 mt-3">
        <h2 class="fs-3">Actividades recientes</h2>
        <div class="actividades-card-container">
            <?php $the_query = new WP_Query(array('category_name' => 'actividad',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()))); ?>
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
    </section>
</main>
<?php get_footer(); ?>