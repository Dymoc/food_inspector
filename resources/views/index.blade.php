@extends('layouts.master')
@section('title')
    Главная
@endsection
@section('styles')

@endsection
@section('content')
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{
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
                        style="background-image: url({{ asset('/images/main-slider/slide1.png') }});">
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
                        style="background-image: url({{ asset('/images/main-slider/slider2.png') }});">
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
                        <form method="POST" id="findByRecipeOptions">
                            @csrf
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Тип блюда</h3>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 mb-10">
                                                    <div class="product-sorter">
                                                        <div class="product-sorter__select">
                                                            <select class="selectpicker" name="recipe_type">
                                                                <option value="0">Все</option>
                                                                @foreach ($recipeTypes as $type)
                                                                    <option value="{{ $type->id }}">{{ $type->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div><!-- /.product-sorter__select -->
                                                    </div><!-- /.product-sorter -->
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="eatMeat" checked name="EatMeat">
                                                        <label for="eatMeat">Я ем мясо</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Время приготовления</h3>
                                            <div class="row products_time gy-5">
                                                <div class="col-xl-3 col-lg-3 justify-content-center">
                                                    <input type="radio" name="time" id="time15Checkbox" value="30"><label
                                                        for="time15Checkbox">
                                                        30 мин</label>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 justify-content-center">
                                                    <input type="radio" name="time" id="time30Checkbox" value="60"><label
                                                        for="time30Checkbox">
                                                        60 мин</label>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 justify-content-center">
                                                    <input type="radio" name="time" id="time45Checkbox" value="120"><label
                                                        for="time45Checkbox">
                                                        до 2ч</label>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 justify-content-center">
                                                    <input type="radio" name="time" id="time60Checkbox" value="360"><label
                                                        for="time60Checkbox">
                                                        > 2ч</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Сложность блюда</h3>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="forNewbee" name="cooking_level[]" value="easy">
                                                        <label for="forNewbee">Для новичков</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="forExperienced" name="cooking_level[]" checked value="medium">
                                                        <label for="forExperienced">Для опытных</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" id="profi" name="cooking_level[]" value="hard">
                                                        <label for="profi">Для профи</label>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Калорийность блюда</h3>
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
                                            <input type="checkbox" name="NotEat[]" id="meatCheckbox" value="3"><label
                                                for="meatCheckbox">Грибы</label>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <input type="checkbox" name="NotEat[]" id="fishCheckbox" value="12"><label
                                                for="fishCheckbox">Рыбу</label>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <input type="checkbox" name="NotEat[]" id="alkoCheckbox" value="1"><label
                                                for="alkoCheckbox">Алкоголь</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="NotEat[]" id="eggCheckbox" value="4"><label
                                                for="eggCheckbox">Яйца</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="NotEat[]" id="onionCheckbox" value="20"><label
                                                for="onionCheckbox">Хлеб</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="NotEat[]" id="milkCheckbox" value="11"><label
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


                        <input type="text" class="form-control search-input typeahead" name="q" autocomplete="off"
                            placeholder="Ищу...">
                        <button aria-label="search submit" class="thm-btn">
                            <i class="organik-icon-magnifying-glass"></i>
                        </button>
                        <div class="alert alert-success alert-dismissible fade show quantityOfRecipes" role="alert">
                            По вашему запросу нашлось <span class="quantity"></span> рецептов
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                    <div class="row ml-10 mr-10">
                        @foreach ($ingredientsCategories as $category)
                            <div class="col-md-3">
                                <a class="ingredientsCategory" rel="{{ $category->id }}">{{ $category->name }}</a>
                            </div>
                        @endforeach
                        <form method="GET" id="findByIngredients">
                            <div class="row mt-10">
                                @csrf
                                @foreach ($ingredientList as $ingredient)
                                    <div class="col-md-3 ingredientsListFiltered"
                                        data-category-id="{{ $ingredient->category->id }}">
                                        <div class="form-group"> <input type="checkbox"
                                                id="ingredient{{ $ingredient->id }}" name="ingredients[]"
                                                value="{{ $ingredient->id }}"><label
                                                for="ingredient{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="col-md-12 mb-10 ">
                                <button type="submit" class="thm-btn mlr-auto">Подобрать блюда</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="tab-pane gray-border" id="naming" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="search-tab-pane">
                        <form method="GET" action="#" id="findByRecipeName">
                            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                            <input type="text" id="search" name="name" placeholder="Ищу..." />
                            <button type="submit" aria-label="search submit" class="thm-btn">
                                <i class="organik-icon-magnifying-glass"></i>
                            </button>
                            <div class="alert alert-success alert-dismissible fade show quantityOfRecipes col-md-12"
                                role="alert">
                                По вашему запросу нашлось <span class="quantity"></span> рецептов
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="row ml-10 mr-10">
                        @foreach ($recipeCategories as $category)
                            <div class="col-md-3"><a href="#{{ $category->id }}"
                                    id="recipeCategory-{{ $category->id }}">{{ $category->name }}
                                </a></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="results mt-60">
                <div class="row">

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
                    @foreach ($favorList as $recipe)
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="{{ $recipe->img }}" alt="фото рецепта">
                                    <div class="product-card__two-image-content">
                                        <a href="{{ route('recipe.show', ['id' => $recipe]) }}"><i
                                                class="organik-icon-visibility"></i></a>
                                        <a href="javascript:" rel="{{ $recipe->id }}" class="like"><i
                                                class="fa fa-heart"></i></a>
                                    </div><!-- /.product-card__two-image-content -->
                                </div><!-- /.product-card__two-image -->
                                <div class="product-card__two-content">
                                    <h3><a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->name }}</a></h3>

                                    <div class="row">
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/time.svg') }}" /><span>{{ $recipe->cooking_time }}
                                                минут</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/chart.svg') }}" /><span>395 Ккал</span>
                                        </div>
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
            <div class="swiper-container thm-swiper__slider"
                data-swiper-options='{"slidesPerView": 1, "loop": true,
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
                            <img src="{{ asset('/images/gallery/gallery1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery1.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery1.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery2.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery2.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery3.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery3.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery4.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery4.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="gallery-one__item">
                            <img src="{{ asset('/images/gallery/gallery5.jpg') }}" alt="">
                            <a href="{{ asset('/images/gallery/gallery5.jpg') }}" class="img-popup"><i
                                    class="fa fa-plus"></i></a>
                        </div><!-- /.gallery-one__item -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container thm-swiper__slider -->
        </div><!-- /.container-fluid -->
    </section><!-- /.gallery-one -->
    <div class="lean_overlay"></div>
    <div class="modal show">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Я Вас не узнаю.</h5>
                    <button type="button" class="btn-close"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    Какой конфуз, кажется, вы не авторизованы. Для того, чтобы добавлять рецепты в избранное -
                    <a href="{{ route('register') }}">зарегистрируйтесь</a> или <a
                        href="{{ route('login') }}">войдите</a> в свой личный кабинет.
                </div>
                <div class="modal-footer">
                    <button type="button" class="thm-btn itsokay">Понятненько</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://rawgithub.com/TimSchlechter/bootstrap-tagsinput/master/src/bootstrap-tagsinput.js"></script>
    <script src="{{ asset('/js/typeahead.js') }}"></script>
    <script src="{{ asset('/js/search.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mo-js/0.288.2/mo.min.js"></script>
    <script src="{{ asset('/js/likes.js') }}"></script>
    <script type="text/javascript">
        $('.ingredientsListFiltered').hide();
        $('.ingredientsCategory').on("click", function() {
            let id = $(this).attr('rel');
            $('.ingredientsListFiltered').hide();
            $('div[data-category-id="' + id + '"]').fadeIn();
        });
    </script>
    <script type="text/javascript">
        function like() {
            $(".like").on('click', function() {
                let id = $(this).attr('rel');
                $.ajax({
                    url: "/recipe/like/" + id,
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        'id': id,
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        console.log(data);

                    },
                    error: function(xhr) {
                        if (typeof JSON.parse(xhr.responseText).message !== "undefined" &&
                            JSON
                            .parse(xhr.responseText).message == "Unauthenticated.") {
                            $('.lean_overlay').fadeIn();
                            $('.modal').fadeIn();
                            $(".btn-close").on('click', function() {
                                $('.modal').fadeOut();
                                $('.lean_overlay').fadeOut();
                            });
                            $(".itsokay").on('click', function() {
                                $('.modal').fadeOut();
                                $('.lean_overlay').fadeOut();
                            });

                        } else {
                            console.log(xhr.responseText);
                        }

                    }
                });
            });
        }
    </script>
    <script type="text/javascript">
        $(function() {
            $("#findByRecipeOptions").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route('findByRecipeOptions') }}',
                    type: 'GET',
                    dataType: 'JSON',
                    data: $("#findByRecipeOptions").serialize(),
                    success: function(data) {
                        let htmlArr = "";
                        data.forEach(recipe => {
                            let cooking_level = "";
                            switch (recipe.cooking_level) {
                                case 'easy':
                                    cooking_level = "Для новичков";
                                    break;
                                case 'medium':
                                    cooking_level = "Для опытных";
                                    break;
                                default:
                                    cooking_level = "Для профи";
                                    break;
                            }

                            htmlArr += `<div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="${recipe.img}" alt="фото рецепта">
                                    <div class="product-card__two-image-content">
                                        <a href="/recipe/show/${recipe.id}"><i class="organik-icon-visibility"></i></a>
                                        <a href="javascript:" rel="${recipe.id}" class="like"><i class="fa fa-heart"></i></a>
                                    </div><!-- /.product-card__two-image-content -->
                                </div><!-- /.product-card__two-image -->
                                <div class="product-card__two-content">
                                    <h3><a href="/recipe/show/${recipe.id}">${ recipe.name }</a></h3>

                                    <div class="row">
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/time.svg') }}" /><span>${ recipe.cooking_time }
                                                минут</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/chart.svg') }}" /><span>395 Ккал</span>
                                        </div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/smile.svg') }}" />
                                            <span>
                                                ${cooking_level}
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- /.product-card__two-content -->
                            </div><!-- /.product-card__two -->
                        </div>`;
                        });
                        $('.results .row').empty();
                        $('.results .row').prepend(htmlArr);
                        $('.quantityOfRecipes .quantity').text(data.length);
                        $('.alert-dismissible').fadeIn();
                        window.setTimeout(function() {
                            $('.alert-dismissible').fadeOut();
                        }, 2000);
                        like();
                        animationLikes();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });

            });
            $("#findByIngredients").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route('findByIngredients') }}',
                    type: 'GET',
                    dataType: 'JSON',
                    data: $("#findByIngredients").serialize(),
                    success: function(data) {
                        let htmlArr = "";
                        data.forEach(recipe => {
                            let cooking_level = "";
                            switch (recipe.cooking_level) {
                                case 'easy':
                                    cooking_level = "Для новичков";
                                    break;
                                case 'medium':
                                    cooking_level = "Для опытных";
                                    break;
                                default:
                                    cooking_level = "Для профи";
                                    break;
                            }

                            htmlArr += `<div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="${recipe.img}" alt="фото рецепта">
                                    <div class="product-card__two-image-content">
                                        <a href="/recipe/show/${recipe.id}"><i class="organik-icon-visibility"></i></a>
                                        <a href="javascript:" rel="${recipe.id}" class="like"><i class="fa fa-heart"></i></a>
                                    </div><!-- /.product-card__two-image-content -->
                                </div><!-- /.product-card__two-image -->
                                <div class="product-card__two-content">
                                    <h3><a href="/recipe/show/${recipe.id}">${ recipe.name }</a></h3>

                                    <div class="row">
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/time.svg') }}" /><span>${ recipe.cooking_time }
                                                минут</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/chart.svg') }}" /><span>395 Ккал</span>
                                        </div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/smile.svg') }}" />
                                            <span>
                                                ${cooking_level}
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- /.product-card__two-content -->
                            </div><!-- /.product-card__two -->
                        </div>`;
                        });
                        $('.results .row').empty();
                        $('.results .row').prepend(htmlArr);
                        $('.quantityOfRecipes .quantity').text(data.length);
                        $('.alert-dismissible').fadeIn();
                        window.setTimeout(function() {
                            $('.alert-dismissible').fadeOut();
                        }, 2000);
                        like();
                        animationLikes();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });

            });
            $("#findByRecipeName").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route('findByRecipeName') }}',
                    type: 'GET',
                    dataType: 'JSON',
                    data: $("#findByRecipeName").serialize(),
                    success: function(data) {
                        console.log(data);
                        let htmlArr = "";
                        data.forEach(recipe => {
                            let cooking_level = "";
                            switch (recipe.cooking_level) {
                                case 'easy':
                                    cooking_level = "Для новичков";
                                    break;
                                case 'medium':
                                    cooking_level = "Для опытных";
                                    break;
                                default:
                                    cooking_level = "Для профи";
                                    break;
                            }

                            htmlArr += `<div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="${recipe.img}" alt="фото рецепта">
                                    <div class="product-card__two-image-content">
                                        <a href="/recipe/show/${recipe.id}"><i class="organik-icon-visibility"></i></a>
                                        <a href="javascript:" rel="${recipe.id}" class="like"><i class="fa fa-heart"></i></a>
                                    </div><!-- /.product-card__two-image-content -->
                                </div><!-- /.product-card__two-image -->
                                <div class="product-card__two-content">
                                    <h3><a href="/recipe/show/${recipe.id}">${ recipe.name }</a></h3>

                                    <div class="row">
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/time.svg') }}" /><span>${ recipe.cooking_time }
                                                минут</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/chart.svg') }}" /><span>395 Ккал</span>
                                        </div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/smile.svg') }}" />
                                            <span>
                                                ${cooking_level}
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- /.product-card__two-content -->
                            </div><!-- /.product-card__two -->
                        </div>`;
                        });
                        $('.results .row').empty();
                        $('.results .row').prepend(htmlArr);
                        $('#findByRecipeName .quantityOfRecipes .quantity').text(data.length);
                        $('#findByRecipeName .alert-dismissible').fadeIn();
                        window.setTimeout(function() {
                            $('#findByRecipeName .alert-dismissible').fadeOut();
                        }, 2000);
                        like();
                        animationLikes();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });

            });
            $('a[id^="recipeCategory-"]').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    category_id = $(this).attr("id").replace("recipeCategory-", "");

                    $.ajax({
                        url: '{{ route('findByRecipeCategory') }}',
                        type: 'GET',
                        dataType: 'JSON',
                        data: {
                            'category_id': category_id,
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function(data) {
                            console.log(data);
                            let htmlArr = "";
                            data.forEach(recipe => {
                                let cooking_level = "";
                                switch (recipe.cooking_level) {
                                    case 'easy':
                                        cooking_level = "Для новичков";
                                        break;
                                    case 'medium':
                                        cooking_level = "Для опытных";
                                        break;
                                    default:
                                        cooking_level = "Для профи";
                                        break;
                                }

                                htmlArr += `<div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="${recipe.img}" alt="фото рецепта">
                                    <div class="product-card__two-image-content">
                                        <a href="/recipe/show/${recipe.id}"><i class="organik-icon-visibility"></i></a>
                                        <a href="javascript:" rel="${recipe.id}" class="like"><i class="fa fa-heart"></i></a>
                                    </div><!-- /.product-card__two-image-content -->
                                </div><!-- /.product-card__two-image -->
                                <div class="product-card__two-content">
                                    <h3><a href="/recipe/show/${recipe.id}">${ recipe.name }</a></h3>

                                    <div class="row">
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/time.svg') }}" /><span>${ recipe.cooking_time }
                                                минут</span></div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/chart.svg') }}" /><span>395 Ккал</span>
                                        </div>
                                        <div class="col-md-12 properties"><img
                                                src="{{ asset('/images/calculator/smile.svg') }}" />
                                            <span>
                                                ${cooking_level}
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- /.product-card__two-content -->
                            </div><!-- /.product-card__two -->
                        </div>`;
                            });
                            $('.results .row').empty();
                            $('.results .row').prepend(htmlArr);
                            $('#findByRecipeName .quantityOfRecipes .quantity').text(
                                data.length);
                            $('#findByRecipeName .alert-dismissible').fadeIn();
                            window.setTimeout(function() {
                                $('#findByRecipeName .alert-dismissible')
                                    .fadeOut();
                            }, 2000);
                            like();
                            animationLikes();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                })
            })
            like();
            animationLikes();
        });
    </script>
@endsection
