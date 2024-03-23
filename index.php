<?php
/**
  * Main Index Template
 *
 * The index.php template file is the catch-all template in a WordPress theme.
 * This file is used if WordPress cannot find a more specific template file for the query being run.
 * It serves as the default template for displaying posts when no other template file (like home.php, single.php) is available.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>
<h1>
  <?php echo get_the_title(); ?>
</h1>

<!--<p>This is a index.php template</p>-->
<?php get_footer(); ?>