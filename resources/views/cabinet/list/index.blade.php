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

                <div class="col-xl-7 col-lg-7">
                    <h5>Ваши списки</h5>
                    <div class="row gray-border-bottom pt-40">
                        @forelse($lists as $list)
                            <p>{{ $list->name }} <a href="">Просмотр</a> <a href="{{ route('cabinet.lists.edit', ['list' => $list]) }}">Редактировать</a> <a class="delete" href="javascript:" rel="{{ $list->id }}">Удалить</a></p>
                            <ul>
                                @forelse($list->ingredientslists as $ingredientlist)

                                    <li>{{ $ingredientlist->ingredient->name }}</li>
                                @empty
                                    В этом списке пока нет продуктов
                                @endforelse
                            </ul>
                        @empty
                            У вас пока нет ни одного списка
                        @endforelse
                    </div>
                    <div class="row">
                        <h5>Добавить новый</h5>
                        <form method="post" class="contact-one__form col-md-12"
                            action="{{ route('cabinet.lists.store') }}">
                            @csrf
                            
                            <div class="col-md-12">
                                <input type="text" name="name" placeholder="Название списка" value="{{ old('name') }}">
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" class="thm-btn">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact-one -->







@endsection
@section('scripts')
<script type="text/javascript">
    $(function() {
        $(".delete").on('click', function() {
            var id = $(this).attr('rel');
            if (confirm("Вы уверены, что хотите удалить список?")) {
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
            }
        });
    });
</script>
@endsection
