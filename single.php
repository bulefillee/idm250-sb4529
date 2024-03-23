<?php
/* Template Name: Page with schedule */
 get_header(); ?>

    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>

  
    <?php

  echo get_the_content();

    ?>
    <!---<p> This is singe template.</p>-->

<?php get_footer(); ?>