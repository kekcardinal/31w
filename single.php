<?php get_header() ?>
<main class="site_main">
        <?php
        if (in_category('cours'))
        {
            get_template_part("template-parts/single-cours");
        }
        elseif (in_category('31w'))
        {
            get_template_part("template-parts/single-notes");
        }
        elseif (in_category('galerie_photo'))
        {
            get_template_part("template-parts/single-galerie_photo");
        }
        ?>
</main>
<?php get_footer(); ?>