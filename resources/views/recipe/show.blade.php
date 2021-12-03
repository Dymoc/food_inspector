@extends('layouts.master')
@section('title')
    {{ $recipe->name }}
@endsection
@section('styles')

@endsection
@section('content')




    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2> {{ $recipe->name }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span> {{ $recipe->name }}</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="product_detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="product_detail_image">
                        <img src="{{ asset('/images/products/product-d-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="product_detail_content">
                        <div class="naming_recipe">
                            <h2> {{ $recipe->name }}</h2><a href="#"><i class="fa fa-heart"></i></a>
                        </div>

                        <div class="product_detail_review_box">
                            <div>{{ $recipe->cooking_time }} минут</div>
                            <div>395 Ккал</div>
                            <div>@switch( $recipe->cooking_level )
                                    @case(" easy")
                                        Для новичков
                                    @break
                                    @case(" medium")
                                        Для опытных
                                    @break
                                    @default
                                        Для профи
                                @endswitch
                            </div>
                        </div>
                        <div class="product_detail_text">
                            <h2>Ингредиенты</h2>
                            <ul>
                                @foreach ($ingredientsList as $ingredient)
                                    <li>{{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <ul class="list-unstyled category_tag_list">
                            <li><span>Тип блюда:</span>
                                @foreach ($recipe_type as $type)
                                    {{ $type->name }}
                                @endforeach
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="product-tab-box tabs-box">
                        <h2 class="mb-30 talign-center">Пошаговый рецепт</h2>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="desc">
                                <div class="product-details-content">
                                    <div class="desc-content-box">
                                        @foreach ($recipe_steps as $step)
                                            <div class="row mb-20">
                                                <div class="col-md-4"><img src="{{ $step->img }}" alt=""></div>
                                                <div class="col-md-8">
                                                    <h2>Шаг {{ $step->step_number }}</h2>
                                                    <p>
                                                        {{ $step->description }}<br />
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
