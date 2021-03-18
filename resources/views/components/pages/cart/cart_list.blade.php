<div class="container">
    <div class="row">
        <h4>GIỎ HÀNG CỦA BẠN</h4>
        <ul class="cart_list border p-0">
            @for ($i=1; $i<=5; $i++)
                <li class="cart_item border-top p-3" style="margin-bottom: 5px" data-price="4500000">
                    <div class="item_image">
                        <img src="{{ asset('images/products/product0.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="item_info">
                        <div>
                            <a a href="{{ route('get.product.show', 1) }} class="name">Samsung Gear Pro</a>
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
                    <div class="item_cancel" style="cursor:pointer;">
                        <i class="fa fa-times"></i>
                    </div>
                </li>
            @endfor
        </ul>
        <div style="display: flex; width: 50%; justify-content: space-between" class="col-6 offset-6">
            <h3>Tổng tiền</h3>
            <h3 style="color: #f61900" id="total-money-cart">4.500.000₫</h3>
        </div>
        <div class="col-6 offset-6 mt-3 d-flex justify-content-between">
            <a href="{{ route('get.home.index') }}" class="btn btn-lg btn-primary" style="background-color: #f61900; border: none">
                <i class="fas fa-reply" style="color: #fff"></i> Quay lại tiếp tục mua hàng
            </a>
            <button href="{{ route('get.home.index') }}" class="btn btn-lg btn-primary">
                <i class="fas fa-reply" style="color: #fff"></i> Quay lại tiếp tục mua hàng
            </button>
        </div>
    </div>
</div>
