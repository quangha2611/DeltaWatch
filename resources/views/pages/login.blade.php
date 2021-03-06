@extends('layouts.master')

@section('title', 'Thế giới Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="#">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Đăng nhập</a>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="content">
        @include('components.pages.login.login_form')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/pages/login.js') }}"></script>
@endsection
