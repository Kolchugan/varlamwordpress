<?php
/**
 * Template for displaying the instructor of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $course;

$author_name = get_the_author();

if ( get_post_type( $course->id ) == 'lp_course' && $course_author = get_post_field( 'post_author', $course->id ) ) {
	$link = learn_press_user_profile_link( $course_author );
}

?>

<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="author cmsmasters_theme_icon_lpr_instructor" aria-hidden="true" itemprop="author">
			<?php _e( 'Instructor: ', 'learnpress' ); ?>
		</span>
	</div>
	<div class="cmsmasters_course_meta_info">
		<a href="<?php echo $link ?>"><?php echo $author_name ?></a>
	</div>
</div>