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
<div class="container">
    <form method="post" class="form">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="category" placeholder="category">
        <input type="text" name="price" placeholder="price">
        <input type="text" name="quantity" placeholder="quantity">
        <input type="date" name="date" placeholder="date">
        <input type="text" name="description" placeholder="description">
        <button type="submit">OK</button>
    </form>
</div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];
    $quantity = $_REQUEST["quantity"];
    $date = $_REQUEST["date"];
    $description = $_REQUEST["description"];

    $controller->addPhone($name, $category, $price, $quantity, $date, $description);

    header("location:index.php?page=list_phone");
}