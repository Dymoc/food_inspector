@extends('layouts.master')
@section('title')
    Новости
@endsection
@section('styles')

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Новости</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Новости</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <div class="blog-page">
        <div class="container">
            <div class="row">
                @forelse($news as $n)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <div class="blog-card__date">{{ $n->created_at->format('d-m-Y') }}</div>
                                <!-- /.blog-card__date -->
                                <img src="{{ asset($n->img) }}" alt="{{ $n->title }}">
                                <a href="{{ route('news.show', $n) }}"></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="{{ route('news.show', $n) }}"><i class="far fa-user-circle"></i>
                                        Администратор</a>
                                </div><!-- /.blog-card__meta -->
                                <h3><a href="{{ route('news.show', $n) }}">{{ $n->title }}</a></h3>
                                <p>{{ mb_strimwidth($n->description, 0, 150, "...") }}</p>
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                @empty
                <div class="col-sm-12 col-md-12 col-lg-12">
                    Новостей нет
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                @endforelse
            </div><!-- /.row -->
            <ul class="list-unstyled post-pagination d-flex justify-content-center">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul><!-- /.post-pagination -->
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
@endsection
@section('scripts')

@endsection
