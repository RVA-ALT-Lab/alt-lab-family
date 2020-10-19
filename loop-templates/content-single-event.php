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
		<?php $family_id = get_field('family_association');?>
		<h1 class="event-title">The <?php echo get_the_title($family_id) ?> Family</h1>
		 <div class="row family">
		 	<?php
		 		
		 		if( have_rows('family', $family_id) ):

				    // Loop through rows.
				    while( have_rows('family', $family_id) ) : the_row();

				        // Load sub field value.
				        $name = get_sub_field('name', $family_id);
				          $bio = get_sub_field('bio_details');
				        if(get_sub_field('bio_picture')){
				        	 $img = get_sub_field('bio_picture')['sizes']['medium'];
				        } else {
				        	$img = get_template_directory_uri() . '/imgs/empty_profile.png';
				        }
				       
				        //var_dump($img);
				        echo '<div class="col-md-4">';
				        echo '<img src="'. $img .'" class="parent person img-fluid" alt="real or no">';
				        //echo '<h2 class="family-member-name">' . $name . '</h2>';//If we change our mind about the names
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
		 <ul id="resources">
			<li>
				<a href="map">
					<img src="<?php echo get_template_directory_uri();?>/imgs/map.svg">
					Map
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo get_template_directory_uri();?>/imgs/community.svg">
					Resources
				</a>
			</li>
			<li><a href="#">
					<img src="<?php echo get_template_directory_uri();?>/imgs/question.svg">
					Questions
				</a>
			</li>
		</ul>

	</header><!-- .entry-header -->
</article>

<footer class="entry-footer">

	<?php understrap_entry_footer(); ?>

</footer><!-- .entry-footer -->
	

