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

$course_id = get_the_ID();
$course_rate = learn_press_get_course_rate( $course_id );
?>
	<div class="cmsmasters_lrp_archive_item">
		<div class="cmsmasters_lrp_archive_item_title">
			<?php esc_html_e('Ratings', 'language-school'); ?>
		</div>
		<div class="cmsmasters_lrp_archive_item_meta">
		<span class="course-rate">
			<?php learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) ); ?>
		</span>
	</div>
</div>