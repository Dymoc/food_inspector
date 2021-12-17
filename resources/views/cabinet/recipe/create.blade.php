@extends('layouts.master')
@section('title')
    Добавить рецепт
@endsection
@section('styles')

@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('/images/backgrounds/bg1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Добавить рецепт</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li>/</li>
                <li><span>Добавить рецепт</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="profile_info">
        <div class="container">
            <div class="row">

                <x-left-cabinet-sidebar></x-left-cabinet-sidebar>

                <div class="col-xl-8 col-lg-8">
                    <h5>Добавление рецепта</h5>
                    <div class="row gray-border-bottom pa-40">
                        <form method="post" id="addRecipe" class="change-profile-form contact-one__form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="img" placeholder="Фото">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Название рецепта"
                                        value="{{ old('name') }}">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="number" placeholder="Время приготовления в минутах" name="cooking_time"
                                        value="{{ old('cooking_time') }}">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="number" name="weight" placeholder="Вес готового продукта"
                                        value="{{ old('weight') }}" step=".01">
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <select class="selectpicker" name="cooking_level">
                                        <option value="0">Сложность рецепта</option>
                                        <option value="easy" @if (old('cooking_level') == 'easy') selected @endif>Для новичков</option>
                                        <option value="medium" @if (old('cooking_level') == 'medium') selected @endif>Для опытных</option>
                                        <option value="hard" @if (old('cooking_level') == 'hard') selected @endif>Для профи</option>

                                    </select>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <select class="selectpicker" name="type_id">
                                        <option value="0">Тип блюда</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}" @if (old('type_id') == $type->id) selected @endif>{{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <select class="selectpicker" name="category_id">
                                        <option value="0">Категория блюда</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>
                                                {{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div><!-- /.col-md-12 -->
                                <div class="calculator shapes">
                                    <img src="{{ asset('/images/shapes/contact-bg-1-1.png') }}" alt=""
                                        class="contact-one__shape-1">
                                    <img src="{{ asset('/images/shapes/contact-bg-1-2.png') }}" alt=""
                                        class="contact-one__shape-2">
                                    <div class="col-md-12">
                                        <h5>Игредиенты</h5>
                                        <input type="text" class="form-control search-input typeahead inputInLists" name="q"
                                            autocomplete="off" placeholder="Ищу...">
                                        <div class="row small-font">
                                            @foreach ($ingredientsCategories as $category)
                                                <div class="col-md-4 flexCategoriesButton">
                                                    <a class="ingredientsCategory"
                                                        rel="{{ $category->id }}">{{ $category->name }}</a>
                                                </div>
                                            @endforeach
                                            <div class="row mt-10 small-font" style="width: 100%;margin: 10px 0;">
                                                @foreach ($ingredientList as $ingredient)
                                                    <div class="col-md-4 ingredientsListFiltered"
                                                        data-category-id="{{ $ingredient->category->id }}">
                                                        <div class="form-group "> <input type="checkbox"
                                                                id="ingredient{{ $ingredient->id }}" name="ingredients[]"
                                                                value="{{ $ingredient->id }}"><label class='small-font'
                                                                for="ingredient{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="display: flex;align-items: center;">
                                            <h5>Шаги рецепта</h5>
                                        </div>
                                        <div class="col-md-6" style="display: flex;justify-content: flex-end;"><button
                                                class="thm-btn add-step">Добавить шаг</button></div>
                                    </div>

                                </div><!-- /.col-md-12 -->
                                <div class="col-md-4">
                                    <input type="text" name="step_number[]" placeholder="Номер шага" value="1" disabled>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <input type="text" name="description[]" placeholder="Описание шага"
                                        value="{{ old('description1') }}">
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <input type="file" name="step_img[]" placeholder="Фото шага" value="">
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-12 text-right beforestart">
                                    <button type="submit" class="thm-btn">Сохранить</button>
                                </div><!-- /.text-right -->
                            </div><!-- /.row -->
                        </form>
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
    <script>
        $(function() {
            $(".add-step").on('click', function(e) {
                e.preventDefault();
                let stepNumber = Number($("input[name^='step_number']").last().attr('value')) + 1;
                let htmlElements = `                                <div class="col-md-4">
                                    <input type="text" name="step_number" placeholder="Номер шага" value="${stepNumber}" disabled>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <input type="text" name="description[]" placeholder="Описание шага" value="">
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <input type="file" name="step_img[]" placeholder="Фото шага" value="">
                                </div><!-- /.col-md-4 -->`;
                $(".beforestart").before(htmlElements);
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('.bootstrap-tagsinput').addClass('inputInLists');
        });
    </script>
    <script type="text/javascript">
        $(function() {

            $("#addRecipe").on('submit', function(e) {
                e.preventDefault();
                let error = 0;

                let name = $('input[name="name"]').val();
                let cooking_time = $('input[name="cooking_time"]').val();
                let weight = $('input[name="weight"]').val();
                let cooking_level = $('select[name="cooking_level"] option:selected').val();
                let type_id = $('select[name="type_id"] option:selected').val();
                let category_id = $('select[name="category_id"] option:selected').val();
                let description = $('input[name="description[]"]');
                let ingredients = $('input[name="ingredients[]"]');
                if ($('input[name="img"]').get(0).files.length === 0) {
                    alert("Пожалуйста, загрузите фото рецепта");
                    error = 1;
                }
                description.each(function(index) {
                    if ($(this).val() == "") {
                        alert("Пожалуйста, заполните все описания шагов")
                        error = 1;
                    }
                });
                let ingredients_checked = 0;
                ingredients.each(function(index) {
                    if ($(this).is(":checked")) {
                        ingredients_checked++;

                    }
                });
                if (ingredients_checked < 2) {
                    alert("В рецепте должно быть хотя бы 2 ингредиента");
                    error = 1;
                }
                if (name == "") {
                    alert("Пожалуйста, заполните поле Название");
                    error = 1;
                }
                if (cooking_time == "") {
                    alert("Пожалуйста, заполните поле Время приготовления");
                    error = 1;
                }
                if (weight == "") {
                    alert("Пожалуйста, заполните поле Вес готового продукта");
                    error = 1;
                }
                if (cooking_level == "0") {
                    alert("Пожалуйста, выберите сложность рецепта");
                    error = 1;
                }
                if (type_id == "0") {
                    alert("Пожалуйста, выберите тип блюда");
                    error = 1;
                }
                if (category_id == "0") {
                    alert("Пожалуйста, выберите категорию рецепта");
                    error = 1;
                }
                console.log(error);

                var form_data = new FormData(document.getElementById('addRecipe'));
                if (error === 0) {
                    $.ajax({
                        url: '{{ route('cabinet.recipe.store') }}',
                        type: 'POST',
                        // dataType: 'JSON',
                        data: form_data,
                        contentType: false, // Important.
                        processData: false, // Important.
                        success: function(data) {
                            console.log(data);
                            window.location.href = "{{ route('cabinet.recipe.index') }}";
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }



            });

        });
    </script>
@endsection
