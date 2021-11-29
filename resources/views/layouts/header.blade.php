<header class="main-header">
    <div class="topbar">
        <div class="container">
            <div class="main-logo">
                <a href="index.html" class="logo">
                    <img src="{{ asset('/images/FoodInspector.png') }}" width="105" alt="">
                </a>
                <div class="mobile-nav__buttons">
                    <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                    <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                </div><!-- /.mobile__buttons -->

                <span class="fa fa-bars mobile-nav__toggler"></span>
            </div><!-- /.main-logo -->

            <div class="topbar__left">

                <div class="topbar__info">
                    <i class="organik-icon-email"></i>
                    <p>По вопросам рекламы <a href="mailto:info@organik.com">info@foodinspector.ru</a></p>
                </div><!-- /.topbar__info -->
            </div><!-- /.topbar__left -->
            <div class="topbar__right">
                <div class="topbar__info">
                    <i class="organik-icon-calling"></i>
                    <p>Телефон <a href="tel:+74951230101">+7 (495) 123 01 01</a></p>
                </div><!-- /.topbar__info -->
                <div class="topbar__buttons">
                    <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>

                </div><!-- /.topbar__buttons -->
            </div><!-- /.topbar__left -->

        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <nav class="main-menu">
        <div class="container">
            <div class="main-menu__login">
                <a href="#"><i class="organik-icon-user"></i>Личный кабинет</a>
            </div><!-- /.main-menu__login -->
            <ul class="main-menu__list">
                <li class="dropdown">
                    <a href="{{route('index')}}">Главная</a>

                </li>
                <li>
                    <a href="#">Популярные рецепты</a>
                </li>
                <li>
                    <a href="{{route('about')}}">О проекте</a>

                </li>
                <li class="dropdown"><a href="{{route('news')}}">Новости</a>

                </li>
            </ul>

        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header><!-- /.main-header -->
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->