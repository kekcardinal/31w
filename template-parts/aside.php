<aside class="site_aside">
        <h3>menu Secondaire</h3>
        <?php 
        
        $category = get_queried_object();
        if (isset($category))
        {
            $lemenu = $category -> slug;
        }else{
            $lemenu = "31w";
        }
       
        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
        ));?>
    </aside>