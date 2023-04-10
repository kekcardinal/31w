<?php
get_header() ?>
<main class="site_main">
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        if (in_category('galerie_photo')) {
            the_title('<h1>','</h1>');
            the_content();
        }
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>