@extends('layouts.master')
@section('title')
    {{ $recipe->name }}
@endsection
@section('styles')

@endsection
@section('content')




    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2> {{ $recipe->name }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span> {{ $recipe->name }}</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="product_detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="product_detail_image">
                        <img src="{{ $recipe->img }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="product_detail_content">
                        <div class="naming_recipe">
                            <h2> {{ $recipe->name }}</h2>
                            <a href="javascript:" rel="{{ $recipe->id }}"
                                class="like"><i class="fa fa-heart"></i></a>
                        </div>

                        <div class="product_detail_review_box">
                            <div>{{ $recipe->cooking_time }} минут</div>
                            <div>395 Ккал</div>
                            <div>@switch( $recipe->cooking_level )
                                    @case(" easy")
                                        Для новичков
                                    @break
                                    @case(" medium")
                                        Для опытных
                                    @break
                                    @default
                                        Для профи
                                @endswitch
                            </div>
                        </div>
                        <div class="product_detail_text">
                            <h2>Ингредиенты</h2>
                            <ul>
                                @foreach ($ingredientsList as $ingredient)
                                    <li>{{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <ul class="list-unstyled category_tag_list">
                            <li><span>Тип блюда:</span>
                                @foreach ($recipe_type as $type)
                                    {{ $type->name }}
                                @endforeach
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">

                    <div class="product-tab-box tabs-box">
                        <h2 class="mb-30 talign-center">Пошаговый рецепт</h2>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="desc">
                                <div class="product-details-content">
                                    <div class="desc-content-box">
                                        @foreach ($recipe_steps as $step)
                                            <div class="row mb-20">
                                                <div class="col-md-4"><img src="{{ $step->img }}" alt=""></div>
                                                <div class="col-md-8">
                                                    <h2>Шаг {{ $step->step_number }}</h2>
                                                    <p>
                                                        {{ $step->description }}<br />
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        animationLikesForShow();
                        console.log(data);

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
