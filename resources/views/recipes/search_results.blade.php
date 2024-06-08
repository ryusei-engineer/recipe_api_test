<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
</head>
<body>
    <h1>検索結果</h1>
    
    <!-- レシピの表示 -->
    <ul>
        @foreach($recipes as $recipe)
            <li>
                <h2>{{ $recipe->title }}</h2>
                <p>{{ $recipe->description }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
