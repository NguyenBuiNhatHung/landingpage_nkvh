<script>
    (function($) {
        "use strict";

        // Spinner
        var spinner = function() {
            setTimeout(function() {
                if ($('#spinner').length > 0) {
                    $('#spinner').removeClass('show');
                }
            }, 1);
        };
        spinner(0);


        // Initiate the wowjs
        new WOW().init();


        // Sticky Navbar
        $(window).scroll(function() {
            if ($(this).scrollTop() > 45) {
                $('.navbar').addClass('sticky-top shadow-sm');
            } else {
                $('.navbar').removeClass('sticky-top shadow-sm');
            }
        });
        $(document).ready(function() {
            $(".owl-dv").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

        // Hero Header carousel
        $(".header-carousel").owlCarousel({
            animateOut: 'slideOutDown',
            items: 1,
            autoplay: true,
            smartSpeed: 1000,
            dots: false,
            loop: true,
            nav: true,
            navText: [
                '<i class="bi bi-arrow-left"></i>',
                '<i class="bi bi-arrow-right"></i>'
            ],
        });


        // International carousel
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            items: 1,
            smartSpeed: 1500,
            dots: true,
            loop: true,
            margin: 25,
            nav: false,
            navText: [
                '<i class="bi bi-arrow-left"></i>',
                '<i class="bi bi-arrow-right"></i>'
            ]
        });


        // Modal Video
        $(document).ready(function() {
            var $videoSrc;
            $('.btn-play').click(function() {
                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);

            $('#videoModal').on('shown.bs.modal', function(e) {
                $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            })

            $('#videoModal').on('hide.bs.modal', function(e) {
                $("#video").attr('src', $videoSrc);
            })
        });
        $(document).ready(function() {
            $(".owl-vd").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<div class='nav-btn prev-slide'>&lt;</div>", "<div class='nav-btn next-slide'>&gt;</div>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });



        $(document).ready(function() {
            $(".owl-bs").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                smartSpeed: 1000,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });


        // testimonial carousel
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            center: true,
            dots: true,
            loop: true,
            margin: 25,
            nav: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
        var countDownDate = new Date();
        countDownDate.setDate(countDownDate.getDate() + 3); // 3 days from now 
        // Update the count down every 1 second 
        var countdownFunction = setInterval(function() {
                // Get today's date and time 
                var now = new Date().getTime();
                // Find the distance between now and the count down date 
                var distance = countDownDate - now; // Time calculations for days, hours, minutes and seconds 
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000); // Display the result in the elements with corresponding ids 
                document.getElementById("days").innerHTML = days + "<br><span>Ngày</span>";
                document.getElementById("hours").innerHTML = hours + "<br><span>Giờ</span>";
                document.getElementById("minutes").innerHTML = minutes + "<br><span>Phút</span>";
                document.getElementById("seconds").innerHTML = seconds + "<br><span>Giây</span>";
                // If the count down is finished, write some text 
                if (distance < 0) {
                    clearInterval(countdownFunction);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                }
            },
            1000);



        // Back to top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
        });


    })(jQuery);
</script>