<!-- HEADER -->
<div class="header">
    <div class="container">
        <div class="row justify-content-between">

            <div class="header_contact">
                <div class="account">
                    <span><i class="far fa-user-circle"></i>&nbsp;{{ Auth::guard('customer')->check() ? Auth::guard('customer')->user()->name : 'Tài khoản' }}</span>
                    <ul class="header_sub-menu">
                        @if (!Auth::guard('customer')->check())
                            <li><a href="{{ route('get.login.index') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('get.sign-up.index') }}">Đăng ký</a></li>
                        @else
                            <li><a href="">Đăng xuất</a></li>
                        @endif
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
                    <li id="cart">
                        @include('components.cart')
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