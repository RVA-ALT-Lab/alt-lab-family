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
		        $map_id = 'map_'.get_row_index();
		        $left = get_sub_field('left');
		        $bottom = get_sub_field('bottom');
		        $image = get_sub_field('icon');
		        $position = 'position:absolute;left:'.$left.'%;bottom:'.$bottom."%;";
		        $details = get_sub_field('details');
		        //map part
		        echo '<div class="map-location" style="'.$position.'">';
		        echo '<img src="' . $image['sizes']['thumbnail'] . '">';
		        echo '<button data-toggle="modal" data-target="#'.$map_id.'" class="trigger">'.$name.'</button>';
		        echo '</div>';
		        // modal part
		        echo '<div class="modal fade" id="'.$map_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">'.$name.'</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       '.$details.'
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>';

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
