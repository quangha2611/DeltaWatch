<div class="best-equipment">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Sản phẩm nổi bật</span>
                <span class="mini">  Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper-container best-equipment_list">
                <div class="swiper-wrapper">
                    @foreach ($bestProducts as $product)
                        <div class="swiper-slide best-equipment_item">
                        <div class="item_image">
                            <img src="{{ asset('images/products/product' . $product->po_image . '.jpg') }}" width="90%" alt="">
                            <div class="item_image_mask">
                                <div class="animation3d">
                                    <div>
                                        <i class="fas fa-search-plus" data-route="{{ route('get.ajax.product', $product->id) }}"></i>
                                    </div>
                                    <div class="js-add-to-cart" data-item="{{ $product->id }}" data-route="{{ route('get.cart.add-to-cart') }}">
                                        <i class="fas fa-shopping-basket iconcart"></i>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('images/icons/options.png') }}" alt="" class="item_image_option">
                        </div>
                        <div class="item_info">
                            <a href="{{ route('get.product.show', $product->id) }}" class="item_info_name">{{ $product->po_name }}</a>
                            <p class="item_info_price">@php echo number_format($product->po_price, 0, '', '.') . 'đ'; @endphp</p>
                        </div>
                    </div>
                    @endforeach
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
