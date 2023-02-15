


<?php get_header() ?>
<main>
    <h3>front-page.php</h3>
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
        ?><p><?php echo wp_trim_words(get_the_excerpt(), 4 );?></p><?php
    endwhile;
endif;
?>
</main>
<?php get_footer(); ?>