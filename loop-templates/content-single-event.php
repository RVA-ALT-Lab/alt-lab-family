<?php
/**
 * Single event partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header col-md-6 family-stats fixed-top">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		 <div class="row family">
		 	<?php
		 		$family_id = get_field('family_association');
		 		
		 		if( have_rows('family', $family_id) ):

				    // Loop through rows.
				    while( have_rows('family', $family_id) ) : the_row();

				        // Load sub field value.
				        $name = get_sub_field('name', $family_id);
				        $bio = get_sub_field('bio_details', $family_id);
				        $img = get_sub_field('bio_picture', $family_id);
				        //var_dump($img);
				        echo '<div class="col-md-4">';
				        echo '<img src="'. $img['sizes']['medium'] .'" class="parent person img-fluid" alt="real or no">';
				        echo '<h2 class="family-member-name">' . $name . '</h2>';
				        echo '<div class="family-bio">' . $bio . '</div>';
				        echo '</div>';
				        // Do something...

				    // End loop.
				    endwhile;

				// No value.
				else :
				    // Do something...
				endif;

		 	?>

		 </div>

	</header><!-- .entry-header -->



	<div class="container-fluid article">
        <div class="row">                
            <div class="row offset-md-6">
				<?php the_content(); ?>
			</div>	
		</div>			
	</div>
<footer class="entry-footer">

	<?php understrap_entry_footer(); ?>

</footer><!-- .entry-footer -->
	

