@extends('web._template/template')
@section('content')
    <!-- ======= Hero Section ======= -->
    @include('web.HomeController._sections.hero')
    <!-- ======= About Section ======= -->
    @include('web.HomeController._sections.about')
    <!-- ======= Facts Section ======= -->
    @include('web.HomeController._sections.facts')
    <!-- ======= Skills Section ======= -->
    @include('web.HomeController._sections.skills')
    <!-- ======= Resume Section ======= -->
    @include('web.HomeController._sections.resume')
    <!-- ======= Portfolio Section ======= -->
    @include('web.HomeController._sections.portfolio')
    <!-- ======= Services Section ======= -->
    @include('web.HomeController._sections.services')
    <!-- ======= Testimonials Section ======= -->
    @include('web.HomeController._sections.testimonials')
    <!-- ======= Contact Section ======= -->
    @include('web.HomeController._sections.contact')
@endsection
