@extends('layouts.master')
@section('title')
    Зарегистрироваться
@endsection
@section('styles')

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2> Личный кабинет </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Регистрация</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <div class="login-register-area pt-95 pb-100 mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto gray-border-all pl-30 pr-30">

                    <h4 class="mt-30"> Зарегистрироваться </h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="email">
                                Имя
                            </label>

                            <input class="" id="name" type="text" name="name" required="required"
                                autofocus="autofocus" value="{{ old('name') }}">
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label for="email">
                                Email
                            </label>

                            <input class="" id="email" type="email" name="email" required="required"
                                autofocus="autofocus" value="{{ old('email') }}">
                        </div>


                        <!-- Password -->
                        <div class="mt-4">
                            <label for="password">
                                Пароль
                            </label>
                            <input class="" id="password" type="password" name="password" required="required"
                                autocomplete="new-password">
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <label for="password_confirmation">
                                Повторите пароль
                            </label>
                            <input class="" id="password_confirmation" type="password"
                                name="password_confirmation" required="required">
                        </div>
                        <div class="button-box mt-50">
                            <button type="submit" class="thm-btn">Зарегистрироваться</button>
                        </div>
                    </form>
                    <div class="title-horizontal-line mt-30">
                        <span>
                            Уже зарегистрированы?
                        </span>
                    </div>
                    <div class="button-box mt-30 mb-40">
                        <button onclick="window.location.href='{{ route('login') }}'" type="submit"
                            class="thm-btn">Войти</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
