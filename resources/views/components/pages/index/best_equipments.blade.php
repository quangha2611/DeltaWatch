<div class="best-equipment">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Phụ kiện nổi bật</span>
                <span class="mini">  Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper-container best-equipment_list">
                <div class="swiper-wrapper">
                    @for ($i=0; $i<=10; $i++)
                        <div class="swiper-slide best-equipment_item">
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
                <!-- Add Arrows -->
                <div class="swiper-button-next best-equipment_slide-next">
                    <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                </div>
                <div class="swiper-button-prev best-equipment_slide-prev">
                    <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
