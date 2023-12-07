<a class="card-link" href="<?php the_permalink(); ?>">
    <article class="card-actividad">
        <div class="card-actividad__header">
            <?php echo the_post_thumbnail('full', array('class' => 'card-actividad__img')); ?>
            <span <?php
            $categoria = get_field("categoria_de_la_actividad");
            if ($categoria == "Terapia ocupacional") {
                echo " class='card-actividad__categoria bg-terapia-escuela'";
            } elseif ($categoria == "Kinesiología") {
                echo " class='card-actividad__categoria bg-primary-escuela'";
            } else {
                echo " class='card-actividad__categoria bg-accent-escuela'";
            }
            ?>>
                <?php the_field("categoria_de_la_actividad"); ?>
            </span>
        </div>
        <div class="card-actividad__body">
            <h3 class="card-actividad__title">
                <?php the_field("titulo_de_la_actividad"); ?>
            </h3>
            <p class="card-actividad__text">
                <?php the_field("resumen_de_la_actividad"); ?>
            </p>
            <span class="card-actividad__date">
                <i class="fa-regular fa-clock"></i>
                <?php the_field("fecha_de_publicacion_de_la_actividad"); ?>
            </span>
        </div>
    </article>
</a>