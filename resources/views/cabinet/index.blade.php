@extends('layouts.master')
@section('title')
    Личный кабинет
@endsection
@section('styles')

@endsection
@section('content')

<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Личный кабинет</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{route('index')}}">Главная</a></li>
            <li>/</li>
            <li><span>Профиль</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="contact-one">
    <img src="assets/images/shapes/contact-bg-1-1.png" alt="" class="contact-one__shape-1">
    <img src="assets/images/shapes/contact-bg-1-2.png" alt="" class="contact-one__shape-2">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <h3>Короче, здесь личный кабинет верстаем</h3>
        </div><!-- /.block-title -->
        
    </div><!-- /.container -->
</section><!-- /.contact-one -->







@endsection
@section('scripts')

@endsection
