<?php
/**
 * User Information
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
	exit;
}
global $wp_query;

$tabs         = learn_press_user_profile_tabs( $user );
$current      = learn_press_get_current_profile_tab();
$profile_link = learn_press_get_page_link( 'profile' );
if ( !empty( $tabs ) && !empty( $tabs[$current] ) ) : ?>
	<div class="user-info" id="learn-press-user-info">
		<div class="user-basic-info">
			<span class="cmsmasters_lpr_profile_avatar user-avatar"><?php echo get_avatar( $user->ID ); ?></span>
			<div class="cmsmasters_lpr_profile_wrap">
				<h6 class="cmsmasters_lpr_profile_name user-nicename"><?php echo $user->user_nicename; ?></h6>
				<?php if ( $description = get_user_meta( $user->id, 'description', true ) ): ?>
					<div class="user-bio cmsmasters_lpr_profile_content"><?php echo get_user_meta( $user->id, 'description', true ); ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>