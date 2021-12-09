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
                    <div class="row gray-border-bottom pt-40 pb-40">
                        <div class="col-md-12">

                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                @forelse($lists as $list)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button">
                                                {{ $list->name }}
                                            </button>
                                            <span>
                                                <a href="{{ route('cabinet.lists.edit', ['list' => $list]) }}"><i
                                                        class="fa fa-pen"></i></a>
                                                <a class="delete" href="javascript:" rel="{{ $list->id }}"><i
                                                        class="fa fa-trash"></i></a>
                                                <a class="slideToggle"><i class="fa fa-chevron-right"></i></a>
                                            </span>
                                        </h2>


                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse "
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <ul>
                                                    @forelse($list->ingredientslists as $ingredientlist)

                                                        <li>{{ $ingredientlist->ingredient->name }}</li>
                                                    @empty
                                                        <p>В этом списке пока нет продуктов</p>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>У вас пока нет ни одного списка</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="row pt-40">
                        <div class="col-md-12">
                            <h5>Добавить новый</h5>
                        </div>
                        <div class="col-md-12 text-right mt-20">
                            <form method="post" class="contact-one__form" action="{{ route('cabinet.lists.store') }}">
                                @csrf
                                <input type="text" name="name" required placeholder="Название списка"
                                    value="{{ old('name') }}">
                                <button type="submit" class="thm-btn">Добавить</button>
                            </form>
                        </div>
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
