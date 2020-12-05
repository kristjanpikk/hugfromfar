<?php
/**
 * Template Name: Contact
 * 
 * Template for contact
 *
 * @package hugfromfar
 */

get_header();
?>

<div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
  <div class="text-center">
    <p class="text-base font-semibold text-primary tracking-wide uppercase"><?php _e( 'Be part of our mission', 'hugfromfar' ); ?></p>
    <h2 class="mt-4 mb-16 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"><?php the_title(); ?></h2>
    <h3 class="mb-2">SA Ada Fond (Ada Foundation)</h3>
    <p class="mb-8 text-gray-600">
      Emajõe 1a, Tartu, 51008, Estonia
    </p>
    <p class="mb-2 text-gray-600">Evelin Kullman, CEO</p>
    <p class="mb-2 text-gray-600">Mobile: <a class="text-primary-900 font-medium hover:underline" href="tel:+37256500038">+372 5650 0038</a></p>
    <p class="mb-2 text-gray-600">E-mail: <a class="text-primary-900 font-medium hover:underline" href="mailto:evelinkullman@gmail.com">evelinkullman@gmail.com</a></p>
  </div>
</div>

<?php
get_footer();
