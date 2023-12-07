<?php get_header(); ?>
<main class="box-secciones">
    <section class="container">
        <h1>Publicaciones de:
            <?php single_cat_title(); ?>
        </h1>
        <div class="actividades-card-container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
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
    </section>
</main>
<?php get_footer(); ?>