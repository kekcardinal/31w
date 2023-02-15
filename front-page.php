


<?php get_header() ?>
<main>
    <code>front-page.php</code>
<?php 
if (have_posts()):
    while (have_posts()): the_post();
        
        //titre
        
        // the_permalink(); ?>
        <!-- //contenu -->
        <!-- the_content(); -->

        <h1><a href="<?php the_permalink(); ?>"><?= get_the_title();?></a></h1><?php
        //résumé
        the_excerpt();

        //trim quoi? un excerpt, 4 mots
        echo wp_trim_words(get_the_excerpt(), 4 );
    endwhile;
endif;
?>
</main>
<?php get_footer(); ?>