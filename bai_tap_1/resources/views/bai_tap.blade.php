<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form class="table" action="" method="post">
    @csrf
  <label for="fname">Product Description</label><br>
  <input type="text" id="fname" name="productDescription" ><br>
  <label for="lname">List Price</label><br>
  <input type="text" id="lname" name="discountPrice" ><br>
  <label for="lname">Discount Percent</label><br>
  <input type="text" id="lname" name="discountPercent"><br><br>
  <input class="btn btn-info" type="submit" value="Submit">
</form>
</body>
</html>