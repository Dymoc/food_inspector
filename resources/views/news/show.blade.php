@extends('layouts.master')
@section('title')
    {{ $news->title }}
@endsection
@section('styles')

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{ $news->title }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>/</li>
                <li><span>{{ $news->title }}</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="blog-card__image blog-details__image">
                        <div class="blog-card__date">{{ $news->created_at->format('d-m-Y') }}</div>
                        <!-- /.blog-card__date -->
                        <img src="{{ asset($news->img) }}" class="img-fluid" alt="{{ $news->title }}">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__meta">
                        <a href="{{ route('news.show', $news) }}"><i class="far fa-user-circle"></i> by Admin</a>
                    </div><!-- /.blog-card__meta -->
                    <div class="blog-details__content blog-card__content">
                        <h3>{{ $news->title }}</h3>
                        <p>{{ $news->description }}</p>
                    </div><!-- /.blog-details__content -->


                </div><!-- /.col-md-12 col-lg-9 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-sidebar">
                        <div class="blog-sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="organik-icon-magnifying-glass"></i></button>
                            </form>
                        </div><!-- /.blog-sidebar__search -->
                        <div class="blog-sidebar__posts">
                            <h3>Свежие новости</h3>
                            <ul>
                            @foreach($recentNews as $rn)
                                <li>
                                    <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    <span>{{ $rn->created_at->format('j F, Y') }}</span>
                                    <h4><a href="{{ route('news.show', $rn) }}">{{$rn->title}}</a></h4>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- /.blog-sidebar__posts -->
                        <div class="blog-sidebar__categories">
                            <h3>Категории</h3>
                            <ul>
                                @foreach ($categories as $c)
                                    <li>
                                        <a href="#">{{$c->name}} <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- /.blog-sidebar__categories -->
                        
                    </div><!-- /.blog-sidebar -->
                </div><!-- /.col-md-12 col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->
@endsection
@section('scripts')

@endsection
