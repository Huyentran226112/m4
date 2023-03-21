<!doctype html>

<html lang="en">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"

         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>Login</title>

</head>

<body>

<form action="{{ route('auth.login') }}" method="post">

   @csrf

   Email:

   <input type="text" name="email" value="{{ $email }}">

   Password:

   <input type="text" name="password" value="{{ $password }}">

   <button type="submit">Login</button>

</form>

</body>

</html>
