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
            <h2>Редактирование {{ $list->name }}</h2>
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

                <div class="col-xl-7 col-lg-7">
                    <div class="row gray-border-bottom pb-40">
                        <form method="post" class="contact-one__form col-md-12"
                            action="{{ route('cabinet.lists.update', ['list' => $list]) }}">
                            @csrf
                            @method('put')
                            <div class="col-md-12">
                                <input type="text" name="name" placeholder="Название списка" value="{{ $list->name }}">
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" class="thm-btn">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-12">
                            <h5>Игредиенты</h5>
                            <input type="text" class="form-control search-input typeahead" name="q" autocomplete="off"
                                placeholder="Ищу...">
                            <div class="row">
                                @foreach ($ingredientsCategories as $category)
                                    <div class="col-md-3">
                                        <a class="ingredientsCategory"
                                            rel="{{ $category->id }}">{{ $category->name }}</a>
                                    </div>
                                @endforeach
                                <form method="POST" id="findByIngredients"
                                    action="{{ route('cabinet.lists.updateingredients', ['list' => $list]) }}">
                                    <div class="row mt-10">
                                        @csrf
                                        @method('put')
                                        @foreach ($ingredientList as $ingredient)
                                            <div class="col-md-3 ingredientsListFiltered"
                                                data-category-id="{{ $ingredient->category->id }}">
                                                <div class="form-group"> <input type="checkbox"
                                                        id="ingredient{{ $ingredient->id }}" name="ingredients[]"
                                                        value="{{ $ingredient->id }}"><label
                                                        for="ingredient{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="thm-btn">Сохранить</button>
                                        </div>
                                   


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact-one -->
@endsection
@section('scripts')
    <script src="https://rawgithub.com/TimSchlechter/bootstrap-tagsinput/master/src/bootstrap-tagsinput.js"></script>
    <script src="{{ asset('/js/typeahead.js') }}"></script>
    <script src="{{ asset('/js/search.js') }}"></script>
    <script type="text/javascript">
        $('.ingredientsListFiltered').hide();
        $('.ingredientsCategory').on("click", function() {
            let id = $(this).attr('rel');
            $('.ingredientsListFiltered').hide();
            $('div[data-category-id="' + id + '"]').fadeIn();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            @foreach ($list->ingredientslists as $ingredientlist)
                $('.search-input').tagsinput('add', { id: "{{ $ingredientlist->ingredient->id }}", name:
                "{{ $ingredientlist->ingredient->name }}" });
            @endforeach
        });
    </script>
@endsection
