/* Theme JS */

(function($) {
    "use strict";

  /* ----------------------------------------------
        jQuery MeanMenu
    ---------------------------------------------- */
    $('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });

    /* ----------------------------------------------
        nice-select-menu
    ---------------------------------------------- */
    $('.nice-select-menu').niceSelect();
    /*----------------------------
    4.1 Vertical-Menu Activation
    -----------------------------*/
    $('.categorie-title').on('click', function () {
        $('.categori-menu-list').slideToggle();
    });
    /* -------------------------------------------------------------
		nivoSlider
    -------------------------------------------------------------  */
		  $('#mainSlider').nivoSlider({
			manualAdvance: true,
			directionNav: true,
			animSpeed: 500,
			slices: 18,
			pauseTime: 5000,
			pauseOnHover: false,
			controlNav: false,
			prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
			nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
		});
    /* ----------------------------------------------
        Round product
    ---------------------------------------------- */
    $('.block_content').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 3,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    })
    /* ----------------------------------------------
        productTabContent0 product
    ---------------------------------------------- */
    $('.productTabContent0').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 4,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    })
    /* ----------------------------------------------
        productTabContent1 product
    ---------------------------------------------- */
    $('.productTabContent1').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 6,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1170: {
                items: 6
            }
        }
    })
    /* ----------------------------------------------
        productTabContent0 product
    ---------------------------------------------- */
    $('.productTabContent2').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 3,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            }
        }
    })
    /* ----------------------------------------------
        feature-item product
    ---------------------------------------------- */
    $('.feature-item').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1170: {
                items: 1
            }
        }
    })
    /* ----------------------------------------------
        Testimonial
    ---------------------------------------------- */
    $(".testimonialsSlide").owlCarousel({
        autoplay :true,
        autoplayHoverPause: true,
        smartSpeed : 1000,
        nav :false,
        dots : true,
        responsiveClass:true,
        navText: ["önceki", "sonraki"],
        responsive : {
          0 : {
              items: 1
          },
          480 : {
              items: 1
          },
          768 : {
              items: 1
          },
          992 : {
              items: 1
          },
          1200 : {
              items: 1
          }
        }
    })


    /* ----------------------------------------------
        Special Products
    ---------------------------------------------- */
    $('.special-item').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 2,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    })
    /* ----------------------------------------------
        Special Products
    ---------------------------------------------- */
    $('.special-item1').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    })
    /* ----------------------------------------------
        blog slider
    ---------------------------------------------- */
    $('.blog_slider').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["önceki","sonraki"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 3,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    })
    /* ----------------------------------------------
        brand logo
    ---------------------------------------------- */
    $('.logo-slider').owlCarousel({
        autoPlay : true ,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        nav: true,
        dots : false,
        navText: ["önceki", "sonraki"],
        responsive:{
            0:{
                items:2,
            },
            480:{
                items:3,
            },
            768:{
                items:4,
                nav:false,
            },
            992:{
                items:5,
            },
            1200:{
                items:6,
            }
        }
    })

    /* ----------------------------------------------
        gallery-post active
    ---------------------------------------------- */
    $('.gallery-post').owlCarousel({
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        dots: false,
        nav: false,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    /* ----------------------------------------------
        Countdown
    ---------------------------------------------- */
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Mint</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });

    $(".search-icon").on("click", function(){
        $("#search_widget").toggle();
    });


































/* No need  */






    /* ----------------------------------------------
        slider-carousel-active
    ---------------------------------------------- */

    /* ----------------------------------------------
        product popup
    ---------------------------------------------- */
     $('.product-popup').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image'
          // other options
        });



    /*--------------------------
    tab active
    ---------------------------- */
    $('.product-details-small a').on('click', function(e) {
        e.preventDefault();

        var $href = $(this).attr('href');

        $('.product-details-small a').removeClass('active');
        $(this).addClass('active');

        $('.product-details-large .tab-pane').removeClass('active');
        $('.product-details-large ' + $href).addClass('active');
    })

    /* ----------------------------------------------
        Tooltip
    ---------------------------------------------- */
    $('[rel="tooltip"]').tooltip();



    /* ********************************************
        13. Cart Plus Minus Button
    ******************************************** */
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        }
        else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            }
            else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });

    /*-- Price Range --*/
    $('#price-range').slider({
        range: true,
        min: 0,
        max: 700,
        values: [0, 700],
        slide: function(event, ui) {
            $('.price-amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
        }
    });
    $('.price-amount').val('$' + $('#price-range').slider('values', 0) +
        ' - $' + $('#price-range').slider('values', 1));
    $('.product-filter-toggle').on('click', function() {
        $('.product-filter-wrapper').slideToggle();
    })

    /* ---------------------------
    11. FAQ Accordion Active
    * ---------------------------*/
      $('.panel-heading a').on('click', function() {
        $('.panel-default').removeClass('show');
        $(this).parents('.panel-default').addClass('show');
      });


    /* CounterUp Active */
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


    /*--
        Isotop with ImagesLoaded
    -----------------------------------*/
    var isotopFilter = $('.isotop-filter');
    var isotopGrid = $('.isotop-grid');
    var isotopGridMasonry = $('.isotop-grid-masonry');
    var isotopGridItem = '.isotop-item';
    /*-- Images Loaded --*/
    isotopGrid.imagesLoaded(function () {
        /*-- Filter List --*/
        isotopFilter.on('click', 'button', function () {
            isotopFilter.find('button').removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-filter');
            isotopGrid.isotope({ filter: filterValue });
        });
        /*-- Filter Grid Layout FitRows --*/
        isotopGrid.isotope({
            itemSelector: isotopGridItem,
            layoutMode: 'fitRows',
            masonry: {
                columnWidth: 1,
            }
        });
        /*-- Filter Grid Layout Masonary --*/
        isotopGridMasonry.isotope({
            itemSelector: isotopGridItem,
            layoutMode: 'masonry',
            masonry: {
                columnWidth: 1,
            }
        });
    });

    /*-- Image --*/
    var imagePopup = $('.image-popup');
    imagePopup.magnificPopup({
        type: 'image',
    });

    $('iframe[src*="youtube"]').parent().fitVids();

    /*--------------------------
     ScrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="ion-arrow-up-c"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


})(jQuery);
