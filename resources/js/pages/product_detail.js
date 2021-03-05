import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";
import '@zeitiger/elevatezoom';

const PRODUCT_DETAIL = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
        this.zoomImage();
        this.buildSlider();
        this.clickThumnailImage();

    },
    zoomImage() {
        // zoom image
        if (window.screen.width > 992) {
            $(".big-pic-active").elevateZoom({
                zoomWindowWidth: 250,
                zoomWindowHeight: 250
            });
        }
    },

    clickThumnailImage() {
        var bigPics = document.querySelectorAll(".big-pic img");
        var thumbnails = document.querySelectorAll(
            ".thumbnail img"
        );
        for (var i = 0; i < thumbnails.length; i++) {
            thumbnails[i].index = i;
            thumbnails[i].addEventListener("click", function() {
                for (var i = 0; i < thumbnails.length; i++) {
                    thumbnails[i].classList.remove(
                        "thumbnail-active"
                    );
                    bigPics[i].classList.remove("big-pic-active");
                }
                bigPics[this.index].classList.add("big-pic-active");
                if (window.screen.width > 992) {
                    $(".big-pic-active").elevateZoom({
                        zoomWindowWidth: 250,
                        zoomWindowHeight: 250
                    });
                }
                this.classList.add("thumbnail-active");
            });
        }
    },
    buildSlider() {
        var newProductList = new Swiper(".relate-product_list", {
            slidesPerView: 2,
            spaceBetween: 10,
            slidesPerGroup: 2,
            navigation: {
                nextEl: ".relate-product_slide-next",
                prevEl: ".relate-product_slide-prev"
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                // 1024: {
                //     slidesPerView: 4,
                //     spaceBetween: 15,
                // },
                // 1200: {
                //     slidesPerView: 5,
                //     spaceBetween: 15,
                // },

                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
    }

};

$(window).on("load", function() {
    PRODUCT_DETAIL.init();
});
