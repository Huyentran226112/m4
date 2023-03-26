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

        .form-create-post {
            margin-top: 2em;
        }

        input, textarea {
            width: 30em;
            margin-bottom: 1em;
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
        <a href="{{route('posts.list')}}">{!! __('language.list_post') !!}</a>
    </div>
    <form action="{{route('posts.store')}}" method="post" class="form-create-post">
        {{csrf_field()}}
        <label for="title">{!! __('language.title') !!}</label> <br/>
        <input id="title" name="title" type="text"/> <br/>
        <label for="content">{!! __('language.content') !!}</label> <br/>
        <textarea id="content" name="content"></textarea><br/>
        <button type="submit" value="Create">{!! __('language.save') !!}</button>
    </form>
</div>
        <form action="{{route('posts.store')}}" method="post" class="form-create-post">
            {{csrf_field()}}
            <label for="title">Tiêu đề</label> <br/>
            <input id="title" name="title" type="text"/> <br/>
            <label for="content">Nội dung</label> <br/>
            <textarea id="content" name="content"></textarea><br/>
            <button type="submit" value="Create">Lưu</button>
        </form>
    </div>
</div>
</body>
</html>