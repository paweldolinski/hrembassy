(function ($) {
    $(document).ready(function () {

        jQuery('.conf-header-mobile__burger').on("click", function () {
            jQuery('.conf-header-mobile__bottom').toggleClass('conf-header-mobile__bottom--active')
            jQuery('.conf-header-mobile').toggleClass('conf-header-mobile--active')
        })

        const daysWrapper = document.querySelector('.conf-top__counting-down-day');
        hoursWrapper = document.querySelector('.conf-top__counting-down-hour');
        minWrapper = document.querySelector('.conf-top__counting-down-min');
        secWrapper = document.querySelector('.conf-top__counting-down-sec');

        let countDownDate = new Date("Feb 27, 2020 09:00:00").getTime();

        if (daysWrapper) {

            setInterval(function () {

                let now = new Date().getTime();

                let distance = countDownDate - now;


                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                daysWrapper.innerHTML = days
                hoursWrapper.innerHTML = hours
                minWrapper.innerHTML = minutes
                secWrapper.innerHTML = seconds

            }, 1000)
        }

        function prelegenci() {
            $('[data-slider="prelegenci"]').slick({
                prevArrow: '[data-slider="prelegenciPrev"]',
                nextArrow: '[data-slider="prelegenciNext"]',
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 568,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        }

        if (jQuery('#trigger')) {
            var controller = new ScrollMagic.Controller();
            new ScrollMagic.Scene({ triggerElement: "#trigger" })
                .setClassToggle(".conf-header", "conf-header--fixed")
                .addTo(controller);
        }

        prelegenci();
    })
}(jQuery));