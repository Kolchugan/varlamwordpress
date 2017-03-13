<?php
/**
 * Template for displaying content of landing course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$cmsmasters_lpr_course_title = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_title', true);

$cmsmasters_lpr_course_image = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_image', true);

do_action( 'learn_press_before_content_landing' ); 

?>

<div class="course-landing-summary">

	<?php 
		if ($cmsmasters_lpr_course_title == 'true') {
			the_title( '<h2 class="entry-title cmsmasters_course_title">', '</h2>' );
		}
		
		if ($cmsmasters_lpr_course_image == 'true' && has_post_thumbnail()) {
			language_school_thumb(get_the_ID(), 'post-thumbnail', false, true, true, false, true, true, false);
		}
		
		remove_action( 'learn_press_content_landing_summary', 'learn_press_course_thumbnail', 5 );
		remove_action( 'learn_press_content_landing_summary', 'learn_press_course_title', 10 );
		remove_action( 'learn_press_content_landing_summary', 'learn_press_course_price', 25 );
		remove_action( 'learn_press_content_landing_summary', 'learn_press_course_students', 30 );
		remove_action( 'learn_press_content_landing_summary', 'learn_press_course_enroll_button', 45 );
		
		do_action( 'learn_press_content_landing_summary' ); 
	?>

</div>

<?php do_action( 'learn_press_after_content_landing' ); ?>
