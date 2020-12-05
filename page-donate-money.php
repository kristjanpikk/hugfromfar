<?php
/**
 * Template Name: Donate (money)
 * 
 * Template for donating money
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
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-2">
          <div class="flex flex-col border-b border-gray-100 p-6 sm:border-0 sm:border-r">
            <div class="flex items-center justify-between">
              <h3 class="text-xl leading-6 font-medium text-gray-900 mb-8 flex items-center">
                Donate by mobile <span class="bg-primary-50 text-sm px-2 py-2 ml-4 text-primary-900 rounded-md">Coming soon</span>
              </h3>
              <!--<div class="flex items-center">
                <svg class="w-16 mr-4 text-gray-400" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 355 140">
                  <path fill="currentColor" d="M5,51.346V70.12l50.646-5.571v-20.32L5,51.346 M21.162,71.262v64.333h18.542V69.367L21.162,71.262 M62.486,43.268v92.327h19.538V40.521L62.486,43.268 M85.664,40.009v21.239l28.213-3.104V36.045L85.664,40.009 M85.664,77.056  v21.626l18.52-1.01v-22.21L85.664,77.056 M85.664,114.27v21.325h28.213v-22.176L85.664,114.27 M186.839,25.758v109.837h25.613  V22.158L186.839,25.758 M217.235,21.485V46.75l37.326-4.104V16.238L217.235,21.485 M217.235,65.751v25.733l24.465-1.336V63.656  L217.235,65.751 M217.235,110.293v25.302h37.326v-26.429L217.235,110.293 M121.342,34.994v100.601h22.256V31.865L121.342,34.994   M147.752,112.397v23.197h32.306v-24.172L147.752,112.397 M338.244,14.996c-8.095-7.648-19.964-10.785-32.946-8.92v28.022  c5.257-0.292,9.517,1.659,11.415,5.587c2.997,6.193-0.095,15.485-7.389,24.094c-11.258,13.285-41.195,40.477-41.195,40.477  l42.976-1.413c26.259-25.654,35.689-41.226,37.381-60.661C349.375,31.9,345.643,21.993,338.244,14.996 M350,135.595v-29.321  l-87.168,2.626 M262.832,108.899l0.009,26.695H350 M300.287,6.705c-25.323,5.393-37.758,24.023-36.323,54.422l27-2.396  c-1.23-17.174,4.023-21.248,9.336-23.488L300.287,6.705"/>
                </svg>
                <svg class="w-16 mr-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000.85 391.898">
                  <path style="marker:none" d="M506.808 57.724c2.389 2.975 3.952 5.847 3.922 7.202l-6.139-6.398zM25.37 263.004c72.894 10.372 128.228 22.261 186.931-2.93 53.317-22.88 63.212-106.762-9.379-105.339-45.577.049-108.867 26.01-115.147 116.837 22.825 156.032 170.28 90.722 246.312 7.433 79.732-87.34 125.556-237.306 48.4-254.073-73.182 6.725-46.676 179.265-20.55 265.402 44.964 201.852 170.462-59.559 149.238-136.926 11.172 100.733 7.852 167.544 38.957 192.094 85.097 67.163 199.009-40.293 94.61-83.02-113.275-62.17 6.795-114.997 109.428-108.588 107.953 6.74 159.422 24.758 163.266 93.087-.172 62.782-34.729 97.084-70.835 111.764-105.417 35.677-114.219-60.34-65.287-90.535 30.29-20.317 84.652-27.499 194.205-17.26" fill="none" stroke="currentColor" stroke-width="49.8505" stroke-linecap="round" stroke-linejoin="round" overflow="visible"/>
                  <path style="marker:none" fill="none" overflow="visible" d="M-612.163 206.097h322.57v270.837h-322.57z"/>
                </svg>
                <svg class="w-16 text-gray-400" version="1.1" id="layer" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 652 652" xml:space="preserve">
                  <path fill="currentColor" d="M299.7 296.2c-3 0-6.1-2.2-9.1-6.7-2-3.1-3-5.5-3-7.1 0-2.8 1.8-5.3 5.5-7.7 3.6-2.3 7.7-3.6 12-3.5h71.4c4.5 0 6.8 2.1 6.8 6.2 0 4.6-1.3 9.1-3.8 13-2.6 3.9-5.3 5.9-8.4 5.9h-23.2v78c0 4.7-1.3 9-3.8 12.9-2.6 3.9-5.4 5.9-8.4 5.9s-6.1-2.2-9.1-6.7c-2-3.1-3-5.5-3-7.1v-83h-23.9zm110.8 25.9c-5.6 0-10.4 1.6-14.3 4.7-4 3.2-6.4 7.4-7.3 12.7h41.2c-.2-4.8-2.3-9.3-5.9-12.4-3.8-3.4-8.3-5-13.7-5zm-21.6 34.8c1.3 5.4 4.1 9.7 8.4 13 4.3 3.3 9.5 4.9 15.5 4.9 5.1 0 11.2-1.7 18.3-5.2 3.3-1.6 6.3-2.4 9.1-2.4 3.7 0 5.6 1.7 5.6 5 0 3-.7 5.9-2 8.6-1.3 2.8-3 4.8-5.1 6-4.1 2.5-8.5 4.4-13.2 5.6-4.7 1.3-9.5 2-14.4 2-8.4 0-16-2.2-22.9-6.6-6.7-4.2-12.3-10-16.2-16.9-3.8-6.7-5.8-14.3-5.8-22.1 0-8.7 2.1-16.7 6.3-23.7 4.2-7.1 9.7-12.5 16.4-16.4 6.7-3.9 14.4-5.8 22.2-5.8 7.8 0 14.8 1.8 21 5.4 6.2 3.6 11 8.4 14.4 14.4 3.4 6 5.1 12.8 5.1 19.7 0 3.5-1 7-2.9 9.9-1.9 2.9-4 4.4-6.4 4.4l-53.4.2zm95 36.1c-5.2 0-9.8-2-13.6-6.1-3.8-3.8-5.8-9-5.8-14.4v-91.6c0-2.5 1.8-4.9 5.3-7.2 3.4-2.2 7.4-3.4 11.4-3.4 4.3 0 6.5 2 6.5 5.9v89c0 1.5.3 2.7 1 3.7.6 1 1.8 1.8 3.4 2.5 1.9.8 2.8 2.4 2.8 4.8 0 4.3-1.2 8.1-3.5 11.6-2.4 3.4-4.9 5.2-7.5 5.2m35.2 0c-2.7 0-5.6-2.2-8.7-6.6-1.9-3-2.8-5.2-2.8-6.7v-64.4c0-2.5 1.8-4.9 5.3-7.2 3.4-2.2 7.4-3.4 11.4-3.4 4.3 0 6.5 1.9 6.5 5.9v64.3c0 3.1-.6 6.1-1.8 9-1.2 2.9-2.7 5.1-4.5 6.7-1.8 1.6-3.6 2.4-5.4 2.4m0-99.4c-3 0-6.2-2.4-9.4-7.1-2.2-3.3-3.3-5.9-3.3-7.8 0-2.9 2-5.6 5.9-8.1 3.8-2.5 8.2-3.8 12.7-3.8 4.9 0 7.3 2.2 7.3 6.6 0 3.4-.7 6.8-2 9.9-1.3 3.2-3 5.7-5.1 7.5-1.9 1.9-4 2.8-6.1 2.8m69.5 78c5.2 0 10.3-1.5 14.7-4.3v-39.2c-4.3-2.4-9.1-3.6-14.5-3.6-6.6 0-12.2 2.2-16.7 6.7-4.5 4.4-6.7 10-6.7 16.6 0 6.7 2.2 12.3 6.7 16.9 4.5 4.6 10 6.9 16.5 6.9M587 393c-8.4 0-16-2.1-22.8-6.2-6.6-4-12.1-9.6-15.9-16.3-3.8-6.7-5.7-14.3-5.7-22 0-8.5 2.2-16.3 6.5-23.3s9.9-12.5 16.8-16.3c6.8-3.8 14.4-5.8 22.2-5.8 6.8 0 13.3 1.8 19.7 5.5 4.1-2.7 8.1-4 12.2-4 4.3 0 6.5 2 6.5 5.9v64.4c0 3.1-.6 6.1-1.8 9-1.2 2.9-2.7 5.1-4.5 6.7-1.8 1.6-3.6 2.4-5.3 2.4-2.7 0-5.6-2.2-8.7-6.6-1-1.5-1.8-3.1-2.4-4.8-.9 2.4-2.1 4.6-3.8 6.6-1.6 1.8-3.2 3-5 3.6-2.5.8-5.2 1.2-8 1.2m-406.3-11c30.3-17.4 52-39.2 62-62.5 4.3-17.6 6.5-35.6 6.5-53.8 0-2.7-.1-5.2-.4-7.6-1.8 28.1-38.6 63.5-87.2 86.6-58.7 27.9-102.7 35.4-122.4 14.1 6.8 13.3 16 26.8 26.3 38.8 24.3 21.2 64.1 13.6 115.2-15.6"/>
                  <path fill="currentColor" d="M154.8 324.8c55.4-26.4 93.9-63.9 87.2-88.8-11.1-18.8-33.4-26-57.3-26-71 0-158.1 46.3-158.1 105.3 0 7.6 1.7 16.1 4.7 25 16.1 21.1 65.6 12 123.5-15.5m-4.7 83.6c-38.9 15.6-61.2 10.6-73.5.9l-.2-.1c19.1 18.8 40.8 32 59.9 32 33.4 0 79-40 100.7-102.1-12.3 22.4-38.4 49.9-86.9 69.3"/>
                  <path fill="#ffffff" d="M150.1 408.4c48.5-19.4 74.6-46.9 86.8-69.3 2.2-6.3 4.1-12.9 5.8-19.6-10 23.2-31.7 45.1-62 62.5-51.1 29.3-90.9 36.9-115.1 15.6 3.4 4 7 7.8 10.8 11.5l.2.1c12.3 9.8 34.6 14.8 73.5-.8m11.5-63.7c48.7-23.1 85.4-58.5 87.2-86.6-.9-8.7-3.3-16.1-6.8-22.2 6.7 24.9-31.8 62.4-87.2 88.8-57.9 27.6-107.4 36.6-123.6 15.4 2.1 6.1 4.8 12.4 8 18.7 19.7 21.3 63.7 13.8 122.4-14.1" fill="#fff"/>
                </svg>
              </div>-->
            </div>
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div>
                <label for="amount_phone" class="mb-1 block text-sm font-medium text-gray-700">Amount</label>
                <input placeholder="Insert amont (€)" type="number" name="amount_phone" id="amount_phone" class="py-3 px-4 block w-full shadow-sm focus:ring-primary focus:border-primary border-gray-300 rounded-md">
              </div>
              <div>
                <label for="phone_number" class="mb-1 block text-sm font-medium text-gray-700">Phone number</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 flex items-center">
                    <label for="country" class="sr-only">Country</label>
                    <select id="country" name="country" class="h-full py-0 pl-4 pr-8 border-transparent bg-transparent text-gray-600 focus:ring-primary focus:border-primary rounded-md">
                      <option>EE</option>
                      <option>LV</option>
                      <option>LT</option>
                    </select>
                  </div>
                  <input type="text" name="phone_number" id="phone_number" autocomplete="tel" class="py-3 px-4 block w-full pl-20 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="+372 555 123 45">
                </div>
              </div>
              <div class="sm:col-span-2">
                <button disabled type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-gray-500 bg-gray-300 cursor-auto focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                  Donate by phone
                </button>
              </div>
            </form>
          </div>
          <div class="flex flex-col border-t border-b border-gray-100 p-6 sm:border-0">
            <h3 class="text-xl leading-6 font-medium text-gray-900 mb-8 flex items-center">
              Donate by banklink <span class="bg-primary-50 text-sm px-2 py-2 ml-4 text-primary-900 rounded-md">Coming soon</span>
            </h3>

            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div>
                <label for="amount_bank" class="mb-1 block text-sm font-medium text-gray-700">Amount</label>
                <input placeholder="Insert amont (€)" type="number" name="amount_bank" id="amount_bank" class="py-3 px-4 block w-full shadow-sm focus:ring-primary focus:border-primary border-gray-300 rounded-md">
              </div>
              <div class="flex self-center pt-8">
                <div class="flex-shrink-0">
                  <button type="button" aria-pressed="false" class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    <span class="sr-only">Reoccuring monthly</span>
                    <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                  </button>
                </div>
                <div class="ml-3">
                  <p class="text-base text-gray-600">
                    Reoccuring monthly
                  </p>
                </div>
              </div>
              <div class="sm:col-span-2">
                <button disabled type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md cursor-auto shadow-sm text-base font-medium text-gray-500 bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                  Donate by banklink
                </button>
              </div>
            </form>

          </div>
        </dl>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
