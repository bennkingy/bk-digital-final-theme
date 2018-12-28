<?php
/**
 * Template Name: Full Width Page
 */
get_header(); ?>

<div class="entry-header2 animatedParent animateOnce">
    <h1 class="page-title animated fadeInUpShort animateOnce delay-750"><?php single_post_title(); ?></h1>
</div>
<div class="px-row-polygon5"></div>
	<div id="primary" class="content-area">

		<main id="main" class="site-main">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 animatedParent animateOnce">
                    <div class="animated fadeInUpShort animateOnce delay-1000">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

		</main><!-- #main -->
    </div><!-- #primary -->
    
    <script>
        $(document).ready(function() {

            if (parseInt($(window).width()) < 991) {

                $(".thirdCol").insertAfter(".fourthCol");
            }

        });
    </script>

<?php
get_footer();
