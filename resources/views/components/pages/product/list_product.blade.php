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
                            <a for="sort-default">Mặc định</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-AZ">
                            <a for="sort-AZ">A → Z</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-ZA">
                            <a for="sort-ZA">Z → A</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-priceUp">
                            <a for="sort-priceUp">Giá tăng dần</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-priceDown">
                            <a for="sort-priceDown">Giá giảm dần</a>
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
                    <a href="{{ route('get.product.show') }}" class="item_info_name">Ten san pham</a>
                    <p class="item_info_price">1.000.000₫</p>
                </div>
            </div>
        @endfor
    </div>
</div>
