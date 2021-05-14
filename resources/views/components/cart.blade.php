<span><i class="fas fa-shopping-basket"></i> Giỏ hàng ({{ count($cartItems ?? []) }})</span>
<ul class="cart header_sub-menu">
    @foreach ($cartItems ?? [] as $key => $item)
        <li class="cart_item">
            <div class="cart_item_image">
                <img src="{{ asset('storage/' . $item['image']) }}" alt="" width="100%">
            </div>
            <div class="cart_item_info" data-price="{{ $item['price'] }}">
                <a href="#" class="name">{{ $item['name'] }}</a>
                <p class="price">{{ number_format($item['price']) }}</p>
            </div>
            <i class="fas fa-times js-delete-from-cart" data-route="{{ route('get.cart.delete-from-cart', $key) }}" style="cursor: pointer"></i>
        </li>
    @endforeach
    <a href="{{ route('get.cart.index') }}">
        <i class="fas fa-shopping-basket"></i>Tới giỏ hàng và thanh toán
    </a>
</ul>