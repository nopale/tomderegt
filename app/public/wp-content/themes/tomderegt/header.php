<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tomderegt
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="Tom de Regt is an Art-director and Graphic Designer who specializes in branding and identity with experience in music, fashion and advertising industries. " />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php bloginfo('template_directory');?>/assets/scalpel.png" />
    <meta property="og:image" content="<?php bloginfo('template_directory');?>/assets/sharing.jpg">
    <meta property="og:image:type" content="<?php bloginfo('template_directory');?>/assets/sharing.jpg">
    <meta property="og:image:width" content="320">
    <meta property="og:image:height" content="320">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'tomderegt');?></a>

	<header id="masthead" class="site-header ">
		<div class="site-branding flex justify-between items-center relative">
			<div class="pseudo-border absolute absolute-bottom absolute-left"></div>
				<h1 class="site-title home-button"><a href="<?php echo esc_url(home_url('/')); ?>" class="link link-hover" rel="home"><?php get_template_part('template-parts/content-logo')?></a></h1>
				
				<h2 class="site-title header-logo ttu"><?php is_front_page() ? get_template_part('template-parts/content-title') : wp_title(''); ?></h2>

				<a href="#" class="menu-toggle link link-hover" style="margin-right: -8px;">
						<svg class="toggle" width="40" height="40" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="6" y="10" width="24" height="2" fill="" class="burger-top"/>
							<rect x="6" y="18" width="24" height="2" fill="" class="burger-middle"/>
							<rect x="6" y="26" width="24" height="2" fill="" class="burger-bottom"/>
						</svg>
				</a>

			<nav id="site-navigation" class="main-navigation absolute">
				<div class="tom-nav">
				
				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
				?>
				 
				</div>
				 <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
			</nav>
		</div><!-- .site-branding -->
				<!-- <div class="pseudo-border vertical absolute absolute-top absolute-left"></div> -->
				 <!-- <div class="pseudo-border vertical absolute absolute-top absolute-right"></div> -->
				
		<!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="cursor" style="transform: translate(-50%,-50%);">
				 <svg width="100%" height="100%" transform="" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="target" transform="translate(0,0)" clip-path="url(#clip0)">
						<g id="Layer 2">
						<g id="Layer 1">
						<g id="target_2">
						<path id="Vector" d="M31.8 50C41.8516 50 50 41.8516 50 31.8C50 21.7484 41.8516 13.6 31.8 13.6C21.7484 13.6 13.6 21.7484 13.6 31.8C13.6 41.8516 21.7484 50 31.8 50Z" stroke="#D1D3D4" stroke-width="3" stroke-miterlimit="10"/>
						<path id="Vector_2" d="M63.7 31.8H0" stroke="#D1D3D4" stroke-width="3" stroke-miterlimit="10"/>
						<path id="Vector_3" d="M31.8 0V63.7" stroke="#D1D3D4" stroke-width="3" stroke-miterlimit="10"/>
						</g>
						</g>
						</g>
						</g>
				</svg>
	</div>