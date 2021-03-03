<!-- HEADER -->
<div class="header">
    <div class="container">
        <div class="row justify-content-between">

            <div class="header_contact">
                <div class="account">
                    <span><i class="far fa-user-circle"></i>&nbsp;Tài khoản</span>
                    <ul class="header_sub-menu">
                        <li><a href="#">Đăng nhập</a></li>
                        <li><a href="#">Đăng ký</a></li>
                    </ul>
                </div>
                <div class="call">
                    <a href="#"><i class="fas fa-sms"></i>&nbsp;Chat</a>
                    <span>or</span>
                    <a class="fone" href="#">Call 0388287614</a>
                </div>
            </div>

            <div class="header_logo">
                <a href="#">
                    <img src="{{ asset('images/logos/logo.png') }}" alt="" width="100%">
                </a>
            </div>

            <div class="header_search">
                <ul>
                    <li>
                        <form>
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <button type="submit"><i class="fa fa-search"></i> </button>
                        </form>
                        <span><i class="fa fa-search"></i> Tìm kiếm</span>
                    </li>
                    <span style="font-weight: normal; color: #ebebeb; font-size: 18px; margin-top: -5px;">|</span>
                    <li>
                        <span><i class="fas fa-shopping-basket"></i> Giỏ hàng (0)</span>
                        <ul class="cart header_sub-menu">
                            @for ($i=1; $i<=3; $i++)
                                <li class="cart_item">
                                <div class="cart_item_image">
                                    <img src="{{ asset('images/products/product.jpg') }}" alt="" width="100%">
                                </div>
                                <div class="cart_item_info">
                                    <a href="#" class="name">Samsung Gear Pro</a>
                                    <p class="price">4.500.000₫</p>
                                    <div class="quantity">
                                        <button type="button" onclick="if (document.getElementById('quantity1').value < 100 ) { document.getElementById('quantity1').value = parseInt(document.getElementById('quantity1').value) + 1 }">
                                            +
                                        </button>
                                        <input type="number" value="1" id="quantity1">
                                        <button type="button" onclick="if (document.getElementById('quantity1').value > 1 ) { document.getElementById('quantity1').value = parseInt(document.getElementById('quantity1').value) - 1 }">
                                            -
                                        </button>
                                    </div>
                                </div>
                                <i class="fas fa-times"></i>
                            </li>
                            @endfor
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>Tới giỏ hàng và thanh toán
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="header-mobile">
    <div class="container">
        <div class="header-mobile_top row align-items-center pt-1 pb-1">
            <i class="fas fa-bars" id="show_mobile_menu"></i>
            <div class="logo">
                <img src="{{ asset('images/logos/logo.png') }}" alt="" width="100%">
            </div>
        </div>
        <div class="header-mobile_search row justify-content-between pt-2 pb-2">
            <div class="search">
                    <span class="iconsearch">
                        <i class="fa fa-search"></i>
                        Tìm kiếm
                    </span>
            </div>
            <form>
                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                <button type="submit"><i class="fa fa-search"></i> </button>
            </form>
            <div class="icon_hotline">
                <i class="fas fa-shopping-basket iconcart"></i>
                <span>Giỏ hàng (0)</span>
            </div>
        </div>
    </div>
    <div class="header-mobile_menu">
        <div style="padding: 0 2rem; margin-bottom: 1rem;">
            <a href="#">Đăng nhập</a>
            <span>/</span>
            <a href="#">Đăng ký</a>
        </div>
        <div class="header-mobile_menu-main">
            <ul class="">
                <li class="menu-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="menu-item has-sub-menu">
                    <a href="#">Sản phẩm</a>
                    <i class="fa fa-plus btn-show-sub-menu"></i>
                    <i class="fa fa-minus btn-close-sub-menu"></i>

                    <ul class="sub-menu menu-sub-1">
                        <li class="menu-item has-sub-menu">
                            <a href="#">Trang chủ</a>
                            <i class="fa fa-plus btn-show-sub-menu"></i>
                            <i class="fa fa-minus btn-close-sub-menu"></i>

                            <ul class="sub-menu menu-sub-2">
                                <li class="menu-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="menu-item"><a href="#">Trang chur</a></li>
                            </ul>

                        </li>

                        <li class="menu-item">
                            <a href="#">Trang chur</a>
                        </li>
                    </ul>

                </li>
                <li class="menu-item has-sub-menu">
                    <a href="#">SmartWatch</a>
                    <i class="fa fa-plus btn-show-sub-menu"></i>
                    <i class="fa fa-minus btn-close-sub-menu"></i>

                    <ul class="sub-menu menu-sub-1">
                        <li class="menu-item has-sub-menu">
                            <a href="#">Trang chủ</a>
                            <i class="fa fa-plus btn-show-sub-menu"></i>
                            <i class="fa fa-minus btn-close-sub-menu"></i>

                            <ul class="sub-menu menu-sub-2">
                                <li class="menu-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="menu-item"><a href="#">Trang chur</a></li>
                            </ul>

                        </li>

                        <li class="menu-item">
                            <a href="#">Trang chur</a>
                        </li>
                    </ul>

                </li>
                <li class="menu-item">
                    <a href="#">Tin tức</a>
                </li>
                <li class="menu-item">
                    <a href="#">Về chúng tôi</a>
                </li>
                <li class="menu-item">
                    <a href="#">Địa chỉ cửa hàng</a>
                </li>
            </ul>
        </div>

    </div>
</div>