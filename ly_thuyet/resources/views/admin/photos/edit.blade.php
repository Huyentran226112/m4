<h1>Trang chinh sua: {{ $id }}</h1>
<form action="{{ route('photos.update',$id) }}" method="post">
    @method('PUT')
    @csrf
    Username:
    <input type="text" name='username'> <br>
    Password:
    <input type="text" name='password'> <br>
    Login:
    <input type="submit" value='login' >
</form>
