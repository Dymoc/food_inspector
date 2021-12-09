@extends('layouts.master')
@section('title')
    Списки продуктов
@endsection
@section('styles')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Списки продуктов</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Списки продуктов</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="profile_info">
        <div class="container">
            <div class="row">

                <x-left-cabinet-sidebar></x-left-cabinet-sidebar>

                <div class="col-xl-8 col-lg-8">
                    <h5>Ваши списки</h5>
                    <div class="row gray-border-bottom pa-40">
                        @forelse($lists as $list)
                            <p>{{ $list->name }} <a href="">Просмотр</a> <a href="">Редактировать</a> <a href="">Удалить</a></p>
                            <ul>
                                @forelse($list->ingredientslists as $ingredientlist)

                                    <li>{{ $ingredientlist->ingredient->name }}</li>
                                @empty
                                    В этом списке пока нет продуктов
                                @endforelse
                            </ul>
                        @empty
                            У вас пока нет ни одного списка
                        @endforelse
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact-one -->







@endsection
@section('scripts')

@endsection
