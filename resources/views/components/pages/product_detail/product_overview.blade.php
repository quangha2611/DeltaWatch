<div class="content_main container">
    <div class="row justify-content-between">
        <div class="content_main-left col-xl-5 col-lg-5 col-sm-12">
            <div class="row">
                <div class="big-pic">
                    <img class="big-pic-active"
                         src="{{ asset('storage/'. $product->po_image) }}" alt="" width="100%">
                    @foreach ($relatedProducts as $key => $productRelate)
                        @if ($key < 3 && $productRelate->id != $product->id)
                            <img src="{{ asset('storage/'. $productRelate->po_image) }}" alt="" width="100%">
                        @endif
                    @endforeach
                </div>
                <div class="thumbnail">
                    <img class="thumbnail-active"
                         src="{{ asset('storage/'. $product->po_image) }}" alt="" width="100%">
                    @foreach ($relatedProducts as $key => $productRelate)
                        @if ($key < 3 && $productRelate->id != $product->id)
                            <img src="{{ asset('storage/'. $productRelate->po_image) }}" alt="" width="100%">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="content_main-right col-xl-6 col-lg-6 col-sm-12 pr-0">
            <form method="post">
                <h1 class="title-product">{{ $product->po_name }}</h1>
                <p class="price-product">@php echo number_format($product->po_price, 0, '', '.') . 'đ'; @endphp</p>
                <p class="des-product">
                {{ $product->po_description }}
                <div class="option-quantity">
                    <div>
                        <button class="js-add-to-cart add-to-cart" style="margin-left: 0" data-item="{{ $product->id }}" data-route="{{ route('get.cart.add-to-cart') }}" type="button">
                            <i class="fas fa-shopping-basket"></i> Thêm vào giỏ hàng
                        </button>
                        <button class="buy-now">
                            <i class="fas fa-check"></i>
                            Mua ngay
                        </button>
                    </div>
                </div>
                <div class="free-discuss">
                    <h4>
                        <i class="fas fa-paper-plane"></i>&nbsp;Tư vấn miễn phí
                    </h4>
                    <div class="">
                        <input placeholder="Số điện thoại" type="text" class="form-control form-control-lg">
                        <button class="btn">Gửi ngay</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
