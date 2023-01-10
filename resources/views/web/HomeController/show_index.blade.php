@extends('web._template/template')
@section('content')
    <div class="container-fluid text-center pt-5 mb-5">
        <!-- Slider main container -->
        <div class="text-center">
            <img src="{{ asset('image/logo/porsche-wortmarke.svg') }}" alt="" style="max-width: 250px">
            <img src="{{ asset('image/logo/porsche-911-logo.png') }}" alt="" style="max-width: 100px">
        </div>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="https://images4.alphacoders.com/113/thumb-1920-1132446.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://www.hdcarwallpapers.com/walls/porsche_911_targa_4s_2020_5k_4-HD.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://m.atcdn.co.uk/a/media/%7Bresize%7D/c7e2593c512e4757b2602426336dc8b0.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.hdqwalls.com/wallpapers/porsche-911-gt3-rs-2019-4k-im.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://wallpaperaccess.com/full/3190500.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://cdn.elferspot.com/wp-content/uploads/2021/03/2018-Porsche-911-991-GT2-RS-22Le-Mans22-16.jpg" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            {{--            <!-- If we need navigation buttons -->--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                        <div class="swiper-button-next"></div>--}}

                        <!-- If we need scrollbar -->
{{--                        <div class="swiper-scrollbar"></div>--}}
        </div>
    </div>

    <main class="main pt-4">

        <div class="container">

            <div class="row">
                <div class="col-md-9">

                    <div class="row">
                        <div class="col-md-6">

                            <article class="card mb-4">
                                <header class="card-header">
                                    <div class="card-meta">
                                        <a href="#"><time class="timeago" datetime="2021-09-26 20:00" timeago-id="1">1 year ago</time></a> in <a href="page-category.html">Journey</a>
                                    </div>
                                    <a href="post-image.html">
                                        <h4 class="card-title">How can we sing about love?</h4>
                                    </a>
                                </header>
                                <a href="post-image.html">
                                    <img class="card-img" src="img/articles/22.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                </div>
                            </article><!-- /.card -->

                            <article class="card mb-4">
                                <header class="card-header">
                                    <div class="card-meta">
                                        <a href="#"><time class="timeago" datetime="2021-09-03 20:00" timeago-id="2">1 year ago</time></a> in <a href="page-category.html">Lifestyle</a>
                                    </div>
                                    <a href="post-image.html">
                                        <h4 class="card-title">Oh, I guess they have the blues</h4>
                                    </a>
                                </header>
                                <a href="post-image.html">
                                    <img class="card-img" src="img/articles/18.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                </div>
                            </article><!-- /.card -->

                            <article class="card mb-4">
                                <header class="card-header">
                                    <div class="card-meta">
                                        <a href="#"><time class="timeago" datetime="2021-07-16 20:00" timeago-id="3">1 year ago</time></a> in <a href="page-category.html">Work</a>
                                    </div>
                                    <a href="post-image.html">
                                        <h4 class="card-title">How can we, how can we sing about ourselves?</h4>
                                    </a>
                                </header>
                                <a href="post-image.html">
                                    <img class="card-img" src="img/articles/12.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                </div>
                            </article><!-- /.card -->

                        </div>
                        <div class="col-md-6">

                            <article class="card mb-4">
                                <header class="card-header">
                                    <div class="card-meta">
                                        <a href="#"><time class="timeago" datetime="2021-09-15 20:00" timeago-id="4">1 year ago</time></a> in <a href="page-category.html">Lifestyle</a>
                                    </div>
                                    <a href="post-image.html">
                                        <h4 class="card-title">The king is made of paper</h4>
                                    </a>
                                </header>
                                <a href="post-image.html">
                                    <img class="card-img" src="img/articles/5.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                </div>
                            </article><!-- /.card -->

                            <article class="card mb-4">
                                <header class="card-header">
                                    <div class="card-meta">
                                        <a href="#"><time class="timeago" datetime="2021-08-24 20:00" timeago-id="5">1 year ago</time></a> in <a href="page-category.html">Work</a>
                                    </div>
                                    <a href="post-image.html">
                                        <h4 class="card-title">Crying on the news</h4>
                                    </a>
                                </header>
                                <a href="post-image.html">
                                    <img class="card-img" src="img/articles/13.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                </div>
                            </article><!-- /.card -->

                            <article class="card mb-4">
                                <header class="card-header">
                                    <div class="card-meta">
                                        <a href="#"><time class="timeago" datetime="2021-05-08 20:00" timeago-id="6">1 year ago</time></a> in <a href="page-category.html">Journey</a>
                                    </div>
                                    <a href="post-image.html">
                                        <h4 class="card-title">How can you not sing about love?</h4>
                                    </a>
                                </header>
                                <a href="post-image.html">
                                    <img class="card-img" src="img/articles/1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                </div>
                            </article><!-- /.card -->

                        </div>
                    </div>

                </div>
                <div class="col-md-3 ms-auto">
                    @include('web._template.sidebar')
                </div>
            </div>
        </div>
    </main>
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
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
@endsection
