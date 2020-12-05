<?php
/**
 * Template for front page
 *
 * @package hugfromfar
 */

get_header();

get_template_part( 'partials/hero' );
get_template_part( 'partials/why' );
get_template_part( 'partials/how' );
get_template_part( 'partials/stats' );
get_template_part( 'partials/cta' );
get_template_part( 'partials/partners' );
?>

<?php
get_footer();
