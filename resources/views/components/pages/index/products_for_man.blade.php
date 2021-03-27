<div class="watch-for-man">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Đồng hồ cho nam</span>
                <span class="mini">
                            Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập
                            </span>
            </h2>
        </div>
        <div class="row mt-5">
            <div class="col-xl-8 col-lg-8 col-sm-7 pl-0 pr-0">
                <div class="swiper-container watch-for-man_list">
                    <div class="swiper-wrapper">
                        @foreach ($manProducts as $product)
                            <div class="swiper-slide watch-for-man_item">
                            <div class="item_image">
                                <img src="{{ asset('storage/' . $product->po_image) }}" width="100%" alt="">
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
                            </div>
                            <div class="item_info">
                                <a href="{{ route('get.product.show', $product->id) }}" class="item_info_name">{{ $product->po_name }}</a>
                                <p class="item_info_price">@php echo number_format($product->po_price, 0, '', '.') . 'đ'; @endphp</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next watch-for-man_slide-next">
                        <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                    </div>
                    <div class="swiper-button-prev watch-for-man_slide-prev">
                        <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-5 pl-0 pr-0" style="overflow: hidden;">
                <img src="{{ asset('images/banners/products_for_man.jpg') }}" alt="" class="watch-for-man_banner">
            </div>
        </div>
    </div>
</div>
