<?php
/**
 * The template for display the content of single course
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 1.0
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $course;
do_action( 'learn_press_before_single_course' ); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/CreativeWork">
	<div class="cmsmasters_course_content">
	
		<?php do_action( 'learn_press_before_single_course_summary' ); ?>

		<div class="course-summary">

			<?php if ( LP()->user->has( 'enrolled-course', $course->id ) || LP()->user->has( 'finished-course', $course->id ) ) { ?>

				<?php learn_press_get_template( 'single-course/content-learning.php' ); ?>

			<?php } else { ?>

				<?php learn_press_get_template( 'single-course/content-landing.php' ); ?>

			<?php } ?>

		</div>

		<?php do_action( 'learn_press_after_single_course_summary' ); ?>

	</div>
	<div class="cmsmasters_course_sidebar">
		<?php if ( LP()->user->has( 'enrolled-course', $course->id ) || LP()->user->has( 'finished-course', $course->id ) ) { ?>

			<?php learn_press_get_template( 'cmsmasters-learnpress/learning_sidebar.php' ); ?>

		<?php } else { ?>

			<?php learn_press_get_template( 'cmsmasters-learnpress/landing_sidebar.php' ); ?>

		<?php } ?>
	</div>
</div><!-- #post-## -->

<?php do_action( 'learn_press_after_single_course' ); ?>
