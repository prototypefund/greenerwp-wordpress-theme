<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LowTechWPZero
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
		<?php /*if ( ! lowtechwp_zero_is_waiter() ):*/ ?>
			<?php wp_head(); ?>
		<?php /*endif*/ ?>
	</head>

  <body <?php body_class(); ?>>
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lowtechwp-zero' ); ?></a>

      <header id="masthead" class="site-header">
        <div class="site-header__inner">
          <p class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
            ?>
              <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
            <?php
            else :
            ?>
              <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
            <?php
            endif;
            $lowtechwp_zero_description = get_bloginfo( 'description', 'display' );
            if ( $lowtechwp_zero_description || is_customize_preview() ) :
            ?>
              / <span class="site-description"><?php echo esc_html( $lowtechwp_zero_description ); ?></span>
            <?php endif; ?>
          </p><!-- .site-branding -->

					<?php if ( ! lowtechwp_zero_is_waiter() ): ?>
						<nav id="site-navigation" class="main-navigation">
							<div class="main-navigation__inner">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span class="menu-toggle__label">
										<?php esc_html_e( 'Primary Menu', 'lowtechwp-zero' ); ?>
									</span>
									<span></span>
									<span></span>
									<span></span>
								</button>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'primary-menu',
								) );
								?>
							</div>
						</nav><!-- #site-navigation -->
					<?php endif ?>
				</div>
			</header><!-- #masthead -->

	    <div id="content" class="site-content">
