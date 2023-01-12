<?php
  require_once("../connect.php");
  if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['category'])){

  $id = mysqli_real_escape_string($con,@$_POST['id']);
  $id = htmlentities($id);

  $name = mysqli_real_escape_string($con,@$_POST['name']);
  $name = htmlentities($name);

  $price = mysqli_real_escape_string($con,@$_POST['price']);
  $price = htmlentities($price);

  $quantity = mysqli_real_escape_string($con,@$_POST['quantity']);
  $quantity = htmlentities($quantity);

  $category = mysqli_real_escape_string($con,@$_POST['category']);
  $category = htmlentities($category);

  $query="update product set catid='$category',name='$name',price='$price',quantity='$quantity' where id='$id'";
    if(mysqli_query($con,$query)){
      echo 1;
    }else{
      echo 0;
    }
  }
?>