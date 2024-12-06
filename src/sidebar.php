<?php

?>

<aside class="sidebar>

    <nav class="filter-menu" aria-labelledby="categories">
        <?php $menu = find_sidebar_menu($post->ID); ?>

        <h2 id="categories><?php echo $menu['title']; ?></h2>
        <?php
            wp_nav_menu( array(
                'menu'	=> $menu['output'],
                'container' => false, // Removes the container, leaving just the ul element
                'theme_location' => '__no_such_location',
                'fallback_cb'    => 'custom_sidebar_menu_fallback' // Do not fall back to wp_page_menu()
            ) );

        ?>
    </nav>

</aside>
