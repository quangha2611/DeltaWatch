<!-- MODAL -->
<div class="modal-show-product">
    <div class="modal-main row">
        <div class="modal_big-pic">
            <img src="{{ asset('images/products/product0.jpg') }}" alt="" width="100%">
        </div>
        <div class="modal_thumbnail swiper-container">
            <div class="swiper-wrapper">
                @for($i=1; $i<=8; $i++)
                    <div class="swiper-slide modal_thumbnail_item">
                        <img src="{{ asset('images/products/product0.jpg') }}" alt="" width="100%">
                    </div>
                @endfor
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next modal_thumbnail_slide-next">
                <img src="{{ asset('images/icons/arrow.png') }}" alt="">
            </div>
            <div class="swiper-button-prev modal_thumbnail_slide-prev">
                <img src="{{ asset('images/icons/arrow.png') }}" alt="">
            </div>
        </div>
        <div class="modal_option">
            <form method="post">
                <h1 class="title-product">Samsung Gear Fit</h1>
                <p class="price-product">4.990.000₫</p>
                <div class="option-size">
                    <h4>Kích Thước:</h4>
                    <input type="radio" name="size" id="size42mm" checked>
                    <label for="size42mm">42mm</label>
                    <input type="radio" name="size" id="size44mm">
                    <label for="size44mm">44mm</label>
                </div>
                <div class="option-color">
                    <h4>Màu sắc:</h4>
                    <input type="radio" name="size" id="colorBlack">
                    <label for="colorBlack" style="background-color: black;">
                        <div>
                            Đen
                        </div>
                    </label>
                    <input type="radio" name="size" id="colorWhite">
                    <label for="colorWhite" style="background-color: #999;">
                        <div>
                            Bạc
                        </div>
                    </label>
                </div>
                <div class="option-quantity">
                    <h4>Số Lượng</h4>
                    <div class="quantity">
                        <button type="button" onclick="if (document.getElementById('quantity').value > 1 ) {
                                            document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) - 1 }">
                            <i class="fas fa-minus-circle"></i>
                        </button>
                        <input type="number" name="quantity" id="quantity" value="1">
                        <button type="button" onclick="if (document.getElementById('quantity').value < 100 ) {
                                            document.getElementById('quantity').value = parseInt(document.getElementById('quantity').value) + 1 }"><i class="fas fa-plus-circle"></i></button>
                    </div>
                    <div>
                        <button class="add-to-cart">
                            <i class="fas fa-shopping-basket"></i> Thêm vào giỏ hàng
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <i class="close-modal-product fa fa-times"></i>
    </div>
</div>