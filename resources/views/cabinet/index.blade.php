@extends('layouts.master')
@section('title')
    Личный кабинет
@endsection
@section('styles')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
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

                <x-left-cabinet-sidebar></x-left-cabinet-sidebar>

                <div class="col-xl-8 col-lg-8">
                    <h5>Профиль</h5>
                    <div class="row gray-border-bottom pa-40">
                        <div class="col-md-4"><img class="user-img"
                                src="{{ Storage::disk('public')->url($userProfile->avatar) }}" alt=""></div>
                        <div class="col-md-6">
                            <div class="row">
                                <div>
                                    <h4>{{ $user->name }}</h4>
                                    <p>На сайте c {{ $user->created_at->format('d.m.Y') }}</p>
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
                            <p>{{ $userProfile->phone }}</p>
                            <p>{{ $user->email }}</p>
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
