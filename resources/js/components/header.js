import ADD_TO_CART from './add_to_cart'
const HEADER = {
    init() {
        ADD_TO_CART.init();
        this.showMobileMenu();
        this.renderButtonInMobileMenu();
        this.updateCart();
    },

    showMobileMenu() {
        $('#show_mobile_menu').click(function () {
            var mobileMenu = document.querySelector('.header-mobile_menu');
            var mask = document.querySelector('.mask');
            mobileMenu.classList.add('header-mobile_menu-active');
            mask.style.zIndex = 99;
            mask.style.opacity = 1;
            mask.addEventListener('click', function () {
                mobileMenu.classList.remove('header-mobile_menu-active');
                mask.style.zIndex = -1;
                mask.style.opacity = 0;
            })
        })
    },

    renderButtonInMobileMenu() {
        var buttonShowSubMenus  = document.querySelectorAll('.header-mobile_menu .btn-show-sub-menu');
        var buttonCloseSubMenus = document.querySelectorAll('.header-mobile_menu .btn-close-sub-menu');
        var subMenus            = document.querySelectorAll('.header-mobile_menu .sub-menu');
        var itemHasSubMenus     = document.querySelectorAll('.header-mobile_menu .has-sub-menu');
        for (var i=0; i<buttonShowSubMenus.length; i++) {
            buttonShowSubMenus[i].index = i;
            buttonCloseSubMenus[i].index = i;

            buttonShowSubMenus[i].addEventListener('click', function () {
                this.style.display = "none";
                buttonCloseSubMenus[this.index].style.display = "block";
                subMenus[this.index].classList.add('sub-menu-active');
                itemHasSubMenus[this.index].classList.add('has-sub-menu-active');
            })

            buttonCloseSubMenus[i].addEventListener('click', function () {
                this.style.display = "none";
                buttonShowSubMenus[this.index].style.display = "block";
                subMenus[this.index].classList.remove('sub-menu-active');
                itemHasSubMenus[this.index].classList.remove('has-sub-menu-active');
            })
        }
    },

    updateCart()
    {
        $('.cart_item_info').on('click', '.increase_quantity', function () {
           var price = $(this).parents('.cart_item_info').data('price');
           var old_quantity = $(this).parents('.quantity').find('.count_quantity').val();
            $(this).parents('.quantity').find('.count_quantity').val( parseInt(old_quantity) + 1);
            var total_money = price * (parseInt(old_quantity) + 1);
            $(this).parents('.cart_item').find('.price').text( Intl.NumberFormat('de-DE').format(total_money) );
        });

        $('.cart_item_info').on('click', '.reduce_quantity', function () {
            var price = $(this).parents('.cart_item_info').data('price');
            var old_quantity = $(this).parents('.quantity').find('.count_quantity').val();
            if (old_quantity == 1) {
                $(this).parents('.cart_item').remove();
            } else {
                $(this).parents('.quantity').find('.count_quantity').val( parseInt(old_quantity) - 1);
                var total_money = price * (parseInt(old_quantity) - 1);
                $(this).parents('.cart_item').find('.price').text( Intl.NumberFormat('de-DE').format(total_money) );
            }
        });
    }

}

export default HEADER