<?php
/*
Template footer.php
*/
?>

<footer class="site_footer">
<section class="widgets">
<div class="sidebar">
    <?php dynamic_sidebar( 'pied-page-1' ); ?>
</div>
<div class="sidebar">
    <?php dynamic_sidebar( 'pied-page-2' ); ?>
</div>
<div class="sidebar">
    <?php dynamic_sidebar( 'pied-page-3' ); ?>
</div>
</section>
<?php 
wp_footer();

wp_nav_menu(array(
                    'menu' => 'menu-footer',
                    'container' => 'nav'
                )); ?>
</footer>

</body>
</html>