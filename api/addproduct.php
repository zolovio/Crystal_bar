<?php
  require_once("../connect.php");
  if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['category']) && isset($_POST['gst'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $name = htmlentities($name);

    $price = mysqli_real_escape_string($con,$_POST['price']);
    $price = htmlentities($price);

    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    $quantity = htmlentities($quantity);

    $category = mysqli_real_escape_string($con,$_POST['category']);
    $category = htmlentities($category);

    $gst = mysqli_real_escape_string($con,$_POST['gst']);
    $gst = htmlentities($gst);

    $query="INSERT INTO product (catid,name,price,quantity,gst,status) value ('$category','$name','$price','$quantity','$gst',1)";
    if(mysqli_query($con,$query)){
      echo 1;
    }else{
      echo 0;
    }
    
  }
?>