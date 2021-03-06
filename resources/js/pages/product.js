import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const PRODUCT = {
    init() {
        HEADER.init();
        BACKTOTOP.init();

        this.showModalProduct();
        this.closeModalProduct();
        this.handleCheckboxSidebarLeft();
        this.openAndCloseDropDownMenu();
        this.openAndCloseDropDownMenuMobile();
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
                    PRODUCT.buildSliderModal();
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

    handleCheckboxSidebarLeft() {
        $('.content_main-left input[type="checkbox"]').change(function () {
            $(this).next().toggleClass('fake-checkbox-active');
        });

        $('.content_main-right input[type="checkbox"]').change(function () {
            $(this).next().toggleClass('fake-checkbox-active');
        });
    },

    openAndCloseDropDownMenu() {
        var buttonOpenDropMenus = document.querySelectorAll('.btn-show-drop-menu');
        var buttonCloseDropMenus = document.querySelectorAll('.btn-close-drop-menu');
        var dropMenus = document.querySelectorAll('ul.drop-menu');
        var hasDropMenus = document.querySelectorAll('.has-drop-menu');
        for (var i = 0; i < buttonOpenDropMenus.length; i++) {
            buttonOpenDropMenus[i].index = i;
            buttonCloseDropMenus[i].index = i;
            buttonOpenDropMenus[i].addEventListener('click', function () {
                this.style.display = "none";
                buttonCloseDropMenus[this.index].style.display = "block";
                dropMenus[this.index].classList.toggle('drop-menu-active');
                hasDropMenus[this.index].classList.toggle('has-drop-menu-active');
            });

            buttonCloseDropMenus[i].addEventListener('click', function () {
                this.style.display = "none";
                buttonOpenDropMenus[this.index].style.display = "block";
                dropMenus[this.index].classList.toggle('drop-menu-active');
                hasDropMenus[this.index].classList.toggle('has-drop-menu-active');
            });
        }
    },

    openAndCloseDropDownMenuMobile() {
        // Menu filter side bar
        var buttonOpenContentMainLeft = document.querySelector('.open-main-left-mobile');
        buttonOpenContentMainLeft.addEventListener('click', function () {
            this.classList.toggle('open-main-left-mobile-active');
            document.querySelector('.content_main-left').classList.toggle('content_main-left-active');
        })
    },
}

$(window).on('load', function () {
    PRODUCT.init();
})