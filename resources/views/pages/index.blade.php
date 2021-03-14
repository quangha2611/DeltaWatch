@extends('layouts.master')

@section('title', 'Thế giới Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/index.css') }}">
    <style>
        .js-add-to-cart {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    @include('components.banner')

    <!-- CONTENT -->
    <div class="content">
        @include('components.pages.index.best_brands')

        @include('components.pages.index.new_products')

        @include('components.pages.index.products_by_brand')

        @include('components.pages.index.products_for_man')

        @include('components.pages.index.products_for_woman')

        @include('components.pages.index.best_equipments')

        @include('components.pages.index.posts')
    </div>

    @include('components.modal_show_product')
@endsection

@section('script')
    <script src="{{ asset('js/pages/index.js') }}"></script>
@endsection