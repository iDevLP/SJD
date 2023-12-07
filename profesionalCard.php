<article class="profesional-card">
    <div class="profesional-card__header">
        <img class="profesional-card__img" src="<?php the_field('imagen_del_trabajador'); ?>" alt="">
    </div>
    <div class="profesional-card__body">
        <h6 class="profesional-card__name">
            <?php the_field('nombre_del_trabajador');
            echo " ";
            the_field('apellido_del_trabajador'); ?>
        </h6>
        <span class="profesional-card__ocupation">
            <?php the_field('cargo_del_trabajador'); ?>
        </span>
    </div>
</article>