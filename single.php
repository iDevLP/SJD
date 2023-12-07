<?php
$post = $wp_query->post;
if (in_category('actividad')) {
    include(TEMPLATEPATH . '/single_actividad.php');
}
?>