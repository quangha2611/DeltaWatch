import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const INDEX = {
    init() {
        HEADER.init();
        BACKTOTOP.init();

        this.showModalProduct();
        this.closeModalProduct();
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
        for (var i = 0; i < buttonToShowModalProduct.length; i++) {
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

}

$(window).on('load', function () {
    INDEX.init();
});
