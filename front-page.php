<?php get_header() ?>
<main class="site_main">
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

    <section class="viewport">
        <h1>TP2</h1>
        <h4>Auteur : Eddy Martin</h4>
        <h4>Cours : 31w - Introduction à un gestionnaire de contenu</h4>
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav",
            "container_class"=>"menu_bloc"
        )); ?>
    </section>

    <section class="blocflex">
        <?php
        
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <?php 
                $ma_categorie = "31w";
                if (in_category('galerie')){
                    $ma_categorie = "galerie";
                }
                get_template_part("template-parts/categorie",$ma_categorie);
                ?>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>