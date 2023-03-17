<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress - Felix B-Cousineau</title>
    <?php wp_head(); ?>
</head>

<body class="site <?= (is_front_page()?"no-aside":""); ?>">
    <header class="site_entete">
        <section class="logomenu">
        <!-- <div class="menusearch"> -->
                <input type="checkbox" id="chkBurger" checked>
            <?php the_custom_logo(); ?>
            <?php wp_nav_menu(
                array(
                    'menu' => 'entete',
                    'container' => 'nav'
                )
            ); ?>

            <?= get_search_form(); ?>
            <label for="chkBurger" class="burger">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=ffffff" height="20px" width="20px">
                </label>
        <!-- </div> -->
        </section>
        <section class="marge_entete">

            <!-- <h1><a href="<? /*php bloginfo('url'); */?>"><? /*php bloginfo('name'); */?></a></h1> -->

            <!-- <h2>
                <? /*php bloginfo('description'); */?>
            </h2> -->
        </section>

    </header>

    <?php 
    
    if (!is_front_page())
    {
        get_template_part("template-parts/aside");
    }

    ?>