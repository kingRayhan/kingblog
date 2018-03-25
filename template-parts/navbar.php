<nav class="navbar navbar-expand-md sticky-top app-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
			Rayhan
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_nav" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
            wp_nav_menu( array(
                'theme_location'    =>   'primary',
                'depth'             =>   2,
                'container'         =>   'div',
                'container_class'   =>   'collapse navbar-collapse ml-auto',
                'container_id'      =>   'header_nav',
                'menu_class'        =>   'nav navbar-nav',
                'fallback_cb'       =>   'WP_Bootstrap_Navwalker::fallback',
                'walker'            =>   new WP_Bootstrap_Navwalker()
            ) );
        ?>
    </div>
</nav>