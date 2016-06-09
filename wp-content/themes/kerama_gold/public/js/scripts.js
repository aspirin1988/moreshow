$(document).ready(function(){


    //НАЧАЛО вертикальная карусель для страницы продукции:
    //берём карусель и считаем количество элементов в ней
    var slickCarousel = document.getElementsByClassName("slick-carousel");
    if (slickCarousel.length > 0) {
        var carouselItemsCount = slickCarousel[0].getElementsByClassName("product-item").length;
        console.log(carouselItemsCount);
        //карусель включается, только если количество элементов в ней больше 5:
        if (carouselItemsCount > 5) {
            $('.slick-carousel').slick({
                vertical: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                verticalSwiping: true,
                prevArrow: '<i class="uk-icon-large uk-icon-chevron-up slick-prev"></i>',
                nextArrow: '<i class="uk-icon-large uk-icon-chevron-down slick-prev"></i>',
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        }
    }
    //КОНЕЦ вертикальная карусель для страницы продукции

    //НАЧАЛО код запуска 3d-слайдера
    var threeDCarousel = document.getElementsByClassName("three-d-slider");
    if (threeDCarousel.length > 0) {
        $('#carousel').carousel3d();
    }
    //КОНЕЦ код запуска 3d-слайдера

});