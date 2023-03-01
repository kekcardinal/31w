<?php get_header() ?>
<main class="site_main">
    <h3 class="marge_entete">index.php</h3>
    <section class="blocflex">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <article class="informations">
                    <!-- //contenu -->
                    <!-- the_content(); -->

                    <h1><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
                    <?php
                    //résumé
                    the_excerpt();

                    //trim quoi? un excerpt, 4 mots
                    ?>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 4); ?>
                    </p>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>