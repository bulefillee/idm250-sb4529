<div class="card-container">

<div class="post-img-div">
            <?php
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if ($featured_image_url) {
                echo '<img class="post-img" src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '">';
            }
            ?>
  </div>
  
<div class="post-desc">

  <h3 class="post-title"><?php the_title(); ?></h3>
        <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
    <!-- Additional details like author or categories can go here -->
    <button class="post-button" onclick="window.location.href='<?php the_permalink(); ?>'">Read More</button> 

</div>

</div>

