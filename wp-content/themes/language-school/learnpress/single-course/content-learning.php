<?php
/**
 * Template for displaying content of learning course
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

?>

<?php do_action( 'learn_press_before_content_learning' );?>

<div class="course-learning-summary">

	<?php 
		if ($cmsmasters_lpr_course_title == 'true') {
			the_title( '<h2 class="entry-title cmsmasters_course_title">', '</h2>' );
		}
		
		if ($cmsmasters_lpr_course_image == 'true' && has_post_thumbnail()) {
			language_school_thumb(get_the_ID(), 'post-thumbnail', false, true, true, false, true, true, false);
		}
		
		remove_action( 'learn_press_content_learning_summary', 'learn_press_course_thumbnail', 5 );
		remove_action( 'learn_press_content_learning_summary', 'learn_press_course_instructor', 20 );
		remove_action( 'learn_press_content_learning_summary', 'learn_press_course_status', 15 );
		remove_action( 'learn_press_content_learning_summary', 'learn_press_course_students', 25 );
		
		do_action( 'learn_press_content_learning_summary' ); 
	?>

</div>

<?php do_action( 'learn_press_after_content_learning' );?>
