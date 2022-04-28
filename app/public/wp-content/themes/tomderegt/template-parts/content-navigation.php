<nav id="site-navigation" class="main-navigation flex flex-auto items-end relative">

    <!--                a link with a logo that goes to the homepage -->
    <!-- <a href="<?php echo get_site_url(); ?>" class="absolute top-0 left-0">Home</a> -->
    <?php
    wp_nav_menu(
        array(
            'menu_id' => 'Main Navigation',
        )
    );
    ?>
</nav><!-- #site-navigation -->