<div class="container">
    <div class="row">
        <h4>GIỎ HÀNG CỦA BẠN</h4>
        <ul class="cart_list border p-0">
            @for ($i=1; $i<=5; $i++)
                <li class="cart_item border-top p-3" style="margin-bottom: 5px" data-price="">
                    <div class="item_image">
                        <img src="{{ asset('images/products/product.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="item_info">
                        <div>
                            <a a href="{{ route('get.product.show') }} class="name">Samsung Gear Pro</a>
                            <p class="price">4.500.000₫</p>
                        </div>
                    </div>
                    <div class="item_quantity">
                        <div class="quantity">
                            <button type="button" class="reduce-product">
                                <i class="fas fa-minus-circle"></i>
                            </button>
                            <input type="number" name="quantity" class="product-quantity" value="1">
                            <button type="button" class="more-product">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item_total-price">
                        <p class="price">4.500.000₫</p>
                    </div>
                    <div class="item_cancel">
                        <i class="fa fa-times"></i>
                    </div>
                </li>
            @endfor
        </ul>
    </div>
</div>
