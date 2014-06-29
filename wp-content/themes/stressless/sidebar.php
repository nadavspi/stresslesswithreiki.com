<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package stressless
 */
?>
<?php if ( dynamic_sidebar( 'sidebar-1' ) ) : ?>
	<aside class="sidebar" role="complementary">
    <h1 class="visuallyhidden">Sidebar</h1>
    
		<?php do_action( 'before_sidebar' ); ?>
			<?php // default sidebar content can go here ?>
	</aside><!-- .sidebar -->
<?php endif; // end sidebar widget area ?>
