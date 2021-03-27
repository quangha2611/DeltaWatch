import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const INDEX = {
    init() {
        HEADER.init();
        BACKTOTOP.init();

        this.showModalProduct();
        this.closeModalProduct();
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
        $('.content').on('click', '.animation3d i.fa-search-plus' ,function () {
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
