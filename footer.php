<?php
/*
Template footer.php
*/
?>

<footer class="site_footer">

<?php 
wp_footer();
wp_nav_menu(array(
                    'menu' => 'menu-footer',
                    'container' => 'nav'
                )); ?>
</footer>

</body>
</html>