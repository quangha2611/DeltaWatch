@foreach($products as $product)
    <div class="new-product_item">
        <div class="item_image">
            <img src="{{ asset('storage/' . $product->po_image) }}" width="90%" alt="">
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
            <a href="{{ route('get.product.show', 1) }}" class="item_info_name">{{ $product->po_name }}</a>
            <p class="item_info_price">@php echo number_format($product->po_price, 0, '', '.') . 'đ'; @endphp₫</p>
        </div>
    </div>
@endforeach