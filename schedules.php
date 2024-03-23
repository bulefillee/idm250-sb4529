
<?php
/* Template Name: schedules*/


get_header();
?>


<div class="listing-content">

<h1>
  <?php echo get_the_title(); ?>
</h1>

<?php
// Define WP_Query parameters to fetch schedules
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type' => 'schedules',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
];

// Create a new WP_Query instance
$projects_query = new WP_Query($args);
?>


    <div class="posts-container">

      <?php if ($projects_query->have_posts()):
          while ($projects_query->have_posts()) : $projects_query->the_post();
              get_template_part('components/card');
          endwhile; ?>

  
      <?php else : ?>
      <p>No projects found.</p>
      <?php endif; ?>
      <?php wp_reset_postdata();?>
    </div>

 
</div>

<?php get_footer(); ?>