@extends('layouts.master')

@section('title', 'Thế giới Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/sign_up.css') }}">
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="{{ route('get.home.index') }}">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Đăng ký</a>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="content">
        @include('components.pages.sign_up.sign_up_form')
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/pages/sign_up.js') }}"></script>
@endsection
