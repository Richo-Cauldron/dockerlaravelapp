<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Posts</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container mx-auto my-4">
        <h4 class="text-lg">{{ $fromCache ? 'From Cache' : 'Not fromCache'}}</h4>
        <div class="grid grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="post">
                    <h3 class="text-xl">{{$post->title}}</h3>
                    <p class="font-light">{{$post->content}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>