
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>



<h1 style="text-align: center">All Phones are here!</h1>
<a href="index.php?page=list_phone">List Phones</a>
<a href="index.php?page=add_phone">Add a Phones</a>
</body>
</html>
<?php
include __DIR__ . "/vendor/autoload.php";

use App\controller\BaseController;

$controller = new BaseController();

$page = null;
if (isset($_GET['page'])){
    $page = $_GET['page'];
}

switch ($page){
    case "list_phone":
        $phone = $controller->getAllPhone();
        include_once "src/view/list_phone.php";
        break;
    case "delete_phone":
        $id = $_GET['id'];
        $controller->deletePhone($id);
        header("location:index.php?page=list_phone");
        break;
    case "add_phone":
        include_once "src/view/add_phone.php";
        break;
    case "update_phone":
        $phone = $controller->getPhoneById($_GET['id']);
        include_once "src/view/update_phone.php";
        break;

}

