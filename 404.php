<?php get_header('simple'); ?>
<div class="error-box">
    <h1 class="error-h1">404</h1>
    <p>Oops! Something is wrong.</p>
    <button class="error-button">
        <a href="<?php echo esc_url(get_site_url()); ?>">Go back Home</a>
    </button>
</div>
<?php get_footer(); ?>
