@foreach ($ingredients as $ingredient)
    <div>{{ $ingredient->name }}</div>
@endforeach


{{--@forelse ($ingredients as $ing)--}}
{{--    <p>This is user {{ $ing->id }}</p>--}}
{{--@endforelse--}}
