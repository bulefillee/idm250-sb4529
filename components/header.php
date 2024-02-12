<header>
<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">K T</a>
        </div>
        <div id="mainListDiv" class="main_list">
        <ul class="navlinks">
        <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              
            ]);
             ?>
            </ul>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>
</header>
