<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <tbody>
            @foreach($products as $product)
           <tr>
            <td> <?=$product['id']?></td>
            <td> <?=$product['name']?></td>

           </tr>
           @endforeach
        </tbody>
    </tr>
  </thead>
</table>
</body>
</html>

