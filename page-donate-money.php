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
      <p class="text-base font-semibold text-primary tracking-wide uppercase"><?php _e( 'Help our mission', 'hugfromfar' ); ?></p>
      <h2 class="mt-4 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"><?php the_title(); ?></h2>
      <p class="max-w-xl mt-12 mx-auto text-xl text-gray-600">The money you donate will be used to purchase tablet holders, fix more devices and for other fixed costs to keep the people connected.</p>
    </div>
  </div>


  <div class="mt-10 pb-12 bg-white sm:pb-16">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-blue-50"></div>
      <div class="mt-12 mx-auto grid gap-5 lg:grid-cols-3 relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col rounded-lg shadow-lg bg-white p-6 overflow-hidden">
          <div class="flex items-center justify-between">
            <h3 class="text-xl leading-6 font-medium text-gray-900 mb-8 flex items-center">
              Donate by transfer
            </h3>
          </div>
          <div class="prose">
            <b>SA Hug From Far</b>
            <ul>
              <li>Swedbank: EE212200221059073061</li>
              <li>SEB pank: EE211010220228917224</li>
              <li>LHV pank: EE137700771001442514</li>
              <li>Nordea pank: EE591700017003638161</li>
              <li>Coop Pank: EE704204278609604509</li>
            </ul>
          </div>
        </div>

        <div class="flex flex-col rounded-lg shadow-lg bg-white p-6 overflow-hidden">
          <div class="flex items-center justify-between">
            <h3 class="text-xl leading-6 font-medium text-gray-900 mb-8 flex items-center">
              Donate by mobile <span class="bg-primary-50 text-sm px-2 py-2 ml-4 text-primary-900 rounded-md">Coming soon</span>
            </h3>
          </div>
          <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            <div class="sm:col-span-2">
              <label for="amount_phone" class="mb-1 block text-sm font-medium text-gray-700">Amount</label>
              <input placeholder="Insert amont (€)" type="number" name="amount_phone" id="amount_phone" class="py-3 px-4 block w-full shadow-sm focus:ring-primary focus:border-primary border-gray-300 rounded-md">
            </div>
            <div class="sm:col-span-2">
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
              <button disabled type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-gray-500 bg-gray-200 cursor-auto focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                Donate by phone
              </button>
            </div>
          </form>
        </div>

        <div class="flex flex-col rounded-lg shadow-lg bg-white p-6 overflow-hidden">
          <div class="flex flex-col">
            <h3 class="text-xl leading-6 font-medium text-gray-900 mb-8 flex items-center">
              Donate by banklink <span class="bg-primary-50 text-sm px-2 py-2 ml-4 text-primary-900 rounded-md">Coming soon</span>
            </h3>

            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div class="sm:col-span-2">
                <label for="amount_bank" class="mb-1 block text-sm font-medium text-gray-700">Amount</label>
                <input placeholder="Insert amont (€)" type="number" name="amount_bank" id="amount_bank" class="py-3 px-4 block w-full shadow-sm focus:ring-primary focus:border-primary border-gray-300 rounded-md">
              </div>
              <div class="sm:col-span-2 flex self-center">
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
                <button disabled type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md cursor-auto shadow-sm text-base font-medium text-gray-500 bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                  Donate by banklink
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <p class="bg-white text-base mt-16 mx-auto max-w-7xl text-center font-medium text-gray-600 mt-8">If you wish to help in any other way, please <a href="/contact" class="text-base font-medium text-gray-600 underline hover:text-primary-900">contact us</a></p>
  </div>
</div>

<?php
get_footer();
