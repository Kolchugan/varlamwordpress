<?php
/**
 * @author        ThimPress
 * @package       LearnPress/Templates
 * @version       1.0
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.1
 *
 */
 
defined( 'ABSPATH' ) || exit();
?>
<span class="cmsmasters_next_post">
	<a data-id="<?php echo $item;?>" href="<?php echo $course->get_item_link( $item ); ?>"><?php echo get_the_title( $item ); ?></a>
	<span class="cmsmasters_next_arrow"><span></span></span>
</span>