<?php get_header(); ?>
<?php $fecha = wp_date('j \d\e F Y'); ?>
<main class="container">
    <section class="row">
        <article class="my-5">
            <header class="col-md-10 mx-auto">
                <nav class="single-breadcrums">
                    <?php the_category(" / "); ?>
                </nav>
                <div class="d-flex justify-content-center mt-5">
                    <time datetime="<?php echo $fecha ?>">
                        <?php echo "{$fecha} | "; ?>
                    </time>
                    <span class="fw-semibold">
                        <?php the_field("autor_de_la_actividad"); ?>
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
</main>
<?php get_footer(); ?>