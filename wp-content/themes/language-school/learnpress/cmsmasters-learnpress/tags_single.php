<?php
/**
 * Template for displaying the tags of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */

defined( 'ABSPATH' ) || exit();

$tags = get_the_term_list( get_the_ID(), 'course_tag', '', ', ', '' );
if( $tags ) {
?>
<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_tag"><?php esc_html_e('Tags', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
<?php
	printf(
		'<span class="tags-links">%s</span>',	
		$tags
	);
?>
	</div>
</div>
<?php
}	

