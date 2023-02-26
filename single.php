<?php get_header() ?>
<main>
    <!-- <h3 class="marge_entete">single.php</h3> -->
    <section class="blocflex">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article class="informations">
                    <?php

                    //titre
                    the_title('<h1>', '</h1>');

                    //contenu
                    the_content(); ?>
                </article>
                <?php
            endwhile;
        endif;
        ?>
        <section>
</main>
<?php get_footer(); ?>