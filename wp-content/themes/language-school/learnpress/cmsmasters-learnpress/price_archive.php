<?php
/**
 * Template for displaying the price of a course
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

<?php if ( $price_html = $course->get_price_html() ) : ?>

<div class="cmsmasters_lrp_archive_item">
	<div class="cmsmasters_lrp_archive_item_title">
		<?php esc_html_e('Price', 'language-school');?>
	</div>
	
	<div class="cmsmasters_lrp_archive_item_meta">
		<span class="course-price">
			<?php echo $price_html; ?>
		</span>
	</div>
</div>
<?php endif; ?>