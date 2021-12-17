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
                        <form method="post" action="{{ route('cabinet.recipe.store') }}"
                            class="change-profile-form contact-one__form" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="img" placeholder="Фото">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Название рецепта" value="{{old('name')}}">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="number" placeholder="Время приготовления в минутах" name="cooking_time"
                                        value="{{old('cooking_time')}}">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="number" name="weight" placeholder="Вес готового продукта" value="{{old('weight')}}"
                                        step=".01">
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <select class="selectpicker" name="cooking_level">
                                        <option value=""  @if(old('cooking_level')=="") selected @endif>Сложность рецепта</option>
                                        <option value="easy" @if(old('cooking_level')=="easy") selected @endif>Для новичков</option>
                                        <option value="medium" @if(old('cooking_level')=="medium") selected @endif>Для опытных</option>
                                        <option value="hard" @if(old('cooking_level')=="hard") selected @endif>Для профи</option>

                                    </select>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <select class="selectpicker" name="type_id">
                                        <option value="" @if(old('type_id')=="") selected @endif>Тип блюда</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}" @if(old('type_id')==$type->id) selected @endif>{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <select class="selectpicker" name="category_id">
                                        <option value=""  @if(old('category_id')=="") selected @endif>Категория блюда</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if(old('category_id')==$category->id) selected @endif>{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div><!-- /.col-md-12 -->
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
                                    <input type="text" name="description[]" placeholder="Описание шага" value="{{old('description1')}}">
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
    <script>
        $(function() {
            $(".add-step").on('click', function(e) {
                e.preventDefault();
                let stepNumber = Number($("input[name^='step_number']").last().attr('value'))+1;
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
@endsection
