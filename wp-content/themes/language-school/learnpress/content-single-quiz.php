<?php
/**
 * Template for displaying the content of single quiz
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

?>

<?php do_action( 'learn_press_before_single_quiz' ); ?>

	<div itemscope id="quiz-<?php the_ID(); ?>" <?php learn_press_quiz_class(); ?>>
		<div class="cmsmasters_course_content">
		<?php do_action( 'learn_press_before_single_quiz_summary' ); ?>

		<div class="quiz-summary">

			<?php 
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_result', 20 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_sidebar', 45 );
			do_action( 'learn_press_single_quiz_summary' );
			?>

		</div>

		<?php do_action( 'learn_press_after_single_quiz_summary' ); ?>
		</div>
		<div class="cmsmasters_course_sidebar">
			<?php
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_title', 5 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_description', 10 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_left_start_wrap', 15 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_question', 20 );
			add_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_result', 20 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_questions_nav', 25 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_questions', 30 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_history', 35 );
			remove_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_left_end_wrap', 40 );
			add_action( 'learn_press_single_quiz_summary', 'learn_press_single_quiz_sidebar', 45 );
			do_action( 'learn_press_single_quiz_summary' );
			?>
		</div>
	</div>

<?php do_action( 'learn_press_after_single_quiz' ); ?>