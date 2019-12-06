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
		<?php /*if ( ! ltwp0_is_waiter() ):*/ ?>
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
            $ltwp0_description = get_bloginfo( 'description', 'display' );
            if ( $ltwp0_description || is_customize_preview() ) :
            ?>
              / <span class="site-description"><?php echo $ltwp0_description; /* WPCS: xss ok. */ ?></span>
            <?php endif; ?>
          </p><!-- .site-branding -->

					<?php if ( ! ltwp0_is_waiter() ): ?>
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lowtechwp-zero' ); ?></button>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					<?php endif ?>
				</div>
			</header><!-- #masthead -->

	    <div id="content" class="site-content">
