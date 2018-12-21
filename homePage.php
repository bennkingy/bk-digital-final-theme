<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <!-- Custom content -->
            <div class="firstSection"> 
                <div class="firstSection__text-box">
                    <img src="https://www.bkdigital.co.uk/wp-content/uploads/2018/12/bk-no-text.svg" alt="Logo" class="header__brand">
                    <h1 class="heading-primary">
                        <span class="heading-primary--main"><span class="heading-primary--main--bk">BK</span>Digital</span>
                        <span class="heading-primary--sub">Websites & branding</span>
                    </h1>
                    <a href="#" class="btn btn--clear"><span>View portfolio<i class="eye-icon"></i></span></a>
                </div> d
                <div class="px-row-polygon"></div>
            </div>


	<!--	<?php
        if (have_posts()) :

            if (is_home() && ! is_front_page()) :
                ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
            endif;

            /* Start the Loop */
            while (have_posts()) :
                the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_type());

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
