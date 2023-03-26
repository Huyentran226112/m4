<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #2d3032;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #393e40;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
    <div class="links">
        <a href="{!! route('home') !!} "> {!! __('language.home') !!}</a>
        <a href="{!! route('posts.create') !!} "> {!! __('language.create_post') !!}</a>
    </div>
    @if (count($posts) == 0)
        <p>{!! __('language.post_not_exist') !!}</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>{{$post->title}}</li>
            @endforeach
        </ul>
    @endif
</div>
        @if (count($posts) == 0)
            <p>Không có bài viết nào</p>
        @else
            <ul>
                @foreach($posts as $post)
                    <li>{{$post->title}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
</body>
</html>
