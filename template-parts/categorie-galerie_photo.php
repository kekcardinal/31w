<?php
/**
 * template-part qui permettra d'afficher 
 * un article provenant d'un conteneur  de class blocflex
 * pour un article de catégorie photos
 */
$titre = get_the_title();
$titre_long = substr($titre, 7, 0);

?>
<article>
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <h6><?= $titre_long ?></h6>
    <?php the_post_thumbnail("large");?>
</article>