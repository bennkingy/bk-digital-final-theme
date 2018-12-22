<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

    <div class="firstSection"> 

        <div class="firstSection__text-box">
            <img src="https://www.bkdigital.co.uk/wp-content/uploads/2018/12/bk-no-text.svg" alt="Logo" class="header__brand">
            <h1 class="heading-primary">
                <span class="heading-primary--main"><span class="heading-primary--main--bk">BK</span>Digital</span>
                <span class="heading-primary--sub">Websites & branding</span>
            </h1>
            <a href="#" class="btn btn--clear"><span>View portfolio<i class="eye-icon"></i></span></a>
        </div> 
        <div class="px-row-polygon"></div>

    </div>

    <div class="sectionSection">

        <div class="centerButtons">
            <button type="button" class="button is-checked" data-filter="">ALL</button>
            <button type="button" class="button" data-filter=".design">DESIGN</button>
            <button type="button" class="button" data-filter=".branding">BRANDING</button>
        </div>
        
        <div class="nak-gallery nlg1" id="gallery">
        <a href="http://localhost:8888/wordpress/wp-content/uploads/2018/12/cz.jpg" class="revGallery-anchor design">
            <img class="img-responsive" src="http://localhost:8888/wordpress/wp-content/uploads/2018/12/cz.jpg">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://localhost:8888/wordpress/wp-content/uploads/2018/12/cz.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>	
        <a href="http://localhost:8888/wordpress/wp-content/uploads/2018/12/robHoffman.jpg" class="revGallery-anchor branding">
            <img class="img-responsive" src="http://localhost:8888/wordpress/wp-content/uploads/2018/12/robHoffman.jpg">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://localhost:8888/wordpress/wp-content/uploads/2018/12/robHoffman.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>	
        <a href="http://unsplash.com/photos/EKIyHUrUHWU/download" class="revGallery-anchor design">
            <img class="img-responsive" src="http://unsplash.com/photos/EKIyHUrUHWU/download">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://unsplash.com/photos/EKIyHUrUHWU/download');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>	
        <a href="http://unsplash.com/photos/CFi7_hCXecU/download" class="revGallery-anchor branding">
            <img class="img-responsive" src="http://unsplash.com/photos/CFi7_hCXecU/download">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://unsplash.com/photos/CFi7_hCXecU/download');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>
        <a href="http://unsplash.com/photos/cFplR9ZGnAk/download" class="revGallery-anchor design">
            <img class="img-responsive" src="http://unsplash.com/photos/cFplR9ZGnAk/download">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://unsplash.com/photos/cFplR9ZGnAk/download');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>
        <a href="http://unsplash.com/photos/cFplR9ZGnAk/download" class="revGallery-anchor design">
            <img class="img-responsive" src="http://unsplash.com/photos/cFplR9ZGnAk/download">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://unsplash.com/photos/cFplR9ZGnAk/download');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>	
        <a href="http://unsplash.com/photos/cFplR9ZGnAk/download" class="revGallery-anchor design">
            <img class="img-responsive" src="http://unsplash.com/photos/cFplR9ZGnAk/download">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://unsplash.com/photos/cFplR9ZGnAk/download');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>	
        <a href="http://unsplash.com/photos/cFplR9ZGnAk/download" class="revGallery-anchor design">
            <img class="img-responsive" src="http://unsplash.com/photos/cFplR9ZGnAk/download">
            <div style="overflow:hidden">
            <div class="nak-gallery-poster" style="background-image:url('http://unsplash.com/photos/cFplR9ZGnAk/download');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
            </div>
            <div class="gal-overlay">
            <div class="photo"></div>
            </div>
        </a>	
        </div>

    <div class="px-row-polygon2"></div>
    </div>

		</main><!-- #main -->
    </div><!-- #primary -->
    
    <script>
        $(document).ready(function() {
			var $gallery = $('#gallery');
			var $boxes = $('.revGallery-anchor');
			$boxes.hide(); 

			$gallery.imagesLoaded( {background: true}, function() {
    		$boxes.fadeIn();

				$gallery.isotope({
					// options
					sortBy : 'original-order',
					layoutMode: 'fitRows',
					itemSelector: '.revGallery-anchor',
					stagger: 30,
				});
			});	

		 	$('button').on( 'click', function() {
		 		var filterValue = $(this).attr('data-filter');
			  	$('#gallery').isotope({ filter: filterValue });
			  	$gallery.data('lightGallery').destroy(true);
			    $gallery.lightGallery({
			      	selector: filterValue.replace('*','')
			    });
			});
        });

        $(document).ready(function() {
            $("#gallery").lightGallery({
                    
             }); 
        });

        //button active mode
        $('.button').click(function(){
            $('.button').removeClass('is-checked');
            $(this).addClass('is-checked');
        });

        //CSS Gram Filters on Mouse enter
        $("#gallery a .nak-gallery-poster").addClass("inkwell");

        $("#gallery a").on({
            mouseenter : function() {
                $(this).find(".nak-gallery-poster").removeClass("inkwell").addClass("walden");
            },
            mouseleave : function() {
                $(this).find(".nak-gallery-poster").removeClass("walden").addClass("inkwell");
            }
        }); 
    </script>

<?php
get_footer();
