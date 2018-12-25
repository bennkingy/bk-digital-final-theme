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
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/animations.css" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/css/lightgallery.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bk-digital-final-theme'); ?></a>

	<header id="masthead" class="site-header headerItems animatedParent animateOnce" data-sequence="500">

		<div class="site-branding animated fadeInLeft animateOnce"  data-id='1'>
			<div class="headerItems__logo-box">
			<?php
            the_custom_logo();
            ?>
			</div>
		</div><!-- .site-branding -->

		<div class="navigation animated fadeInRight animateOnce"  data-id='1'>
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

	
	<script>
	// If mobile menu open, disable page scroll
	$(document).ready(function() {

		$('.navigation__button').click(function() {

			if ($('.navigation__checkbox:checkbox:checked').length > 0) {

				$('html, body').css({
					overflow: 'initial',
					height: 'initial'
				});
			}
			else {

				$('html, body').css({
					overflow: 'hidden',
					height: '100%'
				});
			
			}

			});
		
	});
	</script>

	<div id="content" class="site-content">
