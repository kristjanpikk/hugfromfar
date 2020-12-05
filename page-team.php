<?php
/**
 * Template Name: Team
 * 
 * Template for team
 *
 * @package hugfromfar
 */

get_header();
?>

<div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
  <div class="space-y-12">
    <div class="space-y-5 sm:space-y-4 text-center">
      <h2 class="mt-4 mb-16 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"><?php the_title(); ?></h2>
        <p class="leading-7 text-sm text-gray-500 sm:max-w-3xl mx-auto">
        <b>Nov 9th 2020</b> - Evelin calls first friend to tell about the charity project she has in mind.
        <b>Nov 2020</b> - Evelin keeps making phone calls, calling friends and friends of friends etc.
        <b>Nov 30th 2020</b> - Evelin joins Facebook for the first time in her life and sees final call to Garage48 For the future hackathon. Evelin signs up.
        <b>Dec 1st</b> - Evelin recruits PR specialists Kadri and Heidi as first team members.
        <b>Dec 3rd</b> - and hour before deadline for submitting teams Evelin recruits marketing specialist Liina and graphic designer Lauri.
        <b>Dec 3rd</b> - during the first checkpoint Evelin sees a guy with video equipment walk into the co-working space Sofa Office and an hour later recruits Jan.
        <b>Dec 5th</b> - Evelin is quite desperate, because IT-guys haven’t delivered, but then Kristjan walks into office and happens to be a web wizard and just the right person to complete our perfect team.
      </p>
    </div>
    <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
      <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/evelin.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Evelin Kullman</h3>
              <p class="text-primary">Project manager</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Project management experience since 1999 at the level of NGO (Youth Media Club), local government and the Ministry of Education and Research</li>
              <li class="text-sm mb-4">Work experience: adult education specialist in the Ministry of Education and Research and child protection specialist in Jõgeva Parish Government</li>
              <li class="text-sm mb-4">BA in social work, Tallinn University</li>
            </ul>
          </div>
        </li>
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/kadri.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Kadri Peetersoo</h3>
              <p class="text-primary">PR and communication</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Manages corporate and marketing communication projects</li>
              <li class="text-sm mb-4">Work experience in media since 2005 as a journalist (Järva Teataja) and since 2011 as PR expert (Eesti Post Ltd, Ministry of Economics and Communications; Enterprise Estonia)</li>
              <li class="text-sm mb-4">BA in journalism, University of Tartu</li>
            </ul>
          </div>
        </li>
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/heidi.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Heidi Ojamaa</h3>
              <p class="text-primary">PR and communication</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Manages corporate and marketing communication projects</li>
              <li class="text-sm mb-4">Work experience in media since 2008 as a reporter, editor and analyst, advisor to the Minister of Regional Development, Minister of Education and Research, and Ministers of Entrepreneurship and Information technology</li>
              <li class="text-sm mb-4">Studied Marketing at the Estonian Business School</li>
            </ul>
          </div>
        </li>
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/liina.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Liina Pulges</h3>
              <p class="text-primary">Marketing</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Has been working in PR and marketing since 2003 (Head of Public Relations of the University of Tartu, Head of PR and Marketing in AHHAA Science Centre)</li>
              <li class="text-sm mb-4">Owner of PR and marketing company Unistuste Agentuur since 2011</li>
              <li class="text-sm mb-4">MA degree in journalism, University of Tartu</li>
            </ul>
          </div>
        </li>
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/lauri.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Lauri Järvlepp</h3>
              <p class="text-primary">Graphic designer</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Freelance graphic designer since 2004 </li>
              <li class="text-sm mb-4">Since 2011 owner and print/digital media designer at graphic design & animation studio Bassein</li>
              <li class="text-sm mb-4">Studied media art at Tartu Art College</li>
            </ul>
          </div>
        </li>
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/jan.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Jan Henrik Pärnik</h3>
              <p class="text-primary">Videographer</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Freelance photographer and videographer </li>
              <li class="text-sm mb-4">Has studied Media and Advertisement Design</li>
              <li class="text-sm mb-4">BA degree of Applied Science, Pallas University of Applied Sciences</li>
            </ul>
          </div>
        </li>
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="<?php echo get_template_directory_uri(); ?>/dist/static/kristjan.jpg" alt="">
            </div>
            <div class="text-lg leading-6 font-medium space-y-1">
              <h3>Kristjan Pikk</h3>
              <p class="text-primary">Digital designer</p>
            </div>
            <ul class="text-lg text-gray-500">
              <li class="text-sm mb-4">Hack The Crisis hackathon winner from Share Force One</li>
              <li class="text-sm mb-4">Experienced UI/UX designer</li>
              <li class="text-sm mb-4">Finishing BA degree in Marketing at Estonian Entrepreneurship University of Applied Sciences</li>
            </ul>
          </div>
        </li>
    </ul>
  </div>
</div>

<?php
get_footer();
