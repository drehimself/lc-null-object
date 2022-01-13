<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Object Pattern</title>
</head>

<body>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('show', $post) }}">
                    <span>{{ $post->title }}</span>
                    <span> by</span>
                    <span>{{ $post->user->name }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</body>

</html>
