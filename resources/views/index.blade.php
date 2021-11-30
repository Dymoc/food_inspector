@extends('layouts.master')
@section('title')
    Главная
@endsection
@section('styles')

@endsection
@section('content')
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "effect": "fade",
    "autoplay": {
    "delay": 5000
    },
    "navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
    }
    }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ asset('/images/main-slider/main-slider-1-1.jpg') }});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 text-center">
                                <h2><span>Подбор рецептов</span> <br>
                                    FoodInspector</h2>
                                <a href="products.html" class=" thm-btn">Подобрать</a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ asset('/images/main-slider/main-slider-1-2.jpg') }});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 text-center">
                                <h2><span>Лучшие рецепты от</span> <br>
                                    FoodInspector</h2>
                                <a href="products.html" class=" thm-btn">Смотреть</a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="organik-icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                        class="organik-icon-right-arrow"></i></div>
            </div><!-- /.main-slider__nav -->

        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->
    <section class="calculator mt-60">

        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                <h3>Калькулятор рецептов</h3>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="recipe-tab" data-bs-toggle="tab" data-bs-target="#recipe" type="button"
                        role="tab" aria-controls="recipe" aria-selected="true">Поиск по рецепту</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ingridients-tab" data-bs-toggle="tab" data-bs-target="#ingridients"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Поиск по
                        игредиентам</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="naming-tab" data-bs-toggle="tab" data-bs-target="#naming" type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Поиск по названию</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane  gray-border" id="recipe" role="tabpanel" aria-labelledby="home-tab">
                    <div class="product-sidebar__single no-border">
                        <form action="" method="post">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Тип блюда</h3>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 mb-10">
                                                    <div class="product-sorter">
                                                        <div class="product-sorter__select">
                                                            <select class="selectpicker">
                                                                <option value="0">Все</option>
                                                                @foreach($recipeTypes as $type)
                                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div><!-- /.product-sorter__select -->
                                                    </div><!-- /.product-sorter -->
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="eatMeat" checked>
                                                        <label for="eatMeat">Я ем мясо</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Время приготовления</h3>
                                            <div class="row gy-5">
                                                <div class="col-xl-3 col-lg-3"><svg class="time-icon">
                                                        <style type="text/css">
                                                            .st0 {
                                                                fill-rule: evenodd;
                                                                clip-rule: evenodd;
                                                                fill: #60BE74;
                                                            }

                                                        </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0" d="M3.2,7.5L2.1,6.2L6.8,2l0.9,1.1c0.6-0.4,1.2-0.7,1.8-1L8.4,0.8c-0.7-0.9-2-1-2.9-0.3L0.8,4.6
                                        c-0.9,0.7-1.1,1.9-0.4,2.8l1.7,2.1C2.4,8.8,2.8,8.1,3.2,7.5z M29.2,4.6l-4.7-4.2c-0.9-0.7-2.2-0.5-2.9,0.3l-1.1,1.4
                                        c0.6,0.3,1.2,0.6,1.8,1L23.2,2l4.7,4.2l-1.1,1.3c0.4,0.6,0.7,1.3,1,1.9l1.7-2.1C30.2,6.5,30.1,5.3,29.2,4.6z M27.8,28.4l-4.2-5
                                        c2.1-2.2,3.4-5.1,3.4-8.4c0-6.6-5.4-12-12-12S3,8.4,3,15c0,3.3,1.3,6.2,3.4,8.4l-4.2,5l0,0C2.1,28.5,2,28.8,2,29c0,0.6,0.4,1,1,1
                                        c0.3,0,0.6-0.1,0.8-0.4l0,0l4.1-5c2,1.5,4.4,2.3,7.1,2.3c2.7,0,5.1-0.9,7.1-2.3l4.1,5l0,0c0.2,0.2,0.4,0.4,0.8,0.4
                                        c0.6,0,1-0.4,1-1C28,28.8,27.9,28.5,27.8,28.4L27.8,28.4z M15,25C9.5,25,5,20.5,5,15C5,9.5,9.3,5,15,5c5.6,0,10,4.5,10,10
                                        C25,20.5,20.5,25,15,25z M19.3,9.3l-4.9,5.2l-2.8-3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1.1,0,1.5l3.5,3.7c0.4,0.4,1,0.4,1.4,0
                                        l5.6-5.9c0.4-0.4,0.4-1.1,0-1.5C20.3,8.9,19.7,8.9,19.3,9.3z" />
                                                            </g>
                                                        </g>
                                                    </svg>15 мин</div>
                                                <div class="col-xl-3 col-lg-3"><svg class="time-icon">
                                                        <style type="text/css">
                                                            .st0 {
                                                                fill-rule: evenodd;
                                                                clip-rule: evenodd;
                                                                fill: #60BE74;
                                                            }

                                                        </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0" d="M3.2,7.5L2.1,6.2L6.8,2l0.9,1.1c0.6-0.4,1.2-0.7,1.8-1L8.4,0.8c-0.7-0.9-2-1-2.9-0.3L0.8,4.6
                                        c-0.9,0.7-1.1,1.9-0.4,2.8l1.7,2.1C2.4,8.8,2.8,8.1,3.2,7.5z M29.2,4.6l-4.7-4.2c-0.9-0.7-2.2-0.5-2.9,0.3l-1.1,1.4
                                        c0.6,0.3,1.2,0.6,1.8,1L23.2,2l4.7,4.2l-1.1,1.3c0.4,0.6,0.7,1.3,1,1.9l1.7-2.1C30.2,6.5,30.1,5.3,29.2,4.6z M27.8,28.4l-4.2-5
                                        c2.1-2.2,3.4-5.1,3.4-8.4c0-6.6-5.4-12-12-12S3,8.4,3,15c0,3.3,1.3,6.2,3.4,8.4l-4.2,5l0,0C2.1,28.5,2,28.8,2,29c0,0.6,0.4,1,1,1
                                        c0.3,0,0.6-0.1,0.8-0.4l0,0l4.1-5c2,1.5,4.4,2.3,7.1,2.3c2.7,0,5.1-0.9,7.1-2.3l4.1,5l0,0c0.2,0.2,0.4,0.4,0.8,0.4
                                        c0.6,0,1-0.4,1-1C28,28.8,27.9,28.5,27.8,28.4L27.8,28.4z M15,25C9.5,25,5,20.5,5,15C5,9.5,9.3,5,15,5c5.6,0,10,4.5,10,10
                                        C25,20.5,20.5,25,15,25z M19.3,9.3l-4.9,5.2l-2.8-3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1.1,0,1.5l3.5,3.7c0.4,0.4,1,0.4,1.4,0
                                        l5.6-5.9c0.4-0.4,0.4-1.1,0-1.5C20.3,8.9,19.7,8.9,19.3,9.3z" />
                                                            </g>
                                                        </g>
                                                    </svg>30 мин</div>
                                                <div class="col-xl-3 col-lg-3"><svg class="time-icon">
                                                        <style type="text/css">
                                                            .st0 {
                                                                fill-rule: evenodd;
                                                                clip-rule: evenodd;
                                                                fill: #60BE74;
                                                            }

                                                        </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0" d="M3.2,7.5L2.1,6.2L6.8,2l0.9,1.1c0.6-0.4,1.2-0.7,1.8-1L8.4,0.8c-0.7-0.9-2-1-2.9-0.3L0.8,4.6
                                        c-0.9,0.7-1.1,1.9-0.4,2.8l1.7,2.1C2.4,8.8,2.8,8.1,3.2,7.5z M29.2,4.6l-4.7-4.2c-0.9-0.7-2.2-0.5-2.9,0.3l-1.1,1.4
                                        c0.6,0.3,1.2,0.6,1.8,1L23.2,2l4.7,4.2l-1.1,1.3c0.4,0.6,0.7,1.3,1,1.9l1.7-2.1C30.2,6.5,30.1,5.3,29.2,4.6z M27.8,28.4l-4.2-5
                                        c2.1-2.2,3.4-5.1,3.4-8.4c0-6.6-5.4-12-12-12S3,8.4,3,15c0,3.3,1.3,6.2,3.4,8.4l-4.2,5l0,0C2.1,28.5,2,28.8,2,29c0,0.6,0.4,1,1,1
                                        c0.3,0,0.6-0.1,0.8-0.4l0,0l4.1-5c2,1.5,4.4,2.3,7.1,2.3c2.7,0,5.1-0.9,7.1-2.3l4.1,5l0,0c0.2,0.2,0.4,0.4,0.8,0.4
                                        c0.6,0,1-0.4,1-1C28,28.8,27.9,28.5,27.8,28.4L27.8,28.4z M15,25C9.5,25,5,20.5,5,15C5,9.5,9.3,5,15,5c5.6,0,10,4.5,10,10
                                        C25,20.5,20.5,25,15,25z M19.3,9.3l-4.9,5.2l-2.8-3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1.1,0,1.5l3.5,3.7c0.4,0.4,1,0.4,1.4,0
                                        l5.6-5.9c0.4-0.4,0.4-1.1,0-1.5C20.3,8.9,19.7,8.9,19.3,9.3z" />
                                                            </g>
                                                        </g>
                                                    </svg>40 мин</div>
                                                <div class="col-xl-3 col-lg-3"><svg class="time-icon">
                                                        <style type="text/css">
                                                            .st0 {
                                                                fill-rule: evenodd;
                                                                clip-rule: evenodd;
                                                                fill: #60BE74;
                                                            }

                                                        </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0" d="M3.2,7.5L2.1,6.2L6.8,2l0.9,1.1c0.6-0.4,1.2-0.7,1.8-1L8.4,0.8c-0.7-0.9-2-1-2.9-0.3L0.8,4.6
                                        c-0.9,0.7-1.1,1.9-0.4,2.8l1.7,2.1C2.4,8.8,2.8,8.1,3.2,7.5z M29.2,4.6l-4.7-4.2c-0.9-0.7-2.2-0.5-2.9,0.3l-1.1,1.4
                                        c0.6,0.3,1.2,0.6,1.8,1L23.2,2l4.7,4.2l-1.1,1.3c0.4,0.6,0.7,1.3,1,1.9l1.7-2.1C30.2,6.5,30.1,5.3,29.2,4.6z M27.8,28.4l-4.2-5
                                        c2.1-2.2,3.4-5.1,3.4-8.4c0-6.6-5.4-12-12-12S3,8.4,3,15c0,3.3,1.3,6.2,3.4,8.4l-4.2,5l0,0C2.1,28.5,2,28.8,2,29c0,0.6,0.4,1,1,1
                                        c0.3,0,0.6-0.1,0.8-0.4l0,0l4.1-5c2,1.5,4.4,2.3,7.1,2.3c2.7,0,5.1-0.9,7.1-2.3l4.1,5l0,0c0.2,0.2,0.4,0.4,0.8,0.4
                                        c0.6,0,1-0.4,1-1C28,28.8,27.9,28.5,27.8,28.4L27.8,28.4z M15,25C9.5,25,5,20.5,5,15C5,9.5,9.3,5,15,5c5.6,0,10,4.5,10,10
                                        C25,20.5,20.5,25,15,25z M19.3,9.3l-4.9,5.2l-2.8-3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1.1,0,1.5l3.5,3.7c0.4,0.4,1,0.4,1.4,0
                                        l5.6-5.9c0.4-0.4,0.4-1.1,0-1.5C20.3,8.9,19.7,8.9,19.3,9.3z" />
                                                            </g>
                                                        </g>
                                                    </svg>1 час</div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Сложность блюда</h3>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="forNewbee">
                                                        <label for="forNewbee">Для новичков</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="forExperienced" checked>
                                                        <label for="forExperienced">Для опытных</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="profi">
                                                        <label for="profi">Для профи</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Калорийность на 100 гр.</h3>
                                            <div class="product-sidebar__price-range no-border mb-30">
                                                <div class="range-slider-kcal" id="range-slider-kcal"></div>
                                                <div class="form-group">
                                                    <div class="left">
                                                        <p><span id="min-value-rangeslider"></span> Ккал</p>
                                                        <span>-</span>
                                                        <p><span id="max-value-rangeslider"></span> Ккал</p>
                                                    </div><!-- /.left -->

                                                </div>
                                            </div><!-- /.product-sidebar__price-range -->
                                            <div class="text-center">
                                                <button type="submit" class="thm-btn">Подобрать блюда</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3>Исключить из рецептов</h3>

                                    <div class="row products_decline mb-30">
                                        <div class="col-md-6 mb-20">
                                            <input type="checkbox" name="meatCheckbox" id="meatCheckbox"><label
                                                for="meatCheckbox">Мясо</label>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <input type="checkbox" name="fishCheckbox" id="fishCheckbox"><label
                                                for="fishCheckbox">Рыбу</label>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <input type="checkbox" name="alkoCheckbox" id="alkoCheckbox"><label
                                                for="alkoCheckbox">Алкоголь</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="eggCheckbox" id="eggCheckbox"><label
                                                for="eggCheckbox">Яйца</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="onionCheckbox" id="onionCheckbox"><label
                                                for="onionCheckbox">Лук</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="milkCheckbox" id="milkCheckbox"><label
                                                for="milkCheckbox">Молоко</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="checkbox" name="myList" id="myList">
                                                <label for="myList">Использовать мой список продуктов </label>
                                                <span>(необходимо зарегистрироваться)</span>
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane  gray-border" id="ingridients" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="search-tab-pane">
                        <form action="#">
                            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                            <input type="text" id="search" placeholder="Ищу..." />
                            <button type="submit" aria-label="search submit" class="thm-btn">
                                <i class="organik-icon-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="row ml-10 mr-10">
                        @foreach($ingredientsCategories as $category)
                            <div class="col-md-3"><a href=#{{ $category->id }}>{{ $category->name }}
                                </a></div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane gray-border" id="naming" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="search-tab-pane">
                        <form action="#">
                            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                            <input type="text" id="search" placeholder="Ищу..." />
                            <button type="submit" aria-label="search submit" class="thm-btn">
                                <i class="organik-icon-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="row ml-10 mr-10">
                        @foreach($recipeCategories as $category)
                            <div class="col-md-3"><a href=#{{ $category->id }}>{{ $category->name }}
                                </a></div>
                        @endforeach
                    </div>
                </div>
            </div>

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
                </div>
            </div>

        </div><!-- /.container -->
    </section><!-- /.calculator -->

    <section class="new-products">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                <h3>Популярные рецепты</h3>
            </div>
            <div class="popular-recipes mt-60">
                <div class="row">
                    @foreach($favorList as $recipe)
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
            </div>
        </div>

    </section><!-- /.new-products -->


    <section class="gallery-one">
        <div class="container-fluid">
            <div class="block-title text-center">
                <div class="block-title__decor"></div><!-- /.block-title__decor -->

                <h3>Вы готовите по нашим рецептам</h3>
            </div><!-- /.block-title -->
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "autoplay": {
        "delay": 5000
    }, "breakpoints": {
        "0": {
            "spaceBetween": 0,
            "slidesPerView": 1
        },
        "375": {
            "spaceBetween": 0,
            "slidesPerView": 1
        },
        "575": {
            "spaceBetween": 10,
            "slidesPerView": 2
        },
        "767": {
            "spaceBetween": 10,
            "slidesPerView": 3
        },
        "991": {
            "spaceBetween": 10,
            "slidesPerView": 5
        },
        "1199": {
            "spaceBetween": 10,
            "slidesPerView": 5
        }
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery-1-5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container thm-swiper__slider -->
        </div><!-- /.container-fluid -->
    </section><!-- /.gallery-one -->
@endsection
@section('scripts')

@endsection
