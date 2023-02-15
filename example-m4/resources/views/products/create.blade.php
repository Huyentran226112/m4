<!-- <h1>
    < echo $name;?>
</h1>



<h1>
    < echo $age;?>
</h1> -->

<form action="/store" method="post">
    @csrf
    Username:
    <input type="text" name="username" id="">
    <br>
    password:

    <input type="password" name="password" id="">
    <br>

    <input type="submit" value= "dang nhap">
</form>
