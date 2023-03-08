<aside class="site_aside">
        <h3>menu Secondaire</h3>
        <?php 
        $lemenu = "31w";

        if (in_category("cours")){
            $lemenu = "cours";
        }
       
        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
        ));?>
    
</aside>