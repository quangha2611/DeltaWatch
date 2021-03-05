@extends('layouts.master')

@section('title', 'Sản phẩm Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/product.css') }}">
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="#">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Tất cả sản phẩm</a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="content_main mt-3">
            <div class="container">
                <div class="row">
                    <div class="open-main-left-mobile" style="display: none;">
                        <i class="fa fa-align-right"></i>
                    </div>

                    <div class="content_main-left col-xl-3 col-lg-3 col-sm-4">
                        <div class="list-category">
                            <div class="title">
                                Danh mục sản phẩm
                            </div>
                            <ul class="">
                                <li class="menu-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="menu-item has-drop-menu">
                                    <a href="#">Sản phẩm</a>
                                    <i class="fa fa-plus btn-show-drop-menu"></i>
                                    <i class="fa fa-minus btn-close-drop-menu"></i>

                                    <ul class="drop-menu menu-drop-1">
                                        <li class="menu-item has-drop-menu">
                                            <i class="fa fa-angle-right"></i>
                                            <a href="#">Trang chủ</a>
                                            <i class="fa fa-plus btn-show-drop-menu"></i>
                                            <i class="fa fa-minus btn-close-drop-menu"></i>

                                            <ul class="drop-menu menu-drop-2">
                                                <li class="menu-item">
                                                    <i class="fa fa-angle-right"></i>
                                                    <a href="#">Trang chủ</a>
                                                </li>
                                                <li class="menu-item">
                                                    <i class="fa fa-angle-right"></i>
                                                    <a href="#">Trang chur</a>
                                                </li>
                                            </ul>

                                        </li>

                                        <li class="menu-item">
                                            <i class="fa fa-angle-right"></i>
                                            <a href="#">Trang chur</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item has-drop-menu">
                                    <a href="#">SmartWatch</a>
                                    <i class="fa fa-plus btn-show-drop-menu"></i>
                                    <i class="fa fa-minus btn-close-drop-menu"></i>

                                    <ul class="drop-menu menu-drop-1">
                                        <li class="menu-item has-drop-menu">
                                            <i class="fa fa-angle-right"></i>
                                            <a href="#">Trang chủ</a>
                                            <i class="fa fa-plus btn-show-drop-menu"></i>
                                            <i class="fa fa-minus btn-close-drop-menu"></i>

                                            <ul class="drop-menu menu-drop-2">
                                                <li class="menu-item">
                                                    <i class="fa fa-angle-right"></i>
                                                    <a href="#">Trang chủ</a>
                                                </li>
                                                <li class="menu-item">
                                                    <i class="fa fa-angle-right"></i>
                                                    <a href="#">Trang chur</a>
                                                </li>
                                            </ul>

                                        </li>

                                        <li class="menu-item">
                                            <i class="fa fa-angle-right"></i>
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

                        <div class="filter-brand">
                            <div class="title">
                                Thương hiệu
                            </div>
                            <ul>
                                @for ($i=1; $i<=5; $i++)
                                    <li>
                                        <input type="checkbox" name="" id="{{ 'brand' . $i }}">
                                        <div class="fake-checkbox"></div>
                                        <label for="{{ 'brand' . $i }}">
                                            {{ 'Brand ' . $i }}
                                        </label>
                                    </li>
                                @endfor
                            </ul>
                        </div>

                        <div class="filter-shape">
                            <div class="title">
                                Kiểu dáng
                            </div>
                            <ul>
                                <li>
                                    <input type="checkbox" name="" id="shapeSmart">
                                    <div class="fake-checkbox"></div>
                                    <label for="shapeSmart">
                                        Smart Watch
                                    </label>
                                </li>
                                </u>
                        </div>

                        <div class="filter-color">
                            <div class="title">
                                Màu sắc
                            </div>
                            <ul>
                                <li>
                                    <div class="filter-color-yeallow" style="background-color: #F1C40F;"></div>
                                </li>

                                <li>
                                    <div class="filter-color-purple" style="background-color: #9B59B6;"></div>
                                </li>

                                <li>
                                    <div class="filter-color-red" style="background-color: #E74C3C;"></div>
                                </li>

                                <li>
                                    <div class="filter-color-green" style="background-color: #2ECC71;"></div>
                                </li>

                                <li>
                                    <div class="filter-color-pink" style="background-color: #FF00CC;"></div>
                                </li>

                                <li>
                                    <div class="filter-color-orange" style="background-color: #E67E22;"></div>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-size">
                            <div class="title">
                                Kích thước
                            </div>
                            <ul>
                                <li>
                                    <input type="checkbox" name="" id="size30mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size30mm">
                                        30mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size30mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size30mm">
                                        30mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size32mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size32mm">
                                        32mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size34mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size34mm">
                                        34mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size36mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size36mm">
                                        36mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size38mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size38mm">
                                        38mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size40mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size40mm">
                                        40mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size42mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size42mm">
                                        42mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size44mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size44mm">
                                        44mm
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="size46mm">
                                    <div class="fake-checkbox"></div>
                                    <label for="size46mm">
                                        46mm
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-price">
                            <div class="title">
                                Giá sản phẩm
                            </div>
                            <ul>
                                <li>
                                    <input type="checkbox" name="" id="priceUnder100">
                                    <div class="fake-checkbox"></div>
                                    <label for="priceUnder100">
                                        Giá dưới 100.000
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="priceUnder200">
                                    <div class="fake-checkbox"></div>
                                    <label for="priceUnder200">
                                        100.000 - 200.000
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="priceUnder300">
                                    <div class="fake-checkbox"></div>
                                    <label for="priceUnder300">
                                        200.000 - 300.000
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="priceUnder500">
                                    <div class="fake-checkbox"></div>
                                    <label for="priceUnder500">
                                        300.000 - 500.000
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="priceUnder1m">
                                    <div class="fake-checkbox"></div>
                                    <label for="priceUnder1m">
                                        500.000 - 1.000.000
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="" id="priceOver1m">
                                    <div class="fake-checkbox"></div>
                                    <label for="priceOver1m">
                                        Giá trên 1.000.000
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="content_main-right col-xl-9 col-lg-9">
                        <div class="ads row mb-3">
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <img src="{{ asset('images/banners/banner1_page_products.jpg') }}" alt="" width="100%">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <img src="{{ asset('images/banners/banner2_page_products.jpg') }}" alt="" width="100%">
                            </div>
                        </div>
                        <div class="sort row justify-content-between">
                            <div class="col-xl-8 col-lg-8 col-sm-8 col-12">
                                <h4 style="font-weight: normal;">Tất cả sản phẩm</h4>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-4 col-12">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    <p>Sắp xếp:</p>
                                    <div class="current-sort-option">
                                        Thứ tự
                                        <i class="fa fa-angle-down ml-2"></i>
                                        <ul>
                                            <li>
                                                <input type="radio" name="sort-option" id="sort-default">
                                                <label for="sort-default">Mặc định</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sort-option" id="sort-AZ">
                                                <label for="sort-AZ">A → Z</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sort-option" id="sort-ZA">
                                                <label for="sort-ZA">Z → A</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sort-option" id="sort-priceUp">
                                                <label for="sort-priceUp">Giá tăng dần</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sort-option" id="sort-priceDown">
                                                <label for="sort-priceDown">Giá giảm dần</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product">
                            @for ($i=1; $i<=15; $i++)
                                <div class="product_item">
                                <div class="item_image">
                                    <img src="{{ asset('images/products/product.jpg') }}" width="90%" alt="">
                                    <div class="item_image_mask">
                                        <div class="animation3d">
                                            <div>
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                            <div>
                                                <i class="fas fa-shopping-basket iconcart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('images/icons/options.png') }}" alt="" class="item_image_option">
                                </div>
                                <div class="item_info">
                                    <p class="item_info_name">Ten san pham</p>
                                    <p class="item_info_price">1.000.000₫</p>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <div class="pagination">
                        <div class="pagination-prev">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="page page-active">
                            1
                        </div>
                        <div class="page">
                            2
                        </div>
                        <div class="pagination-next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="ads-last mt-5" style="display: none;">
                        <div class="col-sm-6 pl-0">
                            <img src="{{ asset('images/banners/banner1_page_products.jpg') }}" alt="" width="100%">
                        </div>
                        <div class="col-sm-6 pr-0">
                            <img src="{{ asset('images/banners/banner2_page_products.jpg') }}" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.modal_show_product')
@endsection

@section('script')
    <script src="{{ asset('js/pages/product.js') }}"></script>
@endsection