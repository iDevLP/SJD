document.addEventListener('DOMContentLoaded', function () {
    jQuery(document).ready(function ($) {
        $('.video-item').on('click', function () {
            let postID = $(this).data('post-id');
            $.ajax({
                type: 'POST',
                url: '../wp-content/themes/SJD/get_video.php',  // Cambia la ruta a la ubicación de tu script PHP
                data: { post_id: postID },
                success: function (response) {
                    $('.video-title').removeClass('active');
                    $(this).find('.video-title').addClass('active');
                    $('.video-player').html('<div>' + response + '</div>');
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
})