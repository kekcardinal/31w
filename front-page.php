<?php get_header() ?>
<main>
    <!-- <h3 class="marge_entete">front-page.php</h3> -->
    <section class="texte_image">
        <img src="http://aecweb5.sg-host.com/wp-content/uploads/2023/02/image_hero-scaled.jpg" alt="">
        <div>
            <h1>582-31W-MA - Introduction à un gestionnaire de contenu</h1>
            <h2>Professeur : Eddy Martin</h2>
            <hr>
            <h3>Travail réalisé par:</h3>
            <h3>Félix Boutin-Cousineau</h3>
        </div>
    </section>

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

                    <h3>
                        <?= get_the_title(); ?>
                    </h3>
                    <?php
                    //résumé
                    the_excerpt();

                    //trim quoi? un excerpt, 4 mots
                    ?>
                    <a class="btn_orange" href="<?php the_permalink(); ?>">Lire l'article</a>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>