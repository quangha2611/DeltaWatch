@extends('layouts.master')

@section('title', 'Tin tức Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/news.css') }}">
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="{{ route('get.home.index') }}">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Tin tức</a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="container">
            <div class="row">
                <h2 class="title">
                    <span class="big">Tin tức</span>
                </h2>

                @include('components.pages.news.hot_news')

                @include('components.pages.news.list_news')
            </div>
        </div>
    </div>
@endsection

@section('script')
{{--    <script src="{{ asset('js/pages/product.js') }}"></script>--}}
@endsection