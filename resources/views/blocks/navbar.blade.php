<!-- NAV BAR -->
<div class="nav-bar">
    <div class="container">
        <div class="row justify-content-center">
            <ul class="mb-0">
                <li>
                    <a href="{{ route('get.home.index') }}">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="{{ route('get.product.index') }}">
                        Sản phẩm
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="menu-product-drop-down">
                        <div class="container">
                            <div class="row">
                                @foreach ($categories as $category)
                                    <div class="col-xl-3 col-lg-3">
                                        <ul class="pl-0">
                                            <h3>
                                                <a href="" title="{{ $category->name }}">{{ $category->name }}</a>
                                            </h3>
                                            @foreach($category->subCats as $subCat)
                                                <li>
                                                    <i class="fa fa-angle-right"></i>
                                                    <a href="#" title="{{ $subCat->name }}">{{ $subCat->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>
                <li style="position: relative;">
                    <a href="{{ route('get.product.index') }}"> Smartwatch <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        @for ($i = 0; $i < 3; $i++)
                        <li>
                            <a href="#" title="{{ $brands[$i]->br_name }}">{{ $brands[$i]->br_name }} Watch </a>
                        </li>
                        @endfor
                        <li>
                            <a href="#" title="Huawei Watch">Huawei Watch</a>
                            <i class="fa fa-angle-right"></i>
                            <ul class="sub-menu-2">
                                <li><a href="#" title="Đồng hồ sức khỏe Mi">Đồng hồ sức khỏe Mi</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('get.news.index') }}">
                        Tin tức
                    </a>
                </li>
                <li>
                    <a href="{{ route('get.about-us.index') }}">Về chúng tôi</a>
                </li>
                <li>
                    <a href="{{ route('get.address.index') }}">Địa chỉ cửa hàng</a>
                </li>
            </ul>
        </div>
    </div>
</div>
