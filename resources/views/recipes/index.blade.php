<!DOCTYPE html>
<html>
<head>
    <title>楽天レシピ一覧</title>
</head>
<body>
    <h1>楽天レシピ一覧</h1>

    @if(isset($recipes['result']))
        <ul>
            @foreach($recipes['result'] as $recipe)
                <li>
                    <h2>{{ $recipe['recipeTitle'] }}</h2>
                    <p>{{ $recipe['recipeIndication'] }}</p>
                    <img src="{{ $recipe['foodImageUrl'] }}" alt="{{ $recipe['recipeTitle'] }}">
                </li>
                @foreach($recipe['recipeMaterial'] as $material )
                <p>{{ $material }}</p>
                @endforeach
                <hr>
            @endforeach
        </ul>
    @else
        <p>レシピが見つかりませんでした。</p>
    @endif
    <form action="{{ route('add') }}" method="post">
        @csrf
        <input type="text" name="category">
        <button type="submit"></button>
    </form>
</body>
</html>
