<?php
namespace App\controller;

use App\model;

class BaseController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new model\DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllPhone(){
        $sql = "SELECT * FROM phones";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function addPhone($name, $category, $price, $quantity, $date, $description){
        $sql = "INSERT INTO phones VALUE(null,'$name','$category','$price','$quantity','$date','$description')";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function getPhoneById($id){
        $sql = "SELECT * FROM phones WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->fetch();
    }

    public function updatePhone($id,$name, $category, $price, $quantity, $date, $description){
        $sql = "UPDATE phones SET name='$name',category='$category',price='$price',quantity='$quantity',date='$date',description='$description' WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function deletePhone($id){
        $sql = "DELETE FROM phones WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }
}