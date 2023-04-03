<?php
/*
* template-part qui permettra d'afficher un article d'un conteneur de classe pour un article de categorie 31w
*/

$titre = get_the_title();
// if (substr($titre, 0 , 1) == "0")
// {

// }

?>

<article class="blocflex_article">
    <h2><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?php $email = "Courriel = ";?>
                <?= $email ?><?php the_field('email'); 
                ?> </p>
     <p><?php 
                $difficulte = "Niveau de difficulte = ";?>
                <?= $difficulte ?><?php the_field('difficulte'); 
                ?> </p>
</article>