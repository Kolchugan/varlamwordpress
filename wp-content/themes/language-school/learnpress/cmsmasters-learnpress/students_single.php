<?php
/**
 * Template for displaying the students of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $course;

?>

<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_students"><?php esc_html_e('Students', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
		<span class="course-students">
			<?php 
			if ( $count = $course->count_users_enrolled() ):
				echo $count;
			else:
				esc_html_e('0', 'language-school');
			endif;
			?>
		</span>
	</div>
</div>
