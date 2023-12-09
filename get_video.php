<?php
$post_id = $_POST['post_id'];
$post = get_post($post_id);
echo apply_filters('the_content', $post->post_content);
?>