<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header(); 

	remove_action( 'learn_press_before_main_content', 'learn_press_breadcrumb' );
	do_action( 'learn_press_before_main_content' );
	?>
	
		<div class="cmsmasters_lpr_course opened-article">
		<?php
		while ( have_posts() ) : the_post();

			learn_press_get_template_part( 'content', 'single-course' );

			// if ( comments_open() || get_comments_number() ) :
				// comments_template();
			// endif;
		endwhile;
		?>
		</div>
	<?php do_action( 'learn_press_after_main_content' );
get_footer(); ?>
