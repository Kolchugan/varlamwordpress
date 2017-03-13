<?php
/**
 * Template for displaying the categories of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */

defined( 'ABSPATH' ) || exit();

$term_list = get_the_term_list( get_the_ID(), 'course_category', '', ', ', '' );
if( $term_list ) {
?>
<div class="cmsmasters_lrp_archive_item">
	<div class="cmsmasters_lrp_archive_item_title">
		<?php esc_html_e('Categories', 'language-school'); ?>
	</div>
	<div class="cmsmasters_lrp_archive_item_meta">
<?php
	printf(
		'<span class="cat-links">%s</span>',
		$term_list
	);
?>
	</div>
</div>
<?php
}