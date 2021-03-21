<div class="product-by-brand">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Sản phẩm theo hãng</span>
                <span class="mini"> Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
        <div class="list-brand row">
            @foreach ($brands as $key => $brand)
                <div class="brand_item @php if($brand->id == 1) echo('active') @endphp" data-route="{{ route('get.ajax.brand', $brand->id )}}">
                    <div class="brand_item_image">
                        <img src="{{ asset('storage/' . $brand->br_logo) }}" alt="" class="animation3d">
                    </div>
                    <div class="brand_item_name">
                        <p>{{ $brand->br_name }} Watch</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="list-product-by-brand row" >
            @foreach ($appleWatchProducts as $product)
                <div class="new-product_item">
                    <div class="item_image">
                        <img src="{{ asset('storage/' . $product->po_image) }}" width="90%" alt="">
                        <div class="item_image_mask">
                            <div class="animation3d">
                                <div>
                                    <i class="fas fa-search-plus" data-route="{{ route('get.ajax.product', $product->id) }}"></i>
                                </div>
                                <div class="js-add-to-cart">
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
        </div>
    </div>
</div>
