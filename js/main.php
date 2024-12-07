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

        var popup = document.getElementById("myPopup");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            popup.style.display = "block";
        }
        span.onclick = function() {
            popup.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
        window.onload = function() {
            setTimeout(function() {
                btn.click();
            }, 10000); // Hiển thị popup sau 10 giây   
        }


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
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 4
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
                smartSpeed: 1500,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 2
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
        // Initialize the countdown timer
        var countDownDate = new Date().getTime() + (7 * 60 * 60 * 1000) + (15 * 60 * 1000); // 7 hours and 15 minutes

        // Update the countdown every 1 second
        var countdownFunction = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = hours + "h " +
                minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").innerHTML = "ĐÃ HẾT THỜI GIAN";
            }
        }, 1000);



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
        countDownDate.setHours(countDownDate.getHours() + 7);
        countDownDate.setMinutes(countDownDate.getMinutes() + 15);

        var countdownFunction = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("hours").innerHTML = hours + "<br><span>Hours</span>";
            document.getElementById("minutes").innerHTML = minutes + "<br><span>Mins</span>";
            document.getElementById("seconds").innerHTML = seconds + "<br><span>Secs</span>";

            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
        var countDownDate = new Date();
        countDownDate.setHours(countDownDate.getHours() + 7);
        countDownDate.setMinutes(countDownDate.getMinutes() + 15);

        var countdownFunction = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("gio").innerHTML = hours + "<br><span>Giờ</span>";
            document.getElementById("phut").innerHTML = minutes + "<br><span>Phút</span>";
            document.getElementById("giay").innerHTML = seconds + "<br><span>Giây</span>";

            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);

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