<div class="container">
    <div class="row">
        <h4>GIỎ HÀNG CỦA BẠN</h4>
        <ul class="cart_list">
            <li class="cart_item">
                <div class="item_image">
                    <img src="/images/content/cart/product1.jpg" alt="" width="100%">
                </div>
                <div class="item_info">
                    <div>
                        <a href="#" class="name">Samsung Gear Pro</a>
                        <p class="price">4.500.000₫</p>
                    </div>
                </div>
                <div class="item_quantity">
                    <div class="quantity">
                        <button type="button"
                            onclick="if (document.getElementById('quantity').value > 1 ) {
                                    document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) - 1 }">
                            <i class="fas fa-minus-circle"></i>
                        </button>
                        <input type="number" name="quantity" id="quantity" value="1">
                        <button type="button"
                            onclick="if (document.getElementById('quantity').value < 100 ) {
                                                document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) + 1 }"><i
                                class="fas fa-plus-circle"></i></button>
                    </div>
                </div>
                <div class="item_total-price">
                    <p class="price">4.500.000₫</p>
                </div>
                <div class="item_cancel">
                    <i class="fa fa-times"></i>
                </div>

            </li>
        </ul>
    </div>
</div>
