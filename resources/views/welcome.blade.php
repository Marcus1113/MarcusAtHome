@extends('web._template/template')
@section('content')
    <div class="container text-center">
        <img src="https://giffiles.alphacoders.com/112/11288.gif" alt="" style="max-width: 200px">


        <!-- Slider main container -->
        <h3><a href="https://swiperjs.com/demos#default">Swiper slider</a></h3>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="https://wallpaper.dog/large/5509838.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://wallpaperaccess.com/full/945950.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://wallpaperaccess.com/full/109672.jpg" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

{{--            <!-- If we need navigation buttons -->--}}
{{--            <div class="swiper-button-prev"></div>--}}
{{--            <div class="swiper-button-next"></div>--}}

{{--            <!-- If we need scrollbar -->--}}
{{--            <div class="swiper-scrollbar"></div>--}}
        </div>

    </div>
@endsection

@section('afterStyle')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <style>
        .swiper {
            width: 100%;
            height: 500px;
        }
        .swiper-slide img{
            min-width: 100%;
            max-width: 100%;
            min-height: 100%;
            max-height: 100%;
        }
    </style>
@endsection

@section('afterScript')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection
