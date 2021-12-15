@extends('layouts.master')
@section('title')
    Популярные рецепты
@endsection
@section('styles')

@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Популярные рецепты</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Популярные рецепты</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <div class="blog-page">
        <div class="container">
            <div class="results mt-60">
                <div class="row">
                    @foreach ($recipeList as $recipe)
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card__two">
                                <div class="product-card__two-image">
                                    <img src="{{ $recipe->img }}" alt="фото рецепта">
                                    <div class="product-card__two-image-content" >
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
            </div><!-- /.results -->
            <ul class="list-unstyled post-pagination d-flex justify-content-center">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul><!-- /.post-pagination -->
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mo-js/0.288.2/mo.min.js"></script>
    <script src="{{ asset('/js/likes.js') }}"></script>
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
                        animationLikes();
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
               
                like();
                
            });
        </script>
@endsection
