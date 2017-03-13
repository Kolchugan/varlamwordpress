<?php
/**
 * Template for displaying the status of course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $course;

$user = learn_press_get_current_user();

if ( !$user->has( 'purchased-course', $course->id ) ) {
	return;
}

$status = $user->get_course_status( $course->id );
?>
<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_status"><?php esc_html_e('Status', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
		<span class="learn-press-course-status <?php echo sanitize_title( $status );?>"><?php echo ucfirst( $status ); ?></span>
	</div>
</div>
