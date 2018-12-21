<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BK_Digital_FINAL_THEME
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bk-digital-final-theme'); ?></a>

	<header id="masthead" class="site-header headerItems">

		<div class="site-branding">
			<div class="headerItems__logo-box">
			<?php
            the_custom_logo();
            ?>
			</div>
		</div><!-- .site-branding -->

		<div class="navigation">
			<input type="checkbox" class="navigation__checkbox" id="navi-toggle">
			<label for="navi-toggle" class="navigation__button">
				<span class="navigation__icon">&nbsp;</span>
			</label>
			<div class="navigation__background">&nbsp;</div>
			<nav class="navigation__nav">
				<?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'navigation__list',
                    'add_li_class'  => 'your-class-name1 your-class-name-2'
                ));
                ?>
			</nav>
		</div><!-- .navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
