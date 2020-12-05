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

<div style="height: 80px; overflow: hidden;" class="hidden md:block text-blue-50">
  <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.82,82.39 C157.44,127.78 338.03,19.23 502.82,91.28 L500.00,150.00 L0.00,150.00 Z" fill="currentColor"></path></svg>
</div>
<div class="bg-blue-50 ">
  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-base font-semibold text-primary tracking-wide uppercase"><?php _e( 'Help our mission', 'hugfromfar' ); ?></h2>
      <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"><?php the_title(); ?></p>
      <p class="max-w-xl mt-12 mx-auto text-xl text-gray-600">Start building for free, then add a site plan to go live. Account plans unlock additional features.</p>
    </div>
  </div>
  <div class="mt-10 pb-12 bg-white sm:pb-16">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-blue-50"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 rounded-lg bg-white shadow-lg text-center">
        Tekst
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
