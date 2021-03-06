@extends('layouts.master')

@section('title', 'Địa chỉ cửa hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/address.css') }}">
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <a href="{{ route('get.home.index') }}">Trang chủ</a>
                <i class="fa fa-angle-right ml-3 mr-3"></i>
                <a href="#">Danh sách cửa hàng</a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="container-fluid pl-0 pr-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.7453277018835!2d106.66581331467518!3d20.841987999504653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a7bdb4ed411%3A0xc173da3f140c38c4!2zQuG6v24geGUga2jDoWNoIE5p4buHbSBOZ2jEqWE!5e0!3m2!1svi!2s!4v1603677961753!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        @include('components.pages.address.form')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/pages/address.js') }}"></script>
@endsection