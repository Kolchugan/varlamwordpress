<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 * Template for displaying content of single quiz
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $quiz;
get_header();
?>


<?php while ( have_posts() ): the_post(); ?>
	<div class="cmsmasters_lpr_quiz opened-article">
	<?php learn_press_get_template_part( 'content', 'single-quiz' ); ?>
	</div>
<?php endwhile; ?>

<?php do_action( 'learn_press_after_main_content' ); ?>

<?php
get_footer();