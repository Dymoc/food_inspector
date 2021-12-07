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
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Профиль</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="profile_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="profile_info-sidebar__categories">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-user"></i>Изменить профиль <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-list-alt"></i>Списки продуктов <i class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-heart"></i>Любимые рецепты <i class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-map-marker-alt"></i>Заказать продукты <i class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-credit-card"></i>Подписка на сервис <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <h5>Профиль</h5>
                    <div class="row gray-border-bottom pa-40">
                        <div class="col-md-4"><img class="user-img"
                                src="{{ asset('/images/resources/testi-1-1.png') }}" alt=""></div>
                        <div class="col-md-6">
                            <div class="row">
                                <div>
                                    <h4>Марина Иванова</h4>
                                    <p>На сайте 2 года</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="bottom-user-icons">

                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <i class="fa fa-trophy"></i>
                                    <span>20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-12 contact-info">
                            <h4>Контактные данные</h4>
                            <p>+7 925 111 12 13</p>
                            <p>test@gmail.com</p>
                            <a href="" class="change-pwd">Сменить пароль</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact-one -->







@endsection
@section('scripts')

@endsection
