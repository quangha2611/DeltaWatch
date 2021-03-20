import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const INDEX = {
    init() {
        HEADER.init();
        BACKTOTOP.init();

        this.buildSlider();
        this.showModalProduct();
        this.closeModalProduct();
        this.getAjaxBrands();
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

    buildSliderModal() {
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
    },

    showModalProduct() {
        $('.animation3d i.fa-search-plus').click(function () {
            $.ajax({
                url: $(this).data('route'),
                error: function () {
                    console.log('error');
                },
                success: function (data) {
                    let dataMain = $(data).find('.modal-main');
                    $(".modal-show-product").html(dataMain);
                    INDEX.buildSliderModal();
                },
                type: 'GET'
            });
            $('.modal-show-product').on('click', '.modal-main', function (event) {
                event.stopPropagation();
            });
            $('.modal-show-product').addClass('modal-show-product-active');
        });
    },

    closeModalProduct() {
        $('.modal-show-product').click(function () {
            $(this).removeClass('modal-show-product-active');
        });

        $('.modal-show-product').on('click', '.close-modal-product', function () {
            $('.modal-show-product').removeClass('modal-show-product-active');
        })
    },

    getAjaxBrands() {
        var brands = document.querySelectorAll('.brand_item');
        brands.forEach(function (brand) {
            brand.addEventListener('click', function () {
                var route = $(this).data('route');
                brands.forEach(function (brand) {
                    $(brand).removeClass('active');
                });
                $(brand).toggleClass('active');
                $.ajax({
                    url: $(this).data('route'),
                    error: function () {
                        console.log('error');
                    },
                    success: function (data) {
                        $(".list-product-by-brand > div").remove();
                        $(".list-product-by-brand").html(data);
                    },
                    type: 'GET'
                });
            })
        });
    },

}

$(window).on('load', function () {
    INDEX.init();
});
