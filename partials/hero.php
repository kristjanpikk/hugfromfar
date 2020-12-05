<?php
/**
 * Template for displaying the hero
 *
 * @package hugfromfar
 */

?>

<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left md:pr-20">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">We connect elderly with their families</span>
            <span class="block text-primary xl:inline">through video calls.</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-12 md:text-xl lg:mx-0">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
          </p>
          <div class="mt-5 sm:mt-12 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="/donate-a-device" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-900 md:py-4 md:text-lg md:px-10">
                Donate a device
              </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="/donate-money" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-primary-50 hover:bg-primary-100 hover:text-primary-900 md:py-4 md:text-lg md:px-10">
                Donate money
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="md:rounded-tl-xl md:rounded-bl-xl h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="<?php echo get_template_directory_uri(); ?>/dist/static/hero.jpg" alt="">
  </div>
</div>
