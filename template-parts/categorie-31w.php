<?php
/*
* template-part qui permettra d'afficher un article d'un conteneur de classe pour un article de categorie 31w
*/

$titre = get_the_title();
// if (substr($titre, 0 , 1) == "0")
// {

// }

?>

<article>
    <h2><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>