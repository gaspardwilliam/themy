<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site ">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'themy' ); ?></a>-->

	<header id="masthead" class="site-header ">
		<div class="site-branding">
			<?php
			
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$themy_description = get_bloginfo( 'description', 'display' );
			if ( $themy_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $themy_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="main-nav">
                <div class="title-bar " data-responsive-toggle="menu-principal" data-hide-for="medium">
                  <button class="menu-icon" type="button" data-toggle="menu-principal"></button>
                  <!--<div class="title-bar-title">Menu</div>-->
                </div>
                <div class="top-bar fast" id="menu-principal"  data-animate="slide-in-left slide-out-left">
                   <div class="top-bar-left">
                       <?php the_custom_logo();?>
                   </div>
                    <div class="top-bar-right" >
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'        => 'dropdown menu vertical medium-horizontal',
                        'container'        => '',
                    ) );
                    ?>
                    </div>
                </div>

            </nav><!-- #site-navigation -->
            <?php
            if(has_header_image()):?>
            <div class="custom_header_image">
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            </div>
            
            <?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content grid-container">
	    <div class="grid-x grid-margin-x">
