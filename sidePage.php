<?php
/**
 * Template Name: Side Page
 */
get_header(); ?>

<div class="entry-header2">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</div>
<div class="px-row-polygon5"></div>
	<div id="primary" class="content-area">

		<main id="main" class="site-main">

        <div class="container">
            <div class="row">
                <div class="col-sm-8" style="background-color:green;">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4" style="background-color:pink;">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
