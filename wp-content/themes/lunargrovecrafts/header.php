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
		<div class="site-branding">
		<?php if ( is_front_page() ) : ?>
			<div id="hero">
				<?php 
					$image = get_field('hero'); 	
					if( $image ): ?>
						<style type="text/css">
							#hero {
								background-image: url(<?php echo $image['url']; ?>);
								width: 100%;
								height: 500px;
								background-position: center;
								background-size: cover;
								background-repeat: no-repeat;
								display: flex;
							}
						</style>
					<?php endif; 
					$logo = get_field('home-header-logo');
					if( !empty( $image ) ): ?>
						<img id="home-header-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
						<style type="text/css">
							#home-header-logo{
								width: 700px;
								margin: auto;
							}
						</style>
					<?php endif; ?>
			</div>
		<?php endif;?>
			<nav id="site-navigation" class="navbar navbar-expand-md navbar-light bg-light">
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

				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
