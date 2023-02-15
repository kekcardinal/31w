


<?php get_header() ?>
<main>
    <h3>index.php</h3>
<?php 
if (have_posts()):
    while (have_posts()): the_post();
        
        //titre
        the_title('<h1>', '</h1>');
        
        //contenu
        the_content();
    endwhile;
endif;
?>
</main>
<?php get_footer(); ?>