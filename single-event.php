<?php
/**
 * The template for displaying all single family posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-family-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single-event' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->
		

		</div><!-- .row -->
		
        <div class="row">                
            <div class="col-md-6 offset-md-6">
            	<?php the_title( '<h1 class="event-title">', '</h1>' ); ?>
				<?php the_content(); ?>
			</div>	
		</div>			


	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
