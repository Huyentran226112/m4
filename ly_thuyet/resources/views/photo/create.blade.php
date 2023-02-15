<h1>Trang them moi</h1>
<form action="{{ route('photos.store') }}" method="post">
    @csrf
    Username:
    <input type="text" name='username'> <br>
    Password:
    <input type="text" name='password'> <br>
    Login:
    <input type="submit" value='login' >
</form>
