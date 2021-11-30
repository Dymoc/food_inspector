<h3>Ингредиенты в категории</h3>
<br>

@foreach($categories as $category)
    <div>{{ $category->name }}</div>
@endforeach

<br>
@foreach($ingredients as $ingredient)
    <div>{{ $ingredient->name }}</div>
@endforeach
