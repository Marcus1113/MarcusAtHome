@extends('web._template/template')
@section('content')
    @include('web.HomeController._sections.hero')

    <!-- ======= About Section ======= -->
    @include('web.HomeController._sections.about')
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    @include('web.HomeController._sections.facts')
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    @include('web.HomeController._sections.skills')
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    @include('web.HomeController._sections.resume')
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('web.HomeController._sections.portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    @include('web.HomeController._sections.services')
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('web.HomeController._sections.testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    @include('web.HomeController._sections.contact')
    <!-- End Contact Section -->
@endsection

{{--@section('afterStyle')--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>--}}

{{--@endsection--}}

{{--@section('afterScript')--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>--}}

{{--    </script>--}}
{{--@endsection--}}
