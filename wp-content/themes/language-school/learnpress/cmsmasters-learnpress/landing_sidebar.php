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
global $course;

?>

<?php 
	learn_press_get_template( 'cmsmasters-learnpress/price_single.php' );
	
	learn_press_get_template( 'cmsmasters-learnpress/students_single.php' );
	
	learn_press_get_template( 'cmsmasters-learnpress/duration_single.php' );
	
	learn_press_get_template( 'cmsmasters-learnpress/wishlist_button_single.php' );
	
	learn_press_get_template( 'cmsmasters-learnpress/categories_single.php' );
	
	learn_press_get_template( 'cmsmasters-learnpress/tags_single.php' );
	
	if ( class_exists( 'LP_Addon_Course_Review' ) ) {
		learn_press_get_template( 'cmsmasters-learnpress/rate_single.php' );
	}
	
	learn_press_get_template( 'cmsmasters-learnpress/enroll_button_single.php' );
?>