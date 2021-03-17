import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const INDEX = {
    init () {
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
    },
    // getAjaxBrands() {
    //     document.querySelectorAll('.brand_item').addEventListener('click', function () {
    //         $.ajax({
    //             url: 'http://127.0.0.1:8000/ajax/brands',
    //             error: function() {
    //                 console.log('error');
    //             },
    //             success: function(data) {
    //                 $(".list-brand").append(
    //
    //                 );
    //
    //             },
    //             type: 'GET'
    //         });
    //     });
    // },

    getAjaxBrands() {
        var brands = document.querySelectorAll('.brand_item');
        brands.forEach( function (brand) {
            brand.addEventListener('click', function () {
                var brandId = brand.getAttribute('value');
                $.ajax({
                    url: 'http://127.0.0.1:8000/ajax/brand/' + brandId,
                    error: function() {
                        console.log('error');
                    },
                    success: function(data) {
                        $(".list-product-by-brand > div").remove();
                        data.products.forEach(function (product) {
                            var string = "";
                            string += "<div class=\"new-product_item\">\n" +
                                "                <div class=\"item_image\">\n" +
                                "                    <img src=\"images/products/product" + product.id + ".jpg\" width=\"90%\" alt=\"\">\n" +
                                "                    <div class=\"item_image_mask\">\n" +
                                "                        <div class=\"animation3d\">\n" +
                                "                            <div>\n" +
                                "                                <i class=\"fas fa-search-plus\"></i>\n" +
                                "                            </div>\n" +
                                "                            <div>\n" +
                                "                                <i class=\"fas fa-shopping-basket iconcart\"></i>\n" +
                                "                            </div>\n" +
                                "                        </div>\n" +
                                "                    </div>\n" +
                                "                    <img src=\"images/icons/options.png\" alt=\"\" class=\"item_image_option\">\n" +
                                "                </div>\n" +
                                "                <div class=\"item_info\">\n" +
                                "                    <a href=\"{{ route('get.product.show'," + product.id + ") }}\" class=\"item_info_name\">" + product.po_name + "</a>\n" +
                                "                    <p class=\"item_info_price\">" + product.po_price.toLocaleString('vi-VN') + "₫</p>\n" +
                                "                </div>\n" +
                                "                </div>"
                            $(".list-product-by-brand").append(string);
                        });
                    },
                    type: 'GET'
                });
            })
        });
    },

}

$(window).on('load', function() {
    INDEX.init();
});
