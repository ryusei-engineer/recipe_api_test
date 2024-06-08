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
                    <p>{{ $recipe['recipeDescription'] }}</p>
                    <img src="{{ $recipe['foodImageUrl'] }}" alt="{{ $recipe['recipeTitle'] }}">
                </li>
            @endforeach
        </ul>
    @else
        <p>レシピが見つかりませんでした。</p>
    @endif
</body>
</html>
