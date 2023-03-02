<?php
/*
* template-part qui permettra d'afficher un article d'un conteneur de classe pour un article de galerie
*/

$titre = get_the_title();
// if (substr($titre, 0 , 1) == "0")
// {

// }

?>

<article class="blocflex_galerie">
    <?php the_content(); ?>
</article>