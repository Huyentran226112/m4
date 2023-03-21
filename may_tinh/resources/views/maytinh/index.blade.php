<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <form class="table" action="{{route('maytinh.xu_li')}}" method="POST">
        @csrf
        <label for="">nhập số thứ 1:</label><br>
        <input type="text" name="sothunhat"><br>
        <select class="btn btn-info" name="pheptinh">
            <option value="+">cộng</option>
            <option value="-">trừ</option>
            <option value="*">nhân</option>
            <option value="/" selected>chia</option>
        </select><br>
        <label for="">nhập số thứ 2:</label><br>
        <input type="text" name="sothuhai"><br><br>
        <input type="submit" class="btn btn-success" value="Kết quả">
    </form>
</body>

</html>
