<?php
/**
 * template-part qui permettra d'afficher 
 * un article provenant d'un conteneur  de class blocflex
 * pour un article de catégorie photos
 */
$titre = get_the_title();
$photo = get_the_post_thumbnail();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, 0);

?>
<article>
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <h6><?= $titre_long ?></h6>

</article>