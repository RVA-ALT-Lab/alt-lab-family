<?php
/**
 * Template Name: Full Width MAP Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-map-page-wrapper">

	<div class="container-fluid" id="content">
		<?php 
		if( have_rows('locations') ):

		    // Loop through rows.
		    while( have_rows('locations') ) : the_row();

		        // Load sub field value.
		        $name = get_sub_field('location_title');
		        $left = get_sub_field('left');
		        $bottom = get_sub_field('bottom');
		        $position = 'position:absolute;left:'.$left.'%;bottom:'.$bottom."%;";
		        //var_dump($img);
		        echo '<div class="map-location" style="'.$position.'">';
		        echo '<h2>'.$name.'</h2>';
		        echo '</div>';
		        // Do something...

		    // End loop.
		    endwhile;

		// No value.
		else :
		    // Do something...
		endif;


		?>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
