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
            /*padding-top: 50px;*/
            /*padding-bottom: 50px;*/
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            display: flex;
        }

        .swiper-slide img {
            display: block;
            max-width: 100%;
            max-height: 100%;
            align-self: center;

        }
    </style>
@endsection

@section('afterScript')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper', {
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 3,
            grabCursor: true,
            loop: true,
            // slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
@endsection
