<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lunargrovecrafts
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
<div id="page" class="site">
	<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'lunargrovecrafts' ); ?></a>

	<header id="masthead" class="site-header">
		
		<?php if ( is_front_page() ) : ?>
			<div id="hero">
				<?php 
					if( has_post_thumbnail() ):?> <!-- #set hero image -->
					<style type="text/css">
						#hero {
							background-image: url("<?php echo esc_url(get_the_post_thumbnail_url()); ?>");
						}
					</style>
				<?php endif; ?>
				<nav id="site-navigation" class="navbar navbar-dark navbar-expand-sm bg-dark"><!-- #site-navigation -->
					<a class="navbar-brand" href="#">
					<?php $logo = get_custom_logo();
						if ($logo):
							echo get_custom_logo();
						endif;?>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'navbar-nav',
							'container_id' => 'navbarNav',
							'container_class' => 'collapse navbar-collapse',
						) );
					?>
		
				</nav>
				<div id="front-page-header-text">
					<?php
						$image = get_field('header_logo');
						if( !empty( $image ) ): ?>
							<img class="front-page-header-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif;
					
					$header_title = get_field('header_title');
					if( !empty( $header_title ) ): ?>
						<h1 class="header-title"><?php echo $header_title ?></h1>
					<?php endif; ?>
					<?php 
						$header_subtitle = get_field('header_subtitle'); 
						if( !empty( $header_subtitle ) ): ?>
						<h2 class="header-subtitle"><?php the_field('header_subtitle');?></h2>
						
						<?php endif;?>
				</div>
			</div>
		<?php endif;?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
