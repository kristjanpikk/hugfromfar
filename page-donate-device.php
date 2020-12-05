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
      <p class="text-base font-semibold text-primary tracking-wide uppercase"><?php _e( 'Help our mission', 'hugfromfar' ); ?></p>
      <h2 class="mt-4 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"><?php the_title(); ?></h2>
    </div>
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <p class="mt-12 text-xl mx-auto text-gray-600">The equipment donated by you must be in working order, preferably empty of personal information and not older than 2 years.</p>
      <p class="mt-12 text-xl mx-auto text-gray-600">It must have a working charger! Before donating to care homes, the devices will be swiped clean by our IT partner Foxwayand they will add necessary communication apps.</p>
    </div>
  </div>
  <div class="mt-10 pb-12 bg-white sm:pb-16">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-blue-50"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-4">
          <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
            <span class="text-base font-semibold text-primary tracking-wide uppercase">
              Pack
            </span>
            <div class="text-center mt-4 text-gray-600">
              <div class="mb-4 mx-auto bg-primary text-white rounded-full w-12 h-12 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
              </div>
              Pack the technique safely
            </div>
          </div>
          <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
            <span class="text-base font-semibold text-primary tracking-wide uppercase">
              Add your name
            </span>
            <div class="text-center mt-4 text-gray-600">
              <div class="mb-4 mx-auto bg-primary text-white rounded-full w-12 h-12 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
              </div>
              Optional, so we can add you to the thank you list
            </div>
          </div>
          <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
            <span class="text-base font-semibold text-primary tracking-wide uppercase">
              Post it
            </span>
            <div class="text-center mt-4 text-gray-600">
              <div class="mb-4 mx-auto bg-primary text-white rounded-full w-12 h-12 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
              </div>
              <a href="https://www.omniva.ee/era/kaart/asekohad" target="_blank" rel="nofollow" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md text-base font-medium text-primary bg-primary-50 hover:bg-primary-100 hover:text-primary-900">Find a parcel machine</a>
            </div>
          </div>
          <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
            <span class="text-base font-semibold text-primary tracking-wide uppercase">
              Send it
            </span>
            <div class="text-center mt-4 text-gray-600">
              <div class="mb-4 mx-auto bg-primary text-white rounded-full w-12 h-12 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
              </div>
              To Tartu Veeriku Selver / +372 5650 0038 (Evelin)
            </div>
          </div>
        </dl>
      </div>
    </div>
    <p class="bg-white text-base mt-16 mx-auto max-w-7xl text-center font-medium text-gray-600 mt-8">If you wish to help in any other way, please <a href="/contact" class="text-base font-medium text-gray-600 underline hover:text-primary-900">contact us</a></p>
  </div>
</div>

<?php
get_footer();
