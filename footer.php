<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LowTechWPZero
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		</div><!-- .site-info -->
		<?php if ( ! ltwp0_is_waiter() ): ?>
			<nav class="footer-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		<?php endif ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php /* if ( ! ltwp0_is_waiter() ): */ ?>
	<?php wp_footer(); ?>
<?php /* endif */ ?>

</body>
</html>
