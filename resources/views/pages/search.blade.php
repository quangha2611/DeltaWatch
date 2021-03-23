@extends('layouts.master')

@section('title', 'Thế giới Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/search.css') }}">
    <style>
        .js-add-to-cart {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="{{ route('get.home.index') }}">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Tìm kiếm</a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="product-by-brand">
            <div class="container">
                <div class="row">
                    <p class="title">
                        <span>Có @php echo(count($products)) @endphp kết quả phù hợp</span>
                    </p>
                </div>
                @if(!empty($products))
                    <div class="list-product-by-brand row">
                        @foreach ($products as $product)
                            <div class="new-product_item">
                                <div class="item_image">
                                    <img src="{{ asset('storage/' . $product->po_image) }}"
                                         width="90%" alt="">
                                    <div class="item_image_mask">
                                        <div class="animation3d">
                                            <div>
                                                <i class="fas fa-search-plus"
                                                   data-route="{{ route('get.ajax.product', $product->id) }}"></i>
                                            </div>
                                            <div class="js-add-to-cart">
                                                <i class="fas fa-shopping-basket iconcart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('images/icons/options.png') }}" alt="" class="item_image_option">
                                </div>
                                <div class="item_info">
                                    <a href="{{ route('get.product.show', $product->id) }}"
                                       class="item_info_name">{{ $product->po_name }}</a>
                                    <p class="item_info_price">@php echo number_format($product->po_price, 0, '', '.') . 'đ'; @endphp
                                        ₫</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>

    @include('components.modal_show_product')

@endsection

@section('script')
    <script src="{{ asset('js/pages/search.js') }}"></script>
@endsection