<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .error {
            width: 70%;
            padding: 20px;
            border-radius: 20px;
            background: rgba(255, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .error__message {
            color: #F22;
            font-size: 22px;
            font-weight: bold
        }
    </style>
    <title>Document</title>
</head>
<body>
    @if ($errors->first())
        @foreach ($errors->all() as $error)
            <div class="error">
            <span class="error__message">
                {{ $error }}
            </span>
        </div>
        @endforeach
    @endif
    @if (session('status'))
        <h4>{{ session('status') }}</h4>
    @endif
    <h3>HOME</h3>
    <hr/>
    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
</body>
</html>