<span><i class="fas fa-shopping-basket"></i> Giỏ hàng ({{ count($cartItems ?? []) }})</span>
<ul class="cart header_sub-menu">
    @foreach ($cartItems ?? [] as $item)
        <li class="cart_item">
            <div class="cart_item_image">
                <img src="{{ asset('images/products/product' . $item['image'] .'.jpg') }}" alt="" width="100%">
            </div>
            <div class="cart_item_info" data-price="{{ $item['price'] }}">
                <a href="#" class="name">{{ $item['name'] }}</a>
                <p class="price">{{ number_format($item['price']) }}</p>
                <div class="quantity">
                    <button type="button" class="increase_quantity">+</button>
                    <input type="number" value="{{ $item['quantity'] }}" class="count_quantity">
                    <button type="button" class="reduce_quantity">-</button>
                </div>
            </div>
            <i class="fas fa-times"></i>
        </li>
    @endforeach
    <a href="{{ route('get.cart.index') }}">
        <i class="fas fa-shopping-basket"></i>Tới giỏ hàng và thanh toán
    </a>
</ul>