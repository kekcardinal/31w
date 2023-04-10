<aside class="site_aside">
        <!-- <h3>menu Secondaire</h3> -->
        <?php 
        $lemenu = "31w";

        if (in_category("cours")){
            $lemenu = "cours";
        }
        if (in_category("galerie_photo"))
        {   $lemenu = "menu_galerie" ;}
        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
        ));?>
    
</aside>