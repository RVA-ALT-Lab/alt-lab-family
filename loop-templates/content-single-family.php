<?php
/**
 * Single family partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header col-md-6 family-stats">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		 <div class="row family">
		 	<?php
		 		if( have_rows('family') ):

				    // Loop through rows.
				    while( have_rows('family') ) : the_row();

				        // Load sub field value.
				        //$name = get_sub_field('name');
				        $bio = get_sub_field('bio_details');
				        if(get_sub_field('bio_picture')){
				        	 $img = get_sub_field('bio_picture')['sizes']['medium'];
				        } else {
				        	$img = get_template_directory_uri() . '/imgs/empty_profile.png';
				        }
				       
				        //var_dump($img);
				        echo '<div class="col-md-4">';
				        echo '<img src="'. $img .'" class="parent person img-fluid" alt="The bio picture for one of the family members.">';
				        //echo '<h2 class="family-member-name">' . $name . '</h2>';
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
	

