@extends('layouts.master')
@section('title', 'Chi tiết sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/product_detail.css') }}">
@endsection

@section('content')
<!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="{{ route('get.home.index') }}">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Chi tiết sản phẩm</a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @include('components.pages.product_detail.product_overview')

        @include('components.pages.product_detail.product_info')

        @include('components.pages.product_detail.product_relate')

        @include('components.pages.index.posts')
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/pages/product_detail.js') }}"></script>
@endsection
