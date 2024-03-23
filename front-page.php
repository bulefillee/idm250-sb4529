
<?php
/*
 * Front Page Template
 *
 * This template is used when the front page option is set to display a static page.
 * It is specifically designed for the front page of the site, allowing customization
 * separate from the home page or other pages.
 *
 * If front-page.php does not exist, WordPress will use page.php for the static front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * */

get_header();
 
 // check for a Featured Image and then assign it to a PHP variable for later use
 ?>
<div class="front-content">
<div class="featured-image-wrapper">
    <?php
    if(has_post_thumbnail()){
        the_post_thumbnail('full');
    }
    ?>
</div>

<?php echo get_the_content(); ?>
</div>

<!--<p>This is a front-page.php template</p>-->


<?php get_footer(); ?>
