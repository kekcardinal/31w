<?php
//Ceci est notre modele.
?>
<?php

/*
modele search.php affiche les resultats de recherche.
*/
get_header(); ?>
<main class="site_main">
    <!-- <h3 class="marge_entete">search.php</h3> -->
    <section class="blocflex">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                //the_title("<h1>", "</h1>");
                //the_permalink(); ?>

                <article class="informations">
                    <h3>
                        <?= get_the_title(); ?>
                    </h3>

                    <p>
                        <?= wp_trim_words(get_the_excerpt(), 50); ?>
                    </p>
                    <a class="btn_orange" href="<?php the_permalink(); ?>">Voir l'article</a>
                </article>
                <hr>
            <?php endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>