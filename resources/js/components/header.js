const HEADER = {
    init() {
        this.showMobileMenu();
        this.renderButtonInMobileMenu();
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
    }

}

export default HEADER