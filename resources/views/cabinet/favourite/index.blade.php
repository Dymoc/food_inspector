@extends('layouts.master')
@section('title')
    Любимые рецепты
@endsection
@section('styles')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Любимые рецепты</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Любимые рецепты</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="profile_info">
        <div class="container">
            <div class="row">

                <x-left-cabinet-sidebar></x-left-cabinet-sidebar>

                <div class="col-xl-8 col-lg-8">

                    <div class="popular-recipes">
                        <div class="row">
                            @foreach ($recipes as $recipe)
                                <div class="col-lg-4 col-md-6 mb-20">
                                    <div class="product-card__two" style="height: 100%">
                                        <div class="product-card__two-image" style="height: 50%;">
                                            <img src="{{ $recipe->img }}" alt="фото рецепта" style="height: 100%;">
                                            <div class="product-card__two-image-content">
                                                <a href="{{ route('recipe.show', ['id' => $recipe]) }}"><i
                                                        class="organik-icon-visibility"></i></a>
                                                <a href="javascript:" rel="{{ $recipe->id }}" class="like"><i
                                                        class="fa fa-heart" style="color: rgb(204, 57, 123);"></i></a>
                                            </div><!-- /.product-card__two-image-content -->
                                        </div><!-- /.product-card__two-image -->
                                        <div class="product-card__two-content" style="height: 50%">
                                            <h3><a
                                                    href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->name }}</a>
                                            </h3>

                                            {{-- <div class="row">
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
                                                </div> --}}
                                        </div><!-- /.product-card__two-content -->
                                    </div><!-- /.product-card__two -->
                                </div>
                            @endforeach
                        </div><!-- /.row -->
                    </div>

                    <div class="row mt-40">

                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact-one -->







@endsection
@section('scripts')
    <script type="text/javascript">
        $(function() {
            $(".like").on('click', function() {
                var id = $(this).attr('rel');

                $.ajax({
                    url: '/cabinet/favourite/' + id,
                    type: 'DELETE',
                    dataType: 'JSON',
                    data: {
                        'id': id,
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function() {
                        location.reload();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });

            });
        });
    </script>
@endsection
