<?php
/**
 * Template Name: Donate (device)
 * 
 * Template for donating a device
 *
 * @package hugfromfar
 */

get_header();
?>

<div class="bg-gray-50 pt-12 sm:pt-16">
  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-base font-semibold text-primary tracking-wide uppercase"><?php _e( 'Help our mission', 'hugfromfar' ); ?></h2>
      <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"><?php the_title(); ?></p>
      <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Start building for free, then add a site plan to go live. Account plans unlock additional features.</p>
    </div>
  </div>
  <div class="mt-10 pb-12 bg-white sm:pb-16">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 rounded-lg bg-white shadow-lg text-center">
        Tekst
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
