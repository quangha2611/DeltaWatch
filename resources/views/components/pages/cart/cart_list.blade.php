<div class="container">
    <div class="row">
        @if (isset($order_success))
            <div class="alert alert-success" role="alert" style="width: 100%;">
                Đặt hàng thành công
            </div>
        @endif
        <h4>GIỎ HÀNG CỦA BẠN</h4>
        <ul class="cart_list border p-0">
            @php
                $totalAllMoney = 0;
            @endphp
            @foreach (session('cart') ?? [] as $key => $item)
                @php
                    $totalAllMoney += $item['totalPrice'];
                @endphp
                <li class="cart_item border-top p-3" style="margin-bottom: 5px" data-price="{{ $item['price'] }}">
                    <div class="item_image">
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="" width="100%">
                    </div>
                    <div class="item_info">
                        <div>
                            <a href="{{ route('get.product.show', $key) }}" class="name">{{ $item['name'] }}</a>
                            <p class="price">{{ number_format($item['price'], 0, '', '.') . 'đ' }}</p>
                        </div>
                    </div>
                    <div class="item_quantity">
                        <div class="quantity">
                            <button type="button" class="reduce-product" data-route="{{ route('get.cart.reduce-quantity') }}" data-item="{{ $key }}">
                                <i class="fas fa-minus-circle"></i>
                            </button>
                            <input type="number" name="quantity" class="product-quantity" value="{{ $item['quantity'] }}" readonly>
                            <button type="button" class="more-product" data-route="{{ route('get.cart.add-to-cart') }}" data-item="{{ $key }}">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item_total-price">
                        <p class="price">{{ number_format($item['totalPrice'], 0, '', '.') . 'đ' }}</p>
                    </div>
                    <div class="item_cancel" style="cursor:pointer;" data-route="{{ route('get.cart.delete-from-cart', $key) }}">
                        <i class="fa fa-times"></i>
                    </div>
                </li>
            @endforeach
        </ul>
        <div style="display: flex; width: 50%; justify-content: space-between" class="col-6 offset-6">
            <h3>Tổng tiền</h3>
            <h3 style="color: #f61900" id="total-money-cart">{{ number_format($totalAllMoney, 0, '', '.') . 'đ' }}</h3>
        </div>
        <div class="col-6 offset-6 mt-3 d-flex" style="justify-content: flex-end">
            <a href="{{ route('get.home.index') }}" class="btn btn-lg btn-primary" style="background-color: #f61900; border: none">
                <i class="fas fa-reply" style="color: #fff"></i> Quay lại tiếp tục mua hàng
            </a>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-primary" style="margin-left: 15px">
                <i class="fas fa-shopping-cart" style="color: #fff"></i> Đặt hàng
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('get.cart.order') }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 24px;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên người nhận</label>
                        <input type="text" required class="form-control" value="{{ Auth::guard('customer')->user()->name }}" name="name" placeholder="Tên người nhận">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa chỉ</label>
                        <input type="text" required class="form-control" placeholder="Địa chỉ" name="address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số điện thoại</label>
                        <input type="text" required class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại" name="phone">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Đặt hàng</button>
                </div>
            </div>
        </div>
    </form>
</div>
