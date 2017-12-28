<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package danFleming
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <script src="https://use.typekit.net/heq5foe.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'danfleming' ); ?></a>
	<?php
	$logo = get_field('logo','options')['url'];

	?>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
		<div class="site-branding navbar-left">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<svg id="Artwork" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><title>Artboard 3</title><path d="M30,60A30,30,0,1,1,60,30,30,30,0,0,1,30,60ZM30,2.88A27.12,27.12,0,1,0,57.12,30,27.15,27.15,0,0,0,30,2.88ZM23.25,47.1a7.84,7.84,0,0,1-5-13.84l4.51-3.78-1.42-1.7a12.84,12.84,0,0,1-2-13.17,1.44,1.44,0,0,1,1.33-.88H23l-.38.62a10,10,0,0,0,.9,11.58l15.93,19-1.1.92a1.44,1.44,0,0,1-2-.18l-3.51-4.18-4.51,3.78A7.84,7.84,0,0,1,23.25,47.1ZM20,35.54a5,5,0,0,0,6.37,7.59A7.84,7.84,0,0,1,20,35.54Zm4.6-3.86a5,5,0,0,0,6.37,7.6ZM44,46.17a1.44,1.44,0,0,1-1.1-.51L25.14,24.54A7.84,7.84,0,1,1,39,19.39v.2l-5.88,4.93a1.44,1.44,0,0,1-2-.18l-.93-1.1.32-.26a2.22,2.22,0,1,0-3.12-.27L37,34.19l2.49-2.09a1.44,1.44,0,0,1,2,.18l.93,1.1-3.59,3L46,44.91l-1.1.93a1.44,1.44,0,0,1-.92.34ZM29,16.18A5.1,5.1,0,0,1,34,20l2-1.66a5,5,0,0,0-8.79-1.83A5.1,5.1,0,0,1,29,16.18Z"/></svg>

				</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<svg id="Artwork" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><title>Artboard 3</title><path d="M30,60A30,30,0,1,1,60,30,30,30,0,0,1,30,60ZM30,2.88A27.12,27.12,0,1,0,57.12,30,27.15,27.15,0,0,0,30,2.88ZM23.25,47.1a7.84,7.84,0,0,1-5-13.84l4.51-3.78-1.42-1.7a12.84,12.84,0,0,1-2-13.17,1.44,1.44,0,0,1,1.33-.88H23l-.38.62a10,10,0,0,0,.9,11.58l15.93,19-1.1.92a1.44,1.44,0,0,1-2-.18l-3.51-4.18-4.51,3.78A7.84,7.84,0,0,1,23.25,47.1ZM20,35.54a5,5,0,0,0,6.37,7.59A7.84,7.84,0,0,1,20,35.54Zm4.6-3.86a5,5,0,0,0,6.37,7.6ZM44,46.17a1.44,1.44,0,0,1-1.1-.51L25.14,24.54A7.84,7.84,0,1,1,39,19.39v.2l-5.88,4.93a1.44,1.44,0,0,1-2-.18l-.93-1.1.32-.26a2.22,2.22,0,1,0-3.12-.27L37,34.19l2.49-2.09a1.44,1.44,0,0,1,2,.18l.93,1.1-3.59,3L46,44.91l-1.1.93a1.44,1.44,0,0,1-.92.34ZM29,16.18A5.1,5.1,0,0,1,34,20l2-1.66a5,5,0,0,0-8.79-1.83A5.1,5.1,0,0,1,29,16.18Z"/></svg>

				</a></p>
			<?php
			endif;
       ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar-right">

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->

		      </div>
				</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
