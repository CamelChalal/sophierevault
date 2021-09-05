document.addEventListener("DOMContentLoaded",
    function () {


        let open = document.querySelector('#open');
        let close = document.querySelector('#close');
        let menu = document.querySelector('#menu');

        open.addEventListener('click', function () {
            menu.classList.add('menuAppears')
        })

        close.addEventListener('click', function () {
            menu.classList.remove('menuAppears')
        })

        // Carousel slick Home actu

        $(document).ready(function () {
            $('.carousel_actu').slick({

                autoplay: true,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 9999,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });
        });

        // Carousel slick intro Paul Klee

        $(document).ready(function () {
            $('.carousel_intro').slick({

                autoplay: true,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 9900,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5
                        }
                    },

                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }

                ]

            });
        });

        // Carousel slick oeuvre Paul Klee

        $(document).ready(function () {
            $('.carousel_oeuvre').slick({

                autoplay: true,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },

                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });
        });

        // Carousel 1 slick le sacré



        // Carousel slick Home actu

        $(document).ready(function () {
            $('.carouselOeuvreSacre').slick({

                autoplay: true,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 9999,
                        settings: "unslick"
                    },
                    // {
                    //     breakpoint: 1025,
                    //     settings: {
                    //         slidesToShow: 3,
                    //         slidesToScroll: 3
                    //     }
                    // },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });
        });

        //carousel post
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            vertical: true,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
            focusOnSelect: true,
            verticalSwiping: true,
            infinite: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        vertical: false,
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        vertical: false,
                        slidesToShow: 2,
                        arrows: true,
                        infinite: true
                    }
                },
            ]

        });






        const loadmore = document.querySelector('#loadMore');
        let currentItems = 6;
        loadmore.addEventListener('click', (e) => {
            const elementList = [...document.querySelectorAll('.card_actu')];
            for (let i = currentItems; i < currentItems + 3; i++) {
                if (elementList[i]) {
                    elementList[i].style.display = 'block';
                }
            }
            currentItems += 3;

            // Load more button will be hidden after list fully loaded
            if (currentItems >= elementList.length) {
                event.target.style.display = 'none';
            }
        })




    })






