<?php

/**
 * Single schedule Template
 *
 * This template is used for displaying single schedule items. It's specifically tailored for the 'schedule' custom post type.
 * Customize it to showcase schedule details and media in a unique layout, separate from standard posts or pages.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

 get_header();
 
 // check for a Featured Image and then assign it to a PHP variable for later use
 $featured_image = '';
 if (has_post_thumbnail()) {
     $featured_image = get_the_post_thumbnail();
 }
 
 ?>
 
 <div class="featured-image-wrapper">
     <?php if (!empty($featured_image)) : ?>
         <?php echo $featured_image; ?>
     <?php endif; ?>
 </div>
 <h1>
  <?php echo get_the_title(); ?>
</h1>
 <?php echo get_the_content(); ?>
 
<!--<p>This is a custom schedule page Day1&Day2 template.</p>-->
 
 <?php get_footer(); ?>
 