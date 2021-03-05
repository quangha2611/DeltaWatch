<div class="content_main container">
            <div class="row justify-content-between">
                <div class="content_main-left col-xl-5 col-lg-5 col-sm-12">
                    <div class="row">
                        <div class="big-pic">
                            <img class="big-pic-active" src="{{ asset('images/product_details/detail1.jpg') }}" alt="" width="100%">
                            <img src="{{ asset('images/product_details/detail2.jpg') }}" alt="" width="100%">
                            <img src="{{ asset('images/product_details/detail3.jpg') }}" alt="" width="100%">
                            <img src="{{ asset('images/product_details/detail4.jpg') }}" alt="" width="100%">
                        </div>
                        <div class="thumbnail">
                            <img class="thumbnail-active" src="{{ asset('images/product_details/detail1.jpg') }}" alt="" width="100%">
                            <img src="{{ asset('images/product_details/detail2.jpg') }}" alt="" width="100%">
                            <img src="{{ asset('images/product_details/detail3.jpg') }}" alt="" width="100%">
                            <img src="{{ asset('images/product_details/detail4.jpg') }}" alt="" width="100%">
                        </div>
                    </div>
                </div>
                <div class="content_main-right col-xl-6 col-lg-6 col-sm-12 pr-0">
                    <form method="post">
                        <h1 class="title-product">Samsung Gear Fit</h1>
                        <p class="price-product">4.990.000₫</p>
                        <p class="des-product">
                            Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ,
                            Đếm số bước chân, Tính quãng đường chạy,
                            Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth,
                            Màn hình luôn hiển thị, Gọi điện trên đồng hồ, Từ chối cuộc gọi,
                            Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi,
                            Tìm điện thoại
                        </p>
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
