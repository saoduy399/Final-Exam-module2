<?php

$conn = new \App\model\DBConnect();
$connect = $conn->connect();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $value = $_POST['value'];
    $sql = "SELECT * FROM phones WHERE name LIKE '%$value%'";
    $query = $connect->query($sql);
    $phone = $query->fetchAll();
} else{
    $phone = $controller->getAllPhone();
}
?>

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
    <input style="text" name="value">
    <button type="submit">Search</button>
</form>
<div class="container">
    <div class="table">
        <table border="1px" >
            <tr>
                <th>id</th>
                <th>name</th>
                <th>category</th>
                <th>price</th>
                <th>quantity</th>
                <th>date</th>
                <th>description</th>
                <th colspan="2">Edit</th>
            </tr>
            <?php foreach ($phone as $item):?>
                <tr>
                    <td><?php echo $item['id']?></td>
                    <td><?php echo $item['name']?></td>
                    <td><?php echo $item['category']?></td>
                    <td><?php echo $item['price']?></td>
                    <td><?php echo $item['quantity']?></td>
                    <td><?php echo $item['date']?></td>
                    <td><?php echo $item['description']?></td>
                    <td><a href="index.php?page=delete_phone&id=<?php echo $item['id']?>">delete</a></td>
                    <td><a href="index.php?page=update_phone&id=<?php echo $item['id']?>">Update</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
</body>
</html>
