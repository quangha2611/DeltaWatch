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
                    @foreach ($categories as $category)
                        <li class="menu-item has-drop-menu">
                            <i class="fa fa-angle-right"></i>
                            <a href="#">{{ $category->name }}</a>
                            <i class="fa fa-plus btn-show-drop-menu"></i>
                            <i class="fa fa-minus btn-close-drop-menu"></i>

                            <ul class="drop-menu menu-drop-2">
                                @foreach ($category->subCats as $subCat)
                                    <li class="menu-item">
                                        <i class="fa fa-angle-right"></i>
                                        <a href="#">{{ $subCat->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>

            </li>
            <li class="menu-item has-drop-menu">
                <a href="#">SmartWatch</a>
                <i class="fa fa-plus btn-show-drop-menu"></i>
                <i class="fa fa-minus btn-close-drop-menu"></i>

                <ul class="drop-menu menu-drop-1">
                    @foreach ($brands as $brand)
                        <li class="menu-item has-drop-menu">
                            <i class="fa fa-angle-right"></i>
                            <a href="#">{{ $brand->br_name }}</a>
                            <i class="fa fa-plus btn-show-drop-menu"></i>
                            <i class="fa fa-minus btn-close-drop-menu"></i>

                            <ul class="drop-menu menu-drop-2">
                                @foreach ($brand->products as $product)
                                    <li class="menu-item">
                                        <i class="fa fa-angle-right"></i>
                                        <a href="#">{{ $product->po_name  }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </li>
                    @endforeach

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
            @foreach ($brands as $brand)
                <li>
                    <input type="checkbox" name="" id="{{ 'brand' . $brand->id }}">
                    <div class="fake-checkbox"></div>
                    <label for="{{ 'brand' . $brand->id }}">
                        {{ $brand->br_name }}
                    </label>
                </li>
            @endforeach
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
