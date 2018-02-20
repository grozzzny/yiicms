(function() {

    "use strict";

    var Core = {

        initialized: false,

        initialize: function() {

            if (this.initialized) return;
            this.initialized = true;

            this.build();

        },

        build: function() {

            this.sliders.main.init();

            this.sliders.partners.init();

            this.initScrollReveal();

            this.wowInit();
        },

        wowInit: function () {
            /************************
             - WOW animation -
             ************************/
            jQuery(document).ready(function() {
                new WOW().init();
            });
        },

        initScrollReveal: function () {
            /************************
             - Scroll reveal -
             ************************/
            window.sr = new scrollReveal({
                reset:true,
                move:"10px",
                mobile:false
            });
        },


        sliders: {
            partners: {
                init: function () {
                    $('.slider-partners.owl-carousel').owlCarousel({
                        singleItem: false,
                        loop: true,
                        margin: 30,
                        autoWidth: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        dots: true,
                        responsive: {
                            0: {
                                items: 2,
                                nav: false
                            },
                            600: {
                                items: 4
                            },
                            1000: {
                                items: 8
                            }
                        }
                    });
                }
            },
            main: {
                init: function () {
                    $('.main-slider.owl-carousel').owlCarousel({
                        singleItem: false,
                        loop: true,
                        items: 1,
                        margin: 0,
                        autoplay: true,
                        autoplayTimeout: 8000,
                        dots: false,
                        animateOut : "owl-fadeUp-out",
                        //animateIn : "owl-fadeUp-in",
                        nav: true,
                        navText: ['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>']
                    });
                }
            },
        }
    };

    $(window).ready(function () {
        Core.initialize();
    });

})();