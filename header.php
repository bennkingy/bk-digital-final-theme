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
			<div class="header__logo-box">
			<?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
                ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
            else :
                ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
            endif;
            $bk_digital_final_theme_description = get_bloginfo('description', 'display');
            if ($bk_digital_final_theme_description || is_customize_preview()) :
                ?>
				<p class="site-description"><?php echo $bk_digital_final_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

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


             <!--   <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>About Natous</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Your benfits</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular tours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Book now</a></li>
					</ul>
		-->
            </nav>
        </div>

	<div id="content" class="site-content">
