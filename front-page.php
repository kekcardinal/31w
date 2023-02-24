<?php get_header() ?>
<main>
    <h3 class="marge_entete">front-page.php</h3>
    <section class="blocflex">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <article class="informations">
                    <!-- //titre -->

                    <!-- // the_permalink(); ?> -->
                    <!-- //contenu -->
                    <!-- the_content(); -->

                    <h3><?= get_the_title(); ?></h3>
                    <?php
                    //résumé
                    the_excerpt();
                    
                    //trim quoi? un excerpt, 4 mots
                    ?>
                    <a class="btn_orange" href="<?php the_permalink(); ?>">Voir l'article</a>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>