


<?php get_header() ?>
<main>
    <code>category.php</code>
    <section class="blocflex">
<?php 
if (have_posts()):
    while (have_posts()): the_post();?>
    <article>
        <?php
        //titre
        
        // the_permalink(); ?>
        <!-- //contenu -->
        <!-- the_content(); -->

        <h1><a href="<?php the_permalink(); ?>"><?= get_the_title();?></a></h1><?php
        //résumé
        the_excerpt();

        //trim quoi? un excerpt, 4 mots
        ?><p><?php echo wp_trim_words(get_the_excerpt(), 10 );?></p><?php
        ?></article><?php
    endwhile;
endif;
?></section>
</main>
<?php get_footer(); ?>