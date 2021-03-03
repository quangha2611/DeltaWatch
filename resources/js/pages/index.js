import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const INDEX = {
    init () {
        HEADER.init();
        BACKTOTOP.init();

        this.buildSlider();
        this.showModalProduct();
        this.closeModalProduct();
    },

    buildSlider() {
        var newProductList = new Swiper('.new-product_list', {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.new-product_slide-next',
                prevEl: '.new-product_slide-prev',
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },

                1365: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
            }

        });

        var watchForMan = new Swiper('.watch-for-man_list', {
            slidesPerView: 2,
            spaceBetween: 0,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.watch-for-man_slide-next',
                prevEl: '.watch-for-man_slide-prev',
            },

            breakpoints: {
                992: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
            }
        });

        var watchForWoman = new Swiper('.watch-for-woman_list', {
            slidesPerView: 2,
            spaceBetween: 0,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.watch-for-woman_slide-next',
                prevEl: '.watch-for-woman_slide-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
            }
        });

        var bestEquipment = new Swiper('.best-equipment_list', {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 5,
            navigation: {
                nextEl: '.best-equipment_slide-next',
                prevEl: '.best-equipment_slide-prev',
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
            }
        });
    },

    showModalProduct() {
        var swiper = new Swiper('.modal_thumbnail', {
            direction: 'vertical',
            slidesPerView: 4,
            spaceBetween: 5,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.modal_thumbnail_slide-next',
                prevEl: '.modal_thumbnail_slide-prev',
            },
        })

        var buttonToShowModalProduct = document.querySelectorAll('.animation3d i.fa-search-plus');
        for (var i=0; i<buttonToShowModalProduct.length; i++) {
            buttonToShowModalProduct[i].addEventListener('click', function () {
                document.querySelector('.modal-show-product').classList.add('modal-show-product-active');
                document.querySelector('.modal-main').addEventListener('click', function () {
                    event.stopPropagation();
                })
            });
        }
    },

    closeModalProduct() {
        document.querySelector('.modal-show-product').addEventListener('click', function () {
            this.classList.remove('modal-show-product-active');
        });

        $('.close-modal-product').click(function () {
            document.querySelector('.modal-show-product').classList.remove('modal-show-product-active');
        });
    }
}

$(window).on('load', function() {
    INDEX.init();
});
