<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>CATEGORIES</h3>
    <hr/>

    <!-- 
        Вот тут форма. 
        Для создания используется HTTP-метод POST 
        для запроса по url '/categories'. 
    -->

    @if ($categories->first())
        @foreach ($categories as $category)
            <div style="display: flex; flex-direction: column; gap: 0px; padding: 20px 0px;">
                <p>{{ $category->name }}</p>
                <a href="{{ route('categories.posts', ['id' => $category->id]) }}">View</a>
            </div>
        @endforeach
    @endif
</body>
</html>