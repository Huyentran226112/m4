<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="post" action=""class=table>
    @csrf
  <label for="fname">Product Description</label><br>
 <input type="text" id="fname" name="product_description" ><br>
 <label for="fname">discount Price</label><br>
 <input type="text" id="fname" name="discountPrice" ><br>
 <label for="fname">Discount Percent</label><br>
 <input type="text" id="fname" name="discount_percent" ><br>
 <input class="btn btn-info" type="submit" value="Submit">
</form>
</body>
</html>
