<?php
/*
Template Name: Custom Template 2
*/
?>

<?php get_header(); ?>



<div class="page-content">
<h1><?php echo get_the_title(); ?></h1>
  <?php
    // Output the content of the page
    while (have_posts()) : the_post();
      // Check if the post content contains an embedded video
      if ( has_shortcode( get_the_content(), 'video' ) ) {
        // Wrap the embedded video in a div with the class "video-container"
        echo '<div class="video-container">';
        the_content();
        echo '</div>';
      } else {
        // If no embedded video, just output the content
        the_content();
      }
    endwhile;
  ?>
</div>

<?php get_footer(); ?>