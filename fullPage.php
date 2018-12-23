<?php
/**
 * Template Name: Full Page
 */
get_header(); ?>

<div class="entry-header2">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</div>
<div class="px-row-polygon5"></div>
	<div id="primary" class="content-area">

		<main id="main" class="site-main">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mainContent">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
