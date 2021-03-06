@extends('layouts.master')

@section('title', 'Sản phẩm Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/product.css') }}">
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="{{ route('get.home.index') }}">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Danh sách sản phẩm</a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="content_main mt-3">
            <div class="container">
                <div class="row">
                    @include('components.pages.product.siderbar')

                    @include('components.pages.product.list_product')

                    <div class="pagination">
                        <div class="pagination-prev">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="page page-active">
                            1
                        </div>
                        <div class="page">
                            2
                        </div>
                        <div class="pagination-next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="ads-last mt-5" style="display: none;">
                        <div class="col-sm-6 pl-0">
                            <img src="{{ asset('images/banners/banner1_page_products.jpg') }}" alt="" width="100%">
                        </div>
                        <div class="col-sm-6 pr-0">
                            <img src="{{ asset('images/banners/banner2_page_products.jpg') }}" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.modal_show_product')
@endsection

@section('script')
    <script src="{{ asset('js/pages/product.js') }}"></script>
@endsection