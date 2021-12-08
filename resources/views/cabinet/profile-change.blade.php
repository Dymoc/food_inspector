@extends('layouts.master')
@section('title')
    Личный кабинет
@endsection
@section('styles')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Личный кабинет</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Редактировать профиль</span></li>
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
                                <a href="#"><i class="fa fa-user"></i>Изменить профиль <i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-list-alt"></i>Списки продуктов <i
                                        class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-heart"></i>Любимые рецепты <i
                                        class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-map-marker-alt"></i>Заказать продукты <i
                                        class="fa fa-angle-right"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-credit-card"></i>Подписка на сервис <i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <h5>Изменение профиля</h5>
                    <div class="row gray-border-bottom pa-40">
                        <div class="col-md-4">
                            <img class="user-img changeble_img" src="@if ($userProfile->avatar == ''){{ Storage::disk('public')->url('users/default.png') }}@else{{ Storage::disk('public')->url($userProfile->avatar) }}@endif" alt="">
                            <i class="fa fa-upload"></i>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div>
                                    <h4>{{ $user->name }}</h4>
                                    <p>На сайте c {{ $user->created_at->format('d.m.Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-12 contact-info">
                            <h4>Контактные данные</h4>
                            <div class="row">



                                <form method="post"
                                    action="{{ route('cabinet.profile.update', ['profile' => $userProfile, 'user' => $user]) }}"
                                    class="change-profile-form contact-one__form" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row">

                                        <input type="file" name="avatar" placeholder="Аватар"
                                            value="{{ $userProfile->avatar }}" style="display:none">

                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Логин" value="{{ $user->name }}">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Email адрес" name="email"
                                                value="{{ $user->email }}">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" name="firstname" placeholder="Имя"
                                                value="@if ($userProfile->firstname !== ''){{ $userProfile->firstname }}@endif">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" name="lastname" placeholder="Фамилия"
                                                value="@if ($userProfile->lastname !== ''){{ $userProfile->lastname }}@endif">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="date" name="birthday" placeholder="Дата рождения"
                                                value="{{ $userProfile->birthday }}">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Телефон" name="phone"
                                                value="@if ($userProfile->phone !== ''){{ $userProfile->phone }}@endif">
                                        </div><!-- /.col-md-6 -->

                                        <div class="col-md-12">
                                            <input type="text" name="adress" placeholder="Адрес"
                                                value="@if ($userProfile->adress !== ''){{ $userProfile->adress }}@endif">
                                        </div><!-- /.col-md-12 -->


                                        <div class="col-md-12">
                                            <select class="selectpicker" name="preferences">
                                                <option value="" @if ($userProfile->preferences === '') selected @endif>Предпочтения</option>
                                                <option value="всеядный" @if ($userProfile->preferences === 'всеядный') selected @endif>Всеядный</option>
                                                <option value="на посту" @if ($userProfile->preferences === 'на посту') selected @endif>На посту</option>
                                                <option value="трезвенник" @if ($userProfile->preferences === 'трезвенник') selected @endif>Трезвенник</option>
                                                <option value="вегетарианец" @if ($userProfile->preferences === 'вегетарианец') selected @endif>Вегетарианец</option>

                                            </select>
                                        </div><!-- /.col-md-12 -->
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="thm-btn">Сохранить</button>
                                        </div><!-- /.text-right -->
                                    </div><!-- /.row -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
    </section><!-- /.contact-one -->







@endsection
@section('scripts')
    <script>
        $(function() {
            $(".changeble_img").on('click', function(e) {
                $('input[name="avatar"]').click();
            });
        });
    </script>
@endsection
