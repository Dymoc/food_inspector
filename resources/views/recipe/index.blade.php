@extends('layouts.master')
@section('title')
    Рецепт
@endsection
@section('styles')

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Популярные рецепты</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Популярные рецепты</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <div class="blog-page">
        <div class="container">
            <div class="results mt-60">
                <div class="row">
                    @foreach($recipeList as $recipe)
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="{{ $recipe->img }}" alt="фото рецепта">
                                    <div class="product-card__two-image-content">
                                        <a href="#"><i class="organik-icon-visibility"></i></a>
                                        <a href="#"><i class="organik-icon-heart"></i></a>
                                    </div><!-- /.product-card__two-image-content -->
                                </div><!-- /.product-card__two-image -->
                                <div class="product-card__two-content">
                                    <h3><a href="#{{ $recipe->id }}">{{ $recipe->name }}</a></h3>

                                    <div class="row">
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/time.svg') }}" /><span>{{ $recipe->cooking_time }} минут</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/chart.svg') }}" /><span>395 Ккал</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/smile.svg') }}" />
                                            <span>
                                                @switch($recipe->cooking_level)
                                                    @case('easy')
                                                    Для новичков
                                                    @break
                                                    @case('medium')
                                                    Для опытных
                                                    @break
                                                    @default
                                                    Для профи
                                                @endswitch
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- /.product-card__two-content -->
                            </div><!-- /.product-card__two -->
                        </div>
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.results -->
            <ul class="list-unstyled post-pagination d-flex justify-content-center">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul><!-- /.post-pagination -->
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
@endsection
@section('scripts')

@endsection
