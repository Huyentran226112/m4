<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Task Management
        </div>
    <div class="links">
    <a href="{{ route('tasks.create') }}">Add new task</a>
    <a href="{{ route('tasks.index') }}">Tasks list</a>
</div>
</div>
    </div>
</div>
</body>
</html>