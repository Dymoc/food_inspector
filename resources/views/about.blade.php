@extends('layouts.master')
@section('title')
    О проекте
@endsection
@section('styles')

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>О проекте</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('index')}}">Главная</a></li>
                <li>/</li>
                <li><span>О проекте</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="about-one">
        <img src="{{ asset('/images/shapes/about-leaf-1-1.png') }}" alt="" class="about-one__shape-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <img src="{{ asset('/images/resources/about-1-1.png') }}" class="img-fluid" alt="">
                </div><!-- /.col-md-12 -->
                <div class="col-md-12 col-lg-6">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <div class="block-title__decor"></div><!-- /.block-title__decor -->
                            <h3>Проект для холостяков FoodInspector</h3>
                        </div><!-- /.block-title -->
                        <p>В вашем холодильнике всегда может что-то заваляться. Совершенно необязательно покупать лишние
                            продукты, для того чтобы что-то себе приготовить.
                            Позвольте FoodInspector сделать выбор за вас и предложить максимальное количество возможных
                            вариантов рецептов из того, что у вас уже есть!</p>
                        <p>Проект создан в рамках обучения на образовательной платформе <a
                                href="https://gb.ru">GeekBrains</a>.</p>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="about-one__box">
                                    <h3><i class="fa fa-check-circle"></i> Преимущество 1</h3>
                                    <p>Lorem ipsum is free do sit</p>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="about-one__box">
                                    <h3><i class="fa fa-check-circle"></i> Преимущество 2</h3>
                                    <p>Lorem ipsum is free do sit</p>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="about-one__box">
                                    <h3><i class="fa fa-check-circle"></i> Преимущество 3</h3>
                                    <p>Lorem ipsum is free do sit</p>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-lg-6">
                                <div class="about-one__box">
                                    <h3><i class="fa fa-check-circle"></i> Преимущество 4</h3>
                                    <p>Lorem ipsum is free do sit</p>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="testimonials-one">
        <div class="testimonials-one__head">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__decor"></div><!-- /.block-title__decor -->
                    <h3>Отзывы о FoodInspector</h3>
                </div><!-- /.block-title -->
            </div><!-- /.container -->
        </div><!-- /.testimonials-one__head -->
        <div class="container">
            <div class="thm-tiny__slider" id="testimonials-one-box" data-tiny-options='{
            "container": "#testimonials-one-box",
            "items": 1,
            "slideBy": "page",
            "gutter": 0,
            "mouseDrag": true,
            "autoplay": true,
            "nav": false,
            "controlsPosition": "bottom",
            "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
            "autoplayButtonOutput": false,
            "responsive": {
                "640": {
                  "items": 2,
                  "gutter": 30
                },
                "992": {
                  "gutter": 30,
                  "items": 3
                },
                "1200": {
                  "disable": true
                }
              }
        }'>
                <div>
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('/images/resources/testi-1-1.png') }}" alt="">
                        </div><!-- /.testimonials-one__image -->
                        <div class="testimonials-one__content">
                            <p>I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                                refreshing. Neque porro est qui dolorem ipsum.</p>
                            <h3>Наталья Иванова</h3>
                            <span>Пользователь</span>
                        </div><!-- /.testimonials-one__content -->
                    </div><!-- /.testimonials-one__single -->
                </div>
                <div>
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('/images/resources/testi-1-2.png') }}" alt="">
                        </div><!-- /.testimonials-one__image -->
                        <div class="testimonials-one__content">
                            <p>I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                                refreshing. Neque porro est qui dolorem ipsum.</p>
                            <h3>Дмитрий Петров</h3>
                            <span>Пользователь</span>
                        </div><!-- /.testimonials-one__content -->
                    </div><!-- /.testimonials-one__single -->
                </div>
                <div>
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('/images/resources/testi-1-3.png') }}" alt="">
                        </div><!-- /.testimonials-one__image -->
                        <div class="testimonials-one__content">
                            <p>I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                                refreshing. Neque porro est qui dolorem ipsum.</p>
                            <h3>Иван Сидоров</h3>
                            <span>Пользователь</span>
                        </div><!-- /.testimonials-one__content -->
                    </div><!-- /.testimonials-one__single -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->

    <section class="team-one">
        <img src="{{ asset('/images/shapes/team-shape-1.png') }}" alt="" class="team-one__shape-1">
        <img src="{{ asset('/images/shapes/team-shape-2.png') }}" alt="" class="team-one__shape-2">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__decor"></div><!-- /.block-title__decor -->

                <h3>Наша Команда</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('/images/team/team-1-1.png') }}" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3>Данил Лебедев</h3>
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-4 col-lg-4">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('/images/team/team-1-2.png') }}" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3>Екатерина Дмитриева</h3>
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-4 col-lg-4">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('/images/team/team-1-3.png') }}" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3>Духновский Александр</h3>
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-4 col-lg-4">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('/images/team/team-1-4.png') }}" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3>Алина Монакова</h3>
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-4 col-lg-4">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('/images/team/team-1-1.png') }}" alt="">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <h3>Роман Костырин</h3>
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-one -->


@endsection
@section('scripts')

@endsection
