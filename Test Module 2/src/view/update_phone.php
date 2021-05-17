<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="name" value="<?php echo $phone['name']?>" >
    <input type="text" name="category" value="<?php echo $phone['category']?>" >
    <input type="text" name="price" value="<?php echo $phone['price']?>">
    <input type="text" name="quantity" value="<?php echo $phone['quantity']?>">
    <input type="date" name="date" value="<?php echo $phone['date']?>">
    <input type="text" name="description" value="<?php echo $phone['description']?>">
    <button type="submit">OK</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $id = $phone['id'];
    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];
    $quantity = $_REQUEST["quantity"];
    $date = $_REQUEST["date"];
    $description = $_REQUEST["description"];

    $controller->updatePhone($id,$name,$category,$price,$quantity,$date,$description);

    header("location:index.php?page=list_phone");
}
