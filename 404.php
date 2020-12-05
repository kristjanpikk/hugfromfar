<?php
/**
 * Template for 404 page
 *
 * @package hugfromfar
 */

get_header();
?>

  <div class="container flex flex-col justify-center text-center">
    <div class="text-6xl font-semibold">404</div>
    <div><?php _e('Page not found', 'boilerplate'); ?></div>
  </div>

<?php get_footer(); ?>
