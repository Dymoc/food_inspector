@extends('layouts.master')
@section('title')
    Ваши рецепты
@endsection
@section('styles')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Ваши рецепты</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Ваши рецепты</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="profile_info">
        <div class="container">
            <div class="row">

                <x-left-cabinet-sidebar></x-left-cabinet-sidebar>

                <div class="col-xl-8 col-lg-8">
                    <div class="row">
                        <div class="col-md-6" style="display: flex;align-items: center;">
                            <h5>Ваши рецепты</h5>
                        </div>
                        <div class="col-md-6" style="display: flex;justify-content: flex-end;"><button class="thm-btn" onclick="window.location.href='{{route('cabinet.recipe.create')}}'">Добавить новый</button></div>
                    </div>
                    <div class="row gray-border-bottom pt-40 pb-40">

                        @foreach ($recipes as $recipe)
                            <div class="col-lg-4 col-md-6 mb-20">
                                <div class="product-card__two" style="height: 100%">
                                    <div class="product-card__two-image" style="height: 50%;">
                                        <img src="{{ asset($recipe->img) }}" alt="фото рецепта" style="height: 100%;">
                                        <div class="product-card__two-image-content">
                                            <a href="{{ route('recipe.show', ['id' => $recipe]) }}"><i
                                                    class="organik-icon-visibility"></i></a>
                                            <a href="javascript:" rel="{{ $recipe->id }}" class="like"><i
                                                    class="fa fa-heart" style="color: rgb(204, 57, 123);"></i></a>
                                        </div><!-- /.product-card__two-image-content -->
                                    </div><!-- /.product-card__two-image -->
                                    <div class="product-card__two-content" style="height: 50%">
                                        <h3><a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->name }}</a>
                                        </h3>

                                    </div><!-- /.product-card__two-content -->
                                </div><!-- /.product-card__two -->
                            </div>
                        @endforeach


                    </div>
                    <div class="row pt-40">

                    </div>
                </div>
            </div><!-- /.container -->
    </section><!-- /.contact-one -->
    <div class="lean_overlay"></div>
    <div class="modal show">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Удаление списка</h5>
                    <button type="button" class="btn-close"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    Вы уверены, что хотите удалить список?
                </div>
                <div class="modal-footer">
                    <button type="button" class="thm-btn itsokay">Уверен</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function() {
            $(".delete").on('click', function() {
                var id = $(this).attr('rel');
                $('.lean_overlay').fadeIn();
                $('.modal').fadeIn();
                $(".itsokay").on('click', function() {
                    $.ajax({
                        url: '/cabinet/lists/' + id,
                        type: 'DELETE',
                        dataType: 'JSON',
                        data: {
                            'id': id,
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function() {
                            alert("Список удален");
                            location.reload();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });
                $(".btn-close").on('click', function() {
                    $('.modal').fadeOut();
                    $('.lean_overlay').fadeOut();
                });

            });
            $(".accordion-button").on('click', function() {
                $(this).parent().parent().children('.accordion-collapse').slideToggle();
                if ($(this).children('span').children('.fa').hasClass('fa-chevron-right')) {
                    $(this).children('span').children('.fa.fa-chevron-right').removeClass(
                        'fa-chevron-right').addClass('fa-chevron-down');
                } else {
                    $(this).children('span').children('.fa.fa-chevron-down').removeClass('fa-chevron-down')
                        .addClass('fa-chevron-right');
                }

            });
            $(".slideToggle").on('click', function() {
                $(this).parent().parent().parent().children('.accordion-collapse').slideToggle();
                if ($(this).children('.fa').hasClass('fa-chevron-right')) {
                    $(this).children('.fa').removeClass('fa-chevron-right').addClass('fa-chevron-down');
                } else {
                    $(this).children('.fa').removeClass('fa-chevron-down').addClass('fa-chevron-right');
                }

            });

        });
    </script>
@endsection
