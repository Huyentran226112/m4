
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch ngôn ngữ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form class="table" action="" method="post">
    @csrf
  <label for="fname">Nhập từ muốn dịch :</label><br>
  <input type="textbox" placeholder="Nhập vào đây" name="tudien" ><br>
  <select id="cars" name="dich">
  <option value="tienganh" >Dịch tiếng anh sang tiếng việt</option>
  <option value="tiengviet" >Dịch tiếng việt sang tiếng anh</option>
</select><br>
  <input class="btn btn-info" type="submit" value="Dịch">
</form> 
</body>
</html>